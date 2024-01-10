<?php

namespace App\Http\Livewire\Customer;

use App\Models\Brand;
use App\Models\Claim;
use App\Models\ClaimStore;
use App\Models\PromotionStore;
use App\Models\ProductStore;
use App\Models\ClaimedVoucherGift;
use App\Models\HistoryCustomerPoint;
use App\Models\Promotion;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\CustomerAddress;
use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class Merchant extends Component
{
    public
        $merchants = [],
        $merchantCity=[],
        $openStore = false,
        $detailStore = '',
        $idStore = '',
        $countVouchersBrand = 0,
        $countGiftsBrand = 0,
        $countPromotionsBrand = 0,
        $countProductsBrand=0,
        $vouchers = [],
        $gifts = [],
        $promotions = [],
        $products = [],
        $limitVouchers = 3,
        $limitGifts = 3,
        $limitPromotions = 3,
        $limitProducts=3,
        $detailClaim='',
        $detailPromo = '',
        $detailProduct='',
        $image_transfer="",
        $showStoreLists = false,
        $showGiftLists = false,
        $showAddMoreButtonVouchers = true,
        $showAddMoreButtonGifts = true,
        $showAddMoreButtonPromotions = true,
        $showAddMoreButtonProducts = true,
        $showPromoLists = false,
        $from_promo = false,
        $from_promo_detail = false,
        $from_promo_store = false,
        $from_dashboard = false,
        $from_profile = false,
        $product_from_dashboard = false,
        $from_promo_dashboard = false,
        $from_product_detail = false,
        $currentPage;

    public $idMerchant=null;

    protected $listeners = ['processCroppedImage' => 'processCroppedImage'];

    public function mount(){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $this->brand = Brand::where('user_id', $bussinessOwner->id)->first();
        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(isset($data['from_promo'])){
                $this->from_promo = $data['from_promo'];
            }
            if(isset($data['from_promo_dashboard'])){
                $this->from_promo_dashboard = $data['from_promo_dashboard'];
                $this->showDetailPromo($data['id']);
            }
            if(isset($data['from_promo_detail'])){
                $this->from_promo_detail = $data['from_promo_detail'];
                $this->showDetailPromo($data['id']);
            }
            if(isset($data['from_dashboard'])){
                $this->from_dashboard = $data['from_dashboard'];
                $this->showDetailPromo($data['id']);
            }
            if(isset($data['from_profile'])){
                $this->from_profile = $data['from_profile'];
                $this->showDetailProduct($data['id_product']);
            }
            if(isset($data['product_from_dashboard'])){
                $this->product_from_dashboard = $data['product_from_dashboard'];
                $this->showDetailProduct($data['id']);
            }
            if(isset($data['from_product_detail'])){
                $this->from_product_detail = $data['from_product_detail'];
                $this->showDetailProduct($data['id']);
            }
            if(isset($data['from_promo_store'])){
                $this->from_promo_store = $data['from_promo_store'];
                $this->openMerchant($data['id_store']);
            }

        }


        $this->currentPage = "merchant";
    }

    public function getCityMerchants(){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $this->merchants = Store::select('city', 'store_image')
                            ->where('brand_id', $brand->id)
                            ->groupBy('city', 'store_image') // Mengelompokkan berdasarkan kota dan gambar toko
                            ->selectRaw('city, store_image, COUNT(city) as count') // Menghitung jumlah masing-masing kota
                            ->limit(6)
                            ->get();
    }

    public function render(){
        $this->getCityMerchants();
        return view('livewire.customer.merchant');
    }

    public function openCity($city){
        $this->getCityMerchants();
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $this->merchantCity = Store::
                            where('brand_id', $brand->id)
                            ->where('city', $city)
                            ->get();

        $this->emit('showCityStore', true);
    }

    public function openMerchant($store_id){
        $this->idStore = $store_id;
        $this->detailStore = Store::where('id', $store_id)
            ->first();
        $this->countVouchersBrand = ClaimStore::where([
                'store_id' => $store_id
            ])->whereHas('claim', function ($query) {
                $query->where([
                    'claim_type_id' => 1,
                    'status' => true,
                    'status_by_admin' => true
                ])->whereDate('start_date', '<=', Carbon::now())
                ->whereDate('end_date', '>=', Carbon::now());
            })->count();
        $this->countGiftsBrand = ClaimStore::where([
                'store_id' => $store_id
            ])->whereHas('claim', function ($query) {
                $query->where([
                    'claim_type_id' => 2,
                    'status' => true,
                    'status_by_admin' => true
                ])->whereDate('start_date', '<=', Carbon::now())
                ->whereDate('end_date', '>=', Carbon::now());
            })->count();
        $this->countPromotionsBrand = PromotionStore::where([
                'store_id' => $store_id
            ])->whereHas('promotion', function ($query) {
                $query->where([
                    'status' => true,
                    'status_by_admin' => true
                ])->whereDate('start_date', '<=', Carbon::now())
                ->whereDate('end_date', '>=', Carbon::now());
            })->count();

        $this->countProductsBrand = ProductStore::where([
                'store_id' => $store_id
            ])->whereHas('product', function ($query) {
                $query->where([
                    'status' => true,
                    'status_by_admin' => true
                ])
                ->whereDate('end_date', '>=', Carbon::now());
            })->count();

        $this->vouchers =  Claim::where('status', true)
                        ->where('status_by_admin', true)
                        ->where('claim_type_id', 1)
                        ->whereDate('start_date', '<=', Carbon::now())
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('claimStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->with(['claimmed'])->limit($this->limitVouchers)
                        ->get();
        $this->gifts =  Claim::where('status', true)
                        ->where('status_by_admin', true)
                        ->where('claim_type_id', 2)
                        ->whereDate('start_date', '<=', Carbon::now())
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('claimStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->with(['claimmed'])->limit($this->limitGifts)
                        ->get();
        $this->promotions =  Promotion::where('status', true)
                        ->where('status_by_admin', true)
                        ->whereDate('start_date', '<=', Carbon::now())
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('promotionStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->limit($this->limitPromotions)
                        ->get();
        $this->products =  Product::where('status', true)
                        ->where('status_by_admin', true)
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('productStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->limit($this->limitProducts)
                        ->get();
        $this->emit('showStore', true);
    }

    public function closeMerchant(){
        $this->mount();
        $this->emit('showMerchant', false);
    }

    public function addMoreVoucher(){
        $currentLimits = $this->limitVouchers;
        $this->limitVouchers += 3;
        $store_id = $this->idStore;
        $this->vouchers =  Claim::where('status', true)
                        ->where('status_by_admin', true)
                        ->where('claim_type_id', 1)
                        ->whereDate('start_date', '<=', Carbon::now())
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('claimStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->with(['claimmed'])->limit($this->limitVouchers)
                        ->get();

        if($currentLimits >= count($this->vouchers)) {
            $this->showAddMoreButtonVouchers = false;
        }
        $this->emit('showMoreButtonVoucher', true);
    }

    public function addMoreGift(){
        $currentLimits = $this->limitGifts;
        $this->limitGifts += 3;
        $store_id = $this->idStore;
        $this->gifts =  Claim::where('status', true)
                        ->where('status_by_admin', true)
                        ->where('claim_type_id', 2)
                        ->whereDate('start_date', '<=', Carbon::now())
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('claimStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->with(['claimmed'])->limit($this->limitGifts)
                        ->get();

        if($currentLimits >= count($this->gifts)) {
            $this->showAddMoreButtonGifts = false;
        }
        $this->emit('showMoreButtonGift', true);
    }

    public function addMorePromotion(){
        $currentLimits = $this->limitPromotions;
        $this->limitPromotions += 3;
        $store_id = $this->idStore;
        $this->promotions =  Promotion::where('status', true)
                        ->where('status_by_admin', true)
                        ->whereDate('start_date', '<=', Carbon::now())
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('promotionStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->limit($this->limitPromotions)
                        ->get();

        if($currentLimits >= count($this->promotions)) {
            $this->showAddMoreButtonPromotions = false;
        }
        $this->emit('showMoreButtonPromotion', true);
    }

    public function addMoreProduct(){
        $currentLimits = $this->limitProducts;
        $this->limitProducts += 3;
        $store_id = $this->idStore;
        $this->products =  Product::where('status', true)
                        ->where('status_by_admin', true)
                        ->whereDate('end_date', '>=', Carbon::now())
                        ->whereHas('productStores', function ($query) use ($store_id) {
                            $query->where('store_id', $store_id);
                        })->limit($this->limitProducts)
                        ->get();

        if($currentLimits >= count($this->products)) {
            $this->showAddMoreButtonProducts = false;
        }
        $this->emit('showMoreButtonProduct', true);
    }

    // public function openStore($id){
    //     $this->limitVouchers = 3;
    //     $this->limitGifts = 3;
    //     $this->limitPromotions = 3;
    //     $this->idStore = $id;
    //     $this->showAddMoreButtonVouchers = true;
    //     $this->showAddMoreButtonGifts = true;
    //     $this->showAddMoreButtonPromotions = true;

    //     $this->detailStore = Brand::where('id', $id)
    //                         ->with([
    //                             'stores',
    //                             ])
    //                         ->first();
    //     $currentDate = Carbon::now();
    //     $this->countVouchersBrand = Claim::where('status', true)
    //                                 ->where('brand_id', $id)
    //                                 ->where('claim_type_id', 1)
    //                                 ->whereDate('start_date', '<=', $currentDate)
    //                                 ->whereDate('end_date', '>', $currentDate)->count();
    //     $this->countGiftsBrand = Claim::where('status', true)
    //                                 ->where('brand_id', $id)
    //                                 ->where('claim_type_id', 2)
    //                                 ->whereDate('start_date', '<=', $currentDate)
    //                                 ->whereDate('end_date', '>', $currentDate)->count();
    //     $this->countPromotionsBrand = Promotion::where('status', true)
    //                                 ->where('brand_id', $id)
    //                                 ->whereDate('start_date', '<=', $currentDate)
    //                                 ->whereDate('end_date', '>', $currentDate)->count();

    //     $this->vouchers = Claim::where('status', true)
    //                     ->where('brand_id', $id)
    //                     ->where('claim_type_id', 1)
    //                     ->whereDate('start_date', '<=', $currentDate)
    //                     ->whereDate('end_date', '>', $currentDate)
    //                     ->limit($this->limitVouchers)->get();

    //     $this->gifts = Claim::where('status', true)
    //                     ->where('brand_id', $id)
    //                     ->where('claim_type_id', 2)
    //                     ->whereDate('start_date', '<=', $currentDate)
    //                     ->whereDate('end_date', '>', $currentDate)
    //                     ->limit($this->limitGifts)->get();

    //     $this->promotions = Promotion::where('status', true)
    //                     ->where('brand_id', $id)
    //                     ->whereDate('start_date', '<=', $currentDate)
    //                     ->whereDate('end_date', '>', $currentDate)
    //                     ->limit($this->limitPromotions)->get();

    //     $this->emit('showStore', true);
    // }

    public function showExchangeConfirm($id){
        $this->detailClaim = Claim::where(["id" => $id])->with(['brand', 'claimStores'])->first();
        $this->emit('showExchangeConfirm', true);
    }

    public function showDetailClaim($id){
        $this->detailClaim = Claim::where(["id" => $id])->with(['brand', 'claimStores', 'claimmed'])->first();
        $this->emit('showDetailClaim', true);
    }

    public function showDetailPromo($id){
        $this->detailPromo = Promotion::where(["id" => $id])->with(['brand', 'promotionStores'])->first();
        $this->emit('showDetailPromo', true);
    }

    public function showDetailProduct($id){
        $this->detailProduct = Product::where(["id" => $id])->with(['brand', 'productStores'])->first();
        $this->emit('showDetailProduct', true);
    }

    public function closeStore(){
        $this->showGiftLists = false;
        $this->showPromoLists = false;
        $this->emit('showStore', false);
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
            $this->emit('showExchangeConfirm', false);

        }

    }









    // Product
    public function sendHomeConfirm(){
        $this->myAddress = CustomerAddress::where(['user_id' => auth()->user()->id, 'is_primary' => true])->with(['buildingType'])->first();
        if(!$this->myAddress){
            $encryptedData = encrypt(['from_detail_product' => true, 'id_product' => $this->detailProduct['id']]);
            return redirect(route('profile', ['data' => $encryptedData]));
        }

        $this->emit('uploadImageTransfer', true);
    }

    public function buyNow(){
        $total = $this->detailProduct['price'];
        $customerAddress = CustomerAddress::where([
            'user_id' => auth()->user()->id,
            'is_primary' => 1
        ])->first();

        $address = $customerAddress->detail . " " . $customerAddress->urban_village . " " . $customerAddress->subdistrict . " " . $customerAddress->city . " " . $customerAddress->province . " (" . $customerAddress->postal_code . ")";

        if(substr($this->image_transfer, 0, 4) == "data"){
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->image_transfer));
            $pathToSave = storage_path('app/public/imagesTransfer'); // Ganti dengan direktori yang sesuai
            $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
            $imagePath = $pathToSave . '/' . $imageName;
            $path = "imagesTransfer/".$imageName;
            file_put_contents($imagePath, $imageData);
        }

        $transaction = Transaction::create([
            'user_id'=> auth()->user()->id,
            'total' => $total,
            'address' => $address,
            'transfer_image' => $path,
            'status' => 1, // menunggu konfirmasi
        ]);

        DetailTransaction::create([
            'transaction_id' => $transaction->id,
            'product_id' => $this->detailProduct['id'],
            'amount' => $total,
        ]);

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Successfully buy product',
            'text'=>'',
        ]);
        $this->emit('uploadImageTransfer', false);
    }

    public function addToCart(){
        $checkProduct = Cart::where([
            'user_id' => auth()->user()->id,
            'product_id' => $this->detailProduct['id']
        ])->first();

        if($checkProduct == null){
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $this->detailProduct['id'],
                'amount' => 1
            ]);
        }

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Successfully add to cart',
            'text'=>'',
        ]);
    }


    public function processCroppedImage($data){
        $this->image_transfer = $data;
        $this->emit('uploadImageTransfer', true);
    }
}
