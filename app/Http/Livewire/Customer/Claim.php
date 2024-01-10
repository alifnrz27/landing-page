<?php

namespace App\Http\Livewire\Customer;

use App\Models\Brand;
use App\Models\Claim as ModelsClaim;
use App\Models\ClaimedVoucherGift;
use App\Models\CustomerAddress;
use App\Models\HistoryCustomerPoint;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Claim extends Component
{
    public
    $totalClaims = 0,
    $currentDate = "",
    $limitVouchers = 3,
    $limitGifts = 3,
    $vouchersAndGifts=[],
    $vouchers = [],
    $gifts = [],
    $detailClaim = "",
    $detailExpiredVoucher = "",
    $detailUsedVoucher = "",
    $detailActiveVoucher = "",
    $updateTotalPoint=0,
    $myCollection = [],
    $expiredVoucher = [],
    $activeVoucher = [],
    $usedVoucher = [],
    $myAddress = "",
    $showGiftLists = false,
    $from_profile=false,
    $from_dashboard=false,
    $from_voucher_dashboard = false,
    $open_claim = false,
    $open_used_claimmed = false,
    $open_expired_claimmed = false,
    $currentPage,
    $open_active_claimmed = false;

    public function mount(){
        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(isset($data['from_profile'])){
                $this->from_profile = $data['from_profile'];
                $this->detailActiveVoucher = ClaimedVoucherGift::where(['id' => $data['id_claimed_voucher_gift']])->with(['claim'])->first();
                $this->showMyCollection();
            }
            if(isset($data['from_voucher_dashboard'])){
                $this->from_voucher_dashboard = $data['from_voucher_dashboard'];
                $this->showDetailClaim($data['id']);
            }
            if(isset($data['from_dashboard'])){
                $this->from_dashboard = $data['from_dashboard'];
                $this->showMyCollection();
            }

            if(isset($data['open_claimmed'])){
                $is_claimmed = ClaimedVoucherGift::where(['claim_id' => $data['id'], 'user_id' => auth()->user()->id])->with(['claim'])->first();
                if($is_claimmed){
                    $this->open_claimmed = $data['open_claimmed'];
                    $originalDate = strtotime($is_claimmed->valid_until);
                    $newDate = strtotime('+1 day', $originalDate);
                    $validUntil = date('Y-m-d', $newDate);

                    if($is_claimmed->is_used){
                        $this->open_used_claimmed = $data['open_claimmed'];
                        $this->openDetailUsedVoucher($is_claimmed['id']);
                    }
                    else if (Carbon::now() > $validUntil && $is_claimmed['claim']['change_type_id'] == 1) {
                        $this->open_expired_claimmed = $data['open_claimmed'];
                        $this->openDetailExpiredVoucher($is_claimmed['id']);
                    } else {
                        $this->open_active_claimmed = $data['open_claimmed'];
                        $this->openDetailActiveVoucher($is_claimmed['id']);
                    }

                }else{
                    $this->open_claim = $data['open_claimmed'];
                    $this->showDetailClaim($data['id']);
                }
            }

        }

        $this->currentPage = "claim";
    }

    public function backToDashboard(){
        return redirect(route('dashboard'));
    }

    public function openDetailActiveVoucher($id){
        $this->detailActiveVoucher = ClaimedVoucherGift::where(['id' => $id])->with(['claim'])->first();
        $this->render();
        $this->emit('showDetailActiveVoucher', true);
    }

    public function openDetailExpiredVoucher($id){
        $this->detailExpiredVoucher = ClaimedVoucherGift::where(['id' => $id])->with(['claim'])->first();
        $this->emit('showDetailExpiredVoucher', true);
    }

    public function openDetailUsedVoucher($id){
        $this->detailUsedVoucher = ClaimedVoucherGift::where(['id' => $id])->with(['claim', 'store'])->first();
        $this->emit('showDetailUsedVoucher', true);
    }

    public function sendHomeConfirm(){
        $this->myAddress = CustomerAddress::where(['user_id' => auth()->user()->id, 'is_primary' => true])->with(['buildingType'])->first();
        if(!$this->myAddress){
            $encryptedData = encrypt(['from_claim' => true, 'id_claimed_voucher_gift' => $this->detailActiveVoucher['id']]);
            return redirect(route('profile', ['data' => $encryptedData]));
        }
        $this->emit('showSendHomeConfirm', true);
    }

    public function sendHome(){
        ClaimedVoucherGift::where(['id' => $this->detailActiveVoucher['id']])->update([
            'use_date' => Carbon::now('Asia/Jakarta'),
            'address' => $this->myAddress['detail'] . ", " . $this->myAddress['urban_village'] . ", " . $this->myAddress['subdistrict'] . ", " . $this->myAddress['city'] . ", " . $this->myAddress['province'] . "(" . $this->myAddress['postal_code'] . ")",
            'is_used' => true,
        ]);

        return redirect(route('claim'));
    }

    public function render()
    {
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $this->currentDate = Carbon::now();
        $this->totalClaims = ClaimedVoucherGift::where(['user_id' => auth()->user()->id])->count();
        $this->vouchersAndGifts = ModelsClaim::where('status', true)
                        ->where('brand_id', $brand->id)
                        ->whereDate('start_date', '<=', $this->currentDate)
                        ->whereDate('end_date', '>=', $this->currentDate)
                        ->with(['brand', 'claimmed'])->get();
        $this->vouchers = ModelsClaim::where('status', true)
                        ->where('claim_type_id', 1)
                        ->where('brand_id', $brand->id)
                        ->whereDate('start_date', '<=', $this->currentDate)
                        ->whereDate('end_date', '>=', $this->currentDate)
                        ->with(['brand', 'claimmed'])
                        ->limit($this->limitVouchers)->get();
        $this->gifts = ModelsClaim::where('status', true)
                        ->where('claim_type_id', 2)
                        ->where('brand_id', $brand->id)
                        ->whereDate('start_date', '<=', $this->currentDate)
                        ->whereDate('end_date', '>=', $this->currentDate)
                        ->with(['brand', 'claimmed'])
                        ->limit($this->limitGifts)->get();
        return view('livewire.customer.claim');
    }
    public function showExchangeConfirm($id){
        $this->detailClaim = ModelsClaim::where(["id" => $id])->with(['brand', 'claimStores', 'claimmed'])->first();
        $this->emit('showExchangeConfirm', true);
    }

    public function showDetailClaim($id){
        $this->detailClaim = ModelsClaim::where(["id" => $id])->with(['brand', 'claimStores', 'claimmed'])->first();
        $this->emit('showDetailClaim', true);
    }

    public function savePoint(){
        if($this->detailClaim['exchange_rate'] > auth()->user()->total_point){
            $this->dispatchBrowserEvent('modal', [
                'type' => 'error',
                'title'=> 'Your point not enough',
                'text'=>'',
            ]);
            $this->emit('showExchangeConfirm', false);
            return;
        }else{
            if($this->detailClaim['limit'] != 0){
                $checkCode = ClaimedVoucherGift::where(['user_id' => auth()->user()->id, 'claim_id' => $this->detailClaim['id']])->get();
                if(count($checkCode) >= $this->detailClaim['limit']){
                    $this->dispatchBrowserEvent('modal', [
                        'type' => 'error',
                        'title'=> 'You\'re already redeem it',
                        'text'=>'',
                    ]);
                    $this->emit('showExchangeConfirm', false);
                    return;
                }
            }
            if(count($this->detailClaim['claimmed']) >= $this->detailClaim['stock']){
                $this->dispatchBrowserEvent('modal', [
                    'type' => 'error',
                    'title'=> 'Vouchers / gifts have reached the limit',
                    'text'=>'',
                ]);
                $this->emit('showExchangeConfirm', false);
                return;
            }
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = '';

            for ($i = 0; $i < 8; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }
            $checkCode = ClaimedVoucherGift::where(['code' => $code])->get();

            while(count($checkCode) > 0){
                $code = '';

                for ($i = 0; $i < 8; $i++) {
                    $code .= $characters[rand(0, strlen($characters) - 1)];
                }
                $checkCode = ClaimedVoucherGift::where(['code' => $code])->get();
            }
            $now = time();
            ClaimedVoucherGift::create([
                'user_id' => auth()->user()->id,
                'claim_id' => $this->detailClaim['id'],
                'brand_id' => $this->detailClaim['brand_id'],
                'valid_until' => date("Y-m-d", strtotime($this->detailClaim['end_date']) + ($this->detailClaim['validity_duration'] * 24 * 60 *60)),
                'exchange_rate' => $this->detailClaim['exchange_rate'],
                'code' => $code,
            ]);

            User::where('id', auth()->user()->id)->update(['total_point' => auth()->user()->total_point - $this->detailClaim['exchange_rate']]);

            HistoryCustomerPoint::create([
                'user_id' => auth()->user()->id,
                'description' => $this->detailClaim['title'],
                'is_income_point' => false,
                'point' => $this->detailClaim['exchange_rate'],
            ]);

            $this->dispatchBrowserEvent('modal', [
                'type' => 'success',
                'title'=> 'Successfully claimed voucher / gift',
                'text'=>'',
            ]);
            $this->updateTotalPoint = User::where('id', auth()->user()->id)->first();
            $this->updateTotalPoint = $this->updateTotalPoint['total_point'];
            $this->emit('showIsSuccess', true);
            $this->emit('showExchangeConfirm', false);

            // return redirect(route('claim'));

        }

    }

    public function changeAddress(){
        $encryptedData = encrypt(['change_address' => true, 'id_claimed_voucher_gift' => $this->detailActiveVoucher['id']]);
        return redirect(route('profile', ['data' => $encryptedData]));
    }

    public function showMyCollection(){
        $this->activeVoucher = [];
        $this->expiredVoucher = [];
        $this->usedVoucher = [];

        $this->myCollection =   ClaimedVoucherGift::where(['user_id' => auth()->user()->id])->with(['claim'])->latest()->get();

        foreach($this->myCollection as $myCollection){
            $originalDate = strtotime($myCollection->valid_until);
            $newDate = strtotime('+1 day', $originalDate);
            $validUntil = date('Y-m-d', $newDate);

            if($myCollection->is_used){
                array_push($this->usedVoucher, $myCollection);
            }
            else if (Carbon::now() > $validUntil && $myCollection['claim']['change_type_id'] == 1) {
                array_push($this->expiredVoucher, $myCollection);
            } else {
                array_push($this->activeVoucher, $myCollection);
            }
        }
    }
}
