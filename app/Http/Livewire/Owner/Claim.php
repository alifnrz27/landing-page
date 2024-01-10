<?php

namespace App\Http\Livewire\Owner;

use App\Models\Brand;
use App\Models\ChangeSystem;
use App\Models\ChangeType;
use App\Models\Claim as ModelsClaim;
use App\Models\ClaimedVoucherGift;
use App\Models\ClaimStore;
use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Claim extends Component
{
    use WithFileUploads;
    protected $listeners = ['updateStoreId' => 'updateStoreIdMethod', 'processCroppedImage' => 'processCroppedImage'];
    public $change_type, $change_system, $brand, $stores, $claims = [];
    public
    $isShow = false,
    $isShowUpdate = false,
    $status = true,
    $is_all_stores = false,
    $redeemIsOpen = false,
    $redeemHistoryIsOpen=false,
    $undeliveredGifts=[],
    $undeliveredHistoryGifts=0,
    $show_data = [],
    $errorMessages = [],
    $listCustomers = [],
    $selectedCustomers = [],
    $sendToCustomers = [],
    $allRedeems = [],
    $allRedeemVouchers=[],
    $allRedeemGifts =[],
    $allHistoryRedeems=[],
    $allHistoryRedeemVouchers=[],
    $allHistoryRedeemGifts=[],
    $claim_type_id=1,
    $change_type_id=1,
    $change_system_id=1,
    $exchange_rate=1,
    $validity_duration = 1,
    $searchCustomers = "",
    $optionHistory,
    $search = "",
    $searchRedeem = "",
    $searchHistoryRedeem = '',
    $redeemConfirm = "",
    $currentDate="",
    $is_send="belum dikirim",
    $is_success="belum berhasil",
    $expedition="JNE",
    $receipt_number="",
    $store_id=0,
    $title,
    $description,
    $start_date,
    $end_date,
    $limit,
    $stock,
    $thumbnail,
    $thumbnail_image,
    $voucher_total= 0,
    $gift_total = 0,
    $takeInStore,
    $crop_image = "",
    $takeHome;

    public function mount(){
        $this->clearData();
        $this->listCustomers = [];
        $this->selectedCustomers = [];
        $this->searchCustomers = "";
        $this->claim_type_id=1;
        $this->change_type_id=1;
        $this->change_system_id=1;
        $this->exchange_rate=1;
        $this->validity_duration = 1;
        $this->voucher_total= 0;
        $this->gift_total = 0;
        $this->isShow = false;
        $this->isShowUpdate = false;
        $this->currentDate = Carbon::now();

        $this->change_type = ChangeType::get();
        $this->change_system = ChangeSystem::get();
        if(auth()->user()->role_id == 2){
            $this->brand = Brand::where(['user_id' => auth()->user()->id])->first();
        }else{
            $store = Store::where(['user_id' => auth()->user()->id])->first();
            $this->brand = Brand::where(['id' =>$store->brand_id])->first();
        }


        $this->stores = Store::where([
            ['brand_id' , '=', $this->brand['id']]
        ])->get();

        $this->voucher_total = ModelsClaim::where([
            ['brand_id' , '=', $this->brand['id']],
            ['claim_type_id', '=', 1],
        ])->count();
        $this->gift_total = ModelsClaim::where([
            ['brand_id' , '=', $this->brand['id']],
            ['claim_type_id', '=', 2],
        ])->count();
    }

    public function showClaim($id){
        $this->show_data = ModelsClaim::where([
            'id' => $id
        ])->with(['claimStores'])->first();
        $this->isShow = true;

        $this->status = $this->show_data['status'];
        $this->start_date = $this->show_data['start_date'];
        $this->end_date = $this->show_data['end_date'];
        $this->limit = $this->show_data['limit'];
        $this->thumbnail_image = $this->show_data['thumbnail_path'];
        $this->title = $this->show_data['title'];
        $this->stock = $this->show_data['stock'];
        $this->description = $this->show_data['description'];
        $this->claim_type_id = $this->show_data['claim_type_id'];
        $this->change_type_id = $this->show_data['change_type_id'];
        $this->exchange_rate = $this->show_data['exchange_rate'];
        $this->validity_duration = $this->show_data['validity_duration'];
        $this->change_system_id = $this->show_data['change_system_id'];
        $this->status = $this->show_data['status'];
        $this->is_all_stores = $this->show_data['is_all_stores'];
        if($this->show_data['change_system_id'] == 3){
            $this->takeInStore = "yes";
            $this->takeHome = "yes";
        }else if($this->show_data['change_system_id'] == 2){
            $this->takeHome = "yes";
        }else if($this->show_data['change_system_id'] == 1){
            $this->takeInStore = "yes";
        }
    }

    public function showRedeem(){
        $this->redeemIsOpen = true;
        $this->allRedeems = ClaimedVoucherGift::where([
                            ['brand_id', '=', $this->brand['id']],
                            ['is_used', '=', false],
                            ['code', 'like', '%'.$this->searchRedeem."%"]
                        ])
                        ->whereDate('valid_until', '>', $this->currentDate)
                        ->with(['claim', 'user'])->latest()->get();
        $this->allRedeemVouchers = [];
        $this->allRedeemGifts = [];
        foreach($this->allRedeems as $redeem){
            if($redeem['claim']['claim_type_id'] == 1){
                $this->allRedeemVouchers[] = $redeem;
            }else{
                $this->allRedeemGifts[]= $redeem;
            }
        }
        $this->undeliveredGifts = ClaimedVoucherGift::where('brand_id', $this->brand['id'])
                        ->where('is_used', 1)
                        ->where('status', 0)
                        ->whereHas('claim', function ($query) {
                            $query->where('claim_type_id', 2);
                        })
                        ->get();
        $this->emit('showRedeem', true);
    }

    function showHistoryRedeem() {
        $this->redeemHistoryIsOpen = true;
        $this->allHistoryRedeems = ClaimedVoucherGift::where([
                            ['brand_id', '=', $this->brand['id']],
                            ['is_used', '=', true],
                            ['code', 'like', '%'.$this->searchHistoryRedeem."%"]
                        ])->with(['claim', 'store'])->latest()->get();
        $this->allHistoryRedeemVouchers = [];
        $this->allHistoryRedeemGifts = [];
        foreach($this->allHistoryRedeems as $redeem){
            if($redeem['claim']['claim_type_id'] == 1){
                $this->allHistoryRedeemVouchers[] = $redeem;
            }else{

                $this->allHistoryRedeemGifts[]= $redeem;
            }
        }
        $this->emit('showHistoryRedeem', true);
    }

    public function showOptionHistory($id){
        $this->optionHistory = ClaimedVoucherGift::where([
            'id' => $id
        ])->with(['claim', 'store'])->first();
        if($this->optionHistory['expedition']){
            $this->expedition=$this->optionHistory['expedition'];
        }
        if($this->optionHistory['receipt_number']){
            $this->receipt_number=$this->optionHistory['receipt_number'];
        }
        $this->emit('showOptionHistory', true);
    }

    public function sendGift(){
        if($this->is_send == "sudah dikirim"){
            ClaimedVoucherGift::where([
                'id' => $this->optionHistory['id']
            ])->update([
                'is_delivered' => true,
            ]);
        }

        $this->emit('showOptionHistory', false);
    }

    public function finishSendGift(){
        if($this->is_success=="belum berhasil"){
            ClaimedVoucherGift::where([
                'id' => $this->optionHistory['id']
            ])->update([
                'expedition' => $this->expedition,
                'receipt_number' => $this->receipt_number,
            ]);
        }else{
            if($this->receipt_number != ""){
                ClaimedVoucherGift::where([
                    'id' => $this->optionHistory['id']
                ])->update([
                    'expedition' => $this->expedition,
                    'receipt_number' => $this->receipt_number,
                    'status' => true,
                ]);
            }
        }
        $this->emit('showOptionHistory', false);
    }

    public function showRedeemConfirm($id){
        $this->redeemConfirm = ClaimedVoucherGift::where([
            'id' => $id
        ])->first();
        $this->emit('showRedeemConfirm', true);
    }

    public function redeem(){
        ClaimedVoucherGift::where([
            'id' => $this->redeemConfirm['id']
        ])->update([
            'use_date' => Carbon::now('Asia/Jakarta'),
            'redeem_store' => auth()->user()->id,
            'in_store' => true,
            'is_used' => true,
            'status' => true,
        ]);

        $this->emit('showRedeemNotification', true);
    }

    public function closeRedeem(){
        $this->allRedeems = [];
        $this->allRedeemVouchers = [];
        $this->allRedeemGifts = [];
        $this->redeemHistoryIsOpen=false;
        $this->redeemIsOpen = false;
    }

    public function showUpdateClaim($id){
        $this->isShowUpdate = true;
        $store_id = ClaimStore::select('store_id')->where(['claim_id' => $id])->pluck('store_id')->toArray();
        if($this->show_data['is_all_stores']){
            $this->store_id = 0;
        }else{
            $this->store_id = implode(',', $store_id);
        }
        $this->emit('formOpen', $this->isShowUpdate);
        $this->thumbnail = $this->show_data['thumbnail_path'];
    }

    public function updateStoreIdMethod($storeId){
        $this->store_id = $storeId;
    }

    public function selectedCustomer($id){
        if (in_array($id, $this->selectedCustomers)) {
            // Hapus nilai 1 dari array
            $this->selectedCustomers = array_filter($this->selectedCustomers, function ($value) use ($id) {
                return $value != $id;
            });
        } else {
            // Tambahkan nilai 1 ke array
            array_push($this->selectedCustomers, $id);
        }
    }

    public function changeClaimType($id) {
        $this->claim_type_id = $id;
    }

    public function addValue($variable){
        $this->{$variable} += 1;
    }
    public function subtractValue($variable){
        $this->{$variable} -= 1;
        if($this->{$variable} < 0){
            $this->{$variable} = 0;
        }
    }

    public function removeThumbnail(){
        $this->thumbnail = null;
    }

    public function detailSendClaim(){
        $this->emit('detailSend', true);
    }

    public function submitClaim(){
        $customMessages = [
            'title.required' => 'Title is required.',
            'claim_type_id.required' => "Type claim is required.",
            'change_type_id.required' => 'Change type is required.',
            'stock.numeric' => 'Stock must numeric',
            'stock.required' => 'Stock is required.',
            'takeInStore.required' => 'Choose change type.',
            'exchange_rate.required' => 'Point is required.',
            'validity_duration.required' => 'Validity duration is required.',
            'store_id.required' => 'Store is required.',
            'description.required' => 'Description is required.',
            'limit.required' => 'Limit is required.',
            'start_date.required' => 'Start date is required.',
            'end_date.required' => 'End date is required.',
            'thumbnail.max' => 'File size maximum 8 MB',
        ];
        $validated = [
            'title' => ['required'],
            'store_id' => ['required'],
            'description' => ['required'],
            'limit' => ['required'],
            'stock' => ['required', 'numeric'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'claim_type_id' => ['required'],
            'change_type_id' => ['required'],
            'exchange_rate' => ['required'],
            'validity_duration' => ['required'],
        ];

        if($this->thumbnail != null) {
            $validated = [
                ...$validated,
                'thumbnail' => ['required'],
            ];
        }

        $this->errorMessages = [];
        if($this->claim_type_id == 2){
            if(!$this->takeInStore && !$this->takeHome){
                $this->errorMessages['change_system'] = "Must choose at least one";
            }
        }
        try {
            $this->validate($validated, $customMessages);
            if($this->claim_type_id == 2){
                if(!$this->takeInStore && !$this->takeHome){
                    $this->emit('closeLoader', false);
                    return;
                }
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        if($this->claim_type_id == 1){
            $change_system = 1;
        }else{
            if($this->takeInStore == "yes" && $this->takeHome == "yes"){
                $change_system = 3;
            }else{
                if($this->takeInStore == "yes"){
                    $change_system = 1;
                } else if($this->takeHome == "yes"){
                    $change_system = 2;
                }
            }
        }
        $dataSubmit = [
            'brand_id' => $this->brand['id'],
            'claim_type_id' => $this->claim_type_id,
            'change_type_id' => $this->change_type_id,
            'change_system_id' => $change_system,
            'title' => $this->title,
            'stock' => $this->stock,
            'description' =>$this->description,
            'validity_duration' => $this->validity_duration,
            'limit' => $this->limit,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'exchange_rate' => $this->exchange_rate,
        ];

        if($this->store_id == 0) {
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => true,
            ];
        }
        else{
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => false,
            ];
        }

        if($this->thumbnail != null) {
            // Simpan gambar ke folder imagesPromotion dalam direktori storage
            // $path = $this->thumbnail->store('imagesClaim', 'public');
            // $this->thumbnail = null;
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->thumbnail));
            $pathToSave = storage_path('app/public/imagesClaim'); // Ganti dengan direktori yang sesuai
            $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
            $imagePath = $pathToSave . '/' . $imageName;
            $path = "imagesClaim/".$imageName;
            file_put_contents($imagePath, $imageData);
            $dataSubmit = [
                ...$dataSubmit,
                'thumbnail_path' => $path,
            ];
        }
        else{
            $dataSubmit = [
                ...$dataSubmit,
                'thumbnail_path' => '',
            ];
        }
        $claim = ModelsClaim::create($dataSubmit);
        $claimStore =[];
        if($this->store_id == 0){
            foreach ($this->stores as $index => $store) {
                $claimStore[] =[
                    'claim_id' => $claim->id,
                    'store_id' => $store["id"]
                ];
            }
        }else{
            $array_store_id = explode(",", $this->store_id);
            for($i = 0; $i < count($array_store_id); $i++){
                $claimStore[] =[
                    'claim_id' => $claim->id,
                    'store_id' => $array_store_id[$i]
                ];
            }
        }
        ClaimStore::insert($claimStore);


        $this->deleteShow();
        $this->emit('showNotification', true);
        $this->emit('formOpen', false);
    }

    public function sendClaim(){
        if(count($this->selectedCustomers) <= 0){
            return;
        }
        $this->sendToCustomers = [];
        foreach ($this->selectedCustomers as $index => $customer) {
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
            $dataClaim = ClaimedVoucherGift::create([
                'user_id' => $customer,
                'brand_id' => $this->brand['id'],
                'claim_id' => $this->show_data['id'],
                'valid_until' => date("Y-m-d", $now + ($this->show_data['validity_duration'] * 24 * 60 *60)),
                'exchange_rate' => 0,
                'code' => $code,
            ]);

            $this->sendToCustomers[] = $dataClaim->id;
        }
        $this->emit('showNotificationSendClaim', true);
        $this->emit('detailSend', false);
        $this->selectedCustomers = [];
    }

    public function cancelSendClaim(){
        ClaimedVoucherGift::whereIn('id', $this->sendToCustomers)
        ->delete();
        $this->emit('showNotificationSendClaim', false);
    }

    public function updateClaim($id){
        $customMessages = [
            'title.required' => 'Title is required.',
            'claim_type_id.required' => "Type claim is required.",
            'change_type_id.required' => 'Change type is required.',
            'stock.numeric' => 'Stock must numeric',
            'stock.required' => 'Stock is required.',
            'takeInStore.required' => 'Choose change type.',
            'exchange_rate.required' => 'Point is required.',
            'validity_duration.required' => 'Validity duration is required.',
            'store_id.required' => 'Store is required.',
            'description.required' => 'Description is required.',
            'limit.required' => 'Limit is required.',
            'start_date.required' => 'Start date is required.',
            'end_date.required' => 'End date is required.',
            'thumbnail.max' => 'File size maximum 8 MB',
        ];
        $validated = [
            'title' => ['required'],
            'store_id' => ['required'],
            'description' => ['required'],
            'limit' => ['required'],
            'stock' => ['required', 'numeric'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'claim_type_id' => ['required'],
            'change_type_id' => ['required'],
            'exchange_rate' => ['required'],
            'validity_duration' => ['required'],
        ];

        if($this->thumbnail != null) {
            $validated = [
                ...$validated,
                'thumbnail' => ['required'],
            ];
        }

        $this->errorMessages = [];
        if($this->claim_type_id == 2){
            if(!$this->takeInStore && !$this->takeHome){
                $this->errorMessages['change_system'] = "Must choose at least one";
            }
        }

        try {
            $this->validate($validated, $customMessages);
            if($this->claim_type_id == 2){
                if(!$this->takeInStore && !$this->takeHome){
                    $this->emit('closeLoader', false);
                    return;
                }
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        if($this->claim_type_id == 1){
            $change_system = 1;
        }else{
            if($this->takeInStore == "yes" && $this->takeHome == "yes"){
                $change_system = 3;
            }else{
                if($this->takeInStore == "yes"){
                    $change_system = 1;
                } else if($this->takeHome == "yes"){
                    $change_system = 2;
                }
            }
        }

        $dataSubmit = [
            'claim_type_id' => $this->claim_type_id,
            'change_type_id' => $this->change_type_id,
            'change_system_id' => $change_system,
            'title' => $this->title,
            'description' =>$this->description,
            'validity_duration' => $this->validity_duration,
            'limit' => $this->limit,
            'stock' => $this->stock,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'exchange_rate' => $this->exchange_rate,

        ];

        if($this->store_id == 0) {
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => true,
            ];
        }
        else{
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => false,
            ];
        }

        if($this->thumbnail != null) {
            if(substr($this->thumbnail, 0, 4) == "data"){
                // Simpan gambar ke folder imagesPromotion dalam direktori storage
                // Simpan gambar ke folder imagesPromotion dalam direktori storage
                // $path = $this->thumbnail->store('imagesClaim', 'public');
                // $this->thumbnail = null;
                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->thumbnail));
                $pathToSave = storage_path('app/public/imagesClaim'); // Ganti dengan direktori yang sesuai
                $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
                $imagePath = $pathToSave . '/' . $imageName;
                $path = "imagesClaim/".$imageName;
                file_put_contents($imagePath, $imageData);
                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => $path,
                ];
                if (File::exists(public_path('storage/'.$this->thumbnail_image))) {
                    File::delete(public_path('storage/'.$this->thumbnail_image));
                }
            }
            else{
                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => $this->thumbnail_image,
                ];
            }
        }
        else{
            if (Storage::exists($this->thumbnail_image)) {
                Storage::delete($this->thumbnail_image);

                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => '',
                ];
            }else{
                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => $this->thumbnail_image,
                ];
            }
        }

        ModelsClaim::where('id', $id)->update($dataSubmit);
        ClaimStore::where('claim_id', $this->show_data['id'])->delete();
        $claimStore =[];
        if($this->store_id == 0){
            foreach ($this->stores as $index => $store) {
                $claimStore[] =[
                    'claim_id' => $this->show_data['id'],
                    'store_id' => $store["id"]
                ];
            }
        }else{
            $array_store_id = explode(",", $this->store_id);
            for($i = 0; $i < count($array_store_id); $i++){
                $claimStore[] =[
                    'claim_id' => $this->show_data['id'],
                    'store_id' => $array_store_id[$i]
                ];
            }
        }

        ClaimStore::insert($claimStore);


        $this->clearData();
        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Data saved',
            'text'=>'',
        ]);
        $this->emit('formOpen', false);
        $this->emit('showNotification', true);
    }

    public function processCroppedImage($data){
        $this->thumbnail = $data;
        $this->emit('closeLoader', false);
    }

    public function render()
    {
        if($this->redeemIsOpen){
            $this->showRedeem();
        }
        if($this->redeemHistoryIsOpen){
            $this->showHistoryRedeem();
        }
        $this->listCustomers = User::where([
            ['subdomain_id', '=', auth()->user()->subdomain_id],
            ['role_id', '=', 4],
            ['name', 'like', '%' . $this->searchCustomers . '%']
        ])
        ->orWhere([
            ['subdomain_id', '=', auth()->user()->subdomain_id],
            ['role_id', '=', 4],
            ['phone_number', 'like', '%' . $this->searchCustomers . '%']
        ])
        ->get();

        $this->claims = ModelsClaim::where([
            ['brand_id' , '=', $this->brand['id']],
            ['title', 'like', '%' . $this->search . '%']
            ])->with(['claimStores'])->get();

        return view('livewire.owner.claim');
    }

    public function clearData(){
        $this->title = '';
        $this->store_id = '';
        $this->description = '';
        $this->limit = '';
        $this->stock='';
        $this->start_date = '';
        $this->end_date = '';
        $this->change_system_id = '';
        $this->claim_type_id =1;
        $this->change_type_id = 1;
        $this->exchange_rate = 1;
        $this->validity_duration = 1;
        $this->thumbnail = "";
        $this->thumbnail_image ="";
        $this->change_system_id = "";
        $this->store_id = 0;
        $this->isShow = false;
        $this->isShowUpdate = false;
        $this->show_data = [];
        $this->errorMessages = [];
        $this->takeInStore=null;
        $this->takeHome = null;
        $this->crop_image = null;
    }

    public function changeStatus(){
        ModelsClaim::where([
            'id' => $this->show_data['id']
        ])->update([
            'status' => !$this->status
        ]);
        $this->status = !$this->status;
        $this->render();
    }

    public function deleteShow(){
        $this->mount();
    }
}
