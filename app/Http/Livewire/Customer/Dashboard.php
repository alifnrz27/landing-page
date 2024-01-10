<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Brand;
use App\Models\ClaimedVoucherGift;
use App\Models\Claim;
use App\Models\Promotion;
use App\Models\Product;
use App\Models\Store;
use App\Models\CustomerAddress;
use App\Models\User;
use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Dashboard extends Component
{
    public
    $detailInbox = '',
    $allInbox = [],
    $promoInbox = [],
    $voucherInbox = [],
    $vouchers = [],
    $promotions = [],
    $total_price=0,
    $image_transfer="",
    $carts=[];

    protected $listeners = ['processCroppedImage' => 'processCroppedImage'];

    public function mount(){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $currentDate = Carbon::now();
        // $this->claims = ClaimedVoucherGift::where([
        //     'user_id' =>auth()->user()->id,
        //     'is_used' => false
        // ])->whereDate('valid_until', '>=', $currentDate)
        // ->with(['claim'])
        // ->limit(5)->get();
        // $id_claimmed = [];
        // foreach($this->claims as $index => $claim){
        //     $id_claimmed[] = $claim['claim_id'];
        // }

        // if(count($this->claims) < 5){
        //     $claims = Claim::where([
        //         ['status', '=', true],
        //         ['exchange_rate', '<=', auth()->user()->total_point],
        //         ['brand_id', '=', $brand->id]
        //         ])
        //     ->whereDate('start_date', '<=', $currentDate)
        //     ->whereDate('end_date', '>=', $currentDate)
        //     ->whereNotIn('id', $id_claimmed)
        //     ->limit(5-count($this->claims))->get();
        //     $this->claims = $this->claims->concat($claims);
        // }

        $this->products = Product::where('status', true)
                            ->where('brand_id', $brand->id)
                            ->where('status_by_admin', true)
                            ->whereDate('end_date', '>', $currentDate)
                            ->limit(5)->get();

        $this->promotions = Promotion::where('status', true)
                        ->where('brand_id', $brand->id)
                        ->where('status_by_admin', true)
                        ->whereDate('start_date', '<=', $currentDate)
                        ->whereDate('end_date', '>=', $currentDate)
                        ->with(['brand'])
                        ->limit(5)->get();

        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $this->merchants = Store::select('city', 'store_image')
                            ->where('brand_id', $brand->id)
                            ->groupBy('city', 'store_image') // Mengelompokkan berdasarkan kota dan gambar toko
                            ->selectRaw('city, store_image, COUNT(city) as count') // Menghitung jumlah masing-masing kota
                            ->limit(6)
                            ->get();
        // $this->merchants = Store::where('brand_id', $brand->id)
        //                             ->limit(3)
        //                             ->get();

        $this->currentPage = "dashboard";
    }

    public function detailInbox($type_inbox, $id){
        if($type_inbox == 'promotion'){
            $this->detailInbox = Promotion::where('id', $id)
                            ->first();
            $this->detailInbox['type_inbox'] = 'promotion';
        }elseif($type_inbox == 'voucher'){
            $this->detailInbox = Claim::where('id', $id)
                            ->first();
            $this->detailInbox['type_inbox'] = 'voucher';
        }

        $this->emit('showDetailInbox', true);
    }

    public function showInbox(){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $currentDate = Carbon::now();
        $this->promoInbox = Promotion::where('status', true)
                        ->where('brand_id', $brand->id)
                        ->where('status_by_admin', true)
                        ->whereDate('start_date', '<=', $currentDate)
                        ->whereDate('end_date', '>=', $currentDate)
                        ->get();
        $this->voucherInbox = Claim::where('status', true)
                        ->where('claim_type_id', 1)
                        ->where('brand_id', $brand->id)
                        ->whereDate('start_date', '<=', $currentDate)
                        ->whereDate('end_date', '>=', $currentDate)
                        ->get();

        $this->allInbox = collect();

        foreach ($this->promoInbox as $promo) {
            $this->allInbox->push([
                'id' => $promo->id,
                'thumbnail_path' => $promo->thumbnail_path,
                'title' => $promo->title,
                'start_date' => $promo->start_date,
                'type_inbox' => 'promotion',
            ]);
        }

        foreach ($this->voucherInbox as $voucher) {
            $this->allInbox->push([
                'id' => $voucher->id,
                'thumbnail_path' => $voucher->thumbnail_path,
                'title' => $voucher->title,
                'start_date' => $voucher->start_date,
                'type_inbox' => 'voucher',
            ]);
        }

        $this->allInbox = collect($this->allInbox)->sortBy('start_date')->values()->all();

        $this->emit('showInbox', true);
        }

    public function openCart(){
        $this->total_price = 0;
        $this->carts = Cart::where([
            'user_id' => auth()->user()->id,
        ])->with(['product'])->get();

        foreach ($this->carts as $index => $cart) {
            if($cart->is_active == 1){
                $this->total_price += $cart->amount * $cart->product->price;
            }
        }
        $this->emit('showCart', true);
    }

    public function checkCart($cart_id){
        $cart = Cart::where(['id' => $cart_id])->first();

        if($cart->is_active == 1){
            Cart::where(['id' => $cart_id])->update(['is_active' => 0]);
        }else{
            Cart::where(['id' => $cart_id])->update(['is_active' => 1]);
        }

        $this->openCart();
    }

    public function deleteCart($cart_id){
        Cart::where(['id' => $cart_id])->delete();
        $this->openCart();
    }

    public function sendHomeConfirm(){
        $this->myAddress = CustomerAddress::where(['user_id' => auth()->user()->id, 'is_primary' => true])->with(['buildingType'])->first();
        if(!$this->myAddress){
            $encryptedData = encrypt(['from_cart' => true]);
            return redirect(route('profile', ['data' => $encryptedData]));
        }

        $this->emit('uploadImageTransfer', true);
    }

    public function buyNow(){
        $active_carts = Cart::where([
            'user_id' => auth()->user()->id,
            'is_active' => 1
        ])->with(['product'])->get();

        if(count($active_carts) <= 0){
            return;
        }
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
            'total' => $this->total_price,
            'address' => $address,
            'transfer_image' => $path,
            'status' => 1, // menunggu konfirmasi
        ]);
        $submit_carts= [];
        foreach ($active_carts as $key => $cart) {
            $submit_carts[] = [
                'transaction_id' => $transaction->id,
                'product_id' => $cart->product['id'],
                'amount' => $cart->product['price'],
            ];
        }

        DetailTransaction::insert($submit_carts);
        Cart::where([
            'user_id' => auth()->user()->id,
            'is_active' => 1
        ])->delete();

        $this->openCart();

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Successfully buy product',
            'text'=>'',
        ]);
        $this->emit('uploadImageTransfer', false);
    }

    public function render()
    {
        return view('livewire.customer.dashboard');
    }
    public function processCroppedImage($data){
        $this->image_transfer = $data;
        $this->emit('uploadImageTransfer', true);
    }
}
