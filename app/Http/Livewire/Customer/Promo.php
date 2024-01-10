<?php

namespace App\Http\Livewire\Customer;

use App\Models\Brand;
use App\Models\Promotion;
use App\Models\User;
use App\Models\Store;
use Carbon\Carbon;
use Livewire\Component;

class Promo extends Component
{
    public $promotions = [], $promotionLimit = 3, $showAddMoreButton = true, $currentPage;
    public function mount(){
        $currentDate = Carbon::now();
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();

        $this->promotions = Promotion::where('status', true)
                                ->where('brand_id', $brand->id)
                                ->whereDate('start_date', '<=', $currentDate)
                                ->whereDate('end_date', '>=', $currentDate)
                                ->with(['brand'])
                                ->get();

        $this->currentPage = "promo";
    }
    public function render()
    {
        return view('livewire.customer.promo');
    }

    public function addMore(){
        $currentLimit = $this->promotionLimit;
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $this->promotionLimit += 3;
        $this->promotions = Promotion::where('status', true)
                                ->where('brand_id', $brand->id)
                                ->whereDate('start_date', '<=', Carbon::now())
                                ->whereDate('end_date', '>=', Carbon::now())
                                ->with(['brand'])
                                ->limit($this->promotionLimit)->get();

        if($currentLimit >= count($this->promotions)){
            $this->showAddMoreButton = false;
        }
    }

    public function gotoMerchants(){
        $encryptedData = encrypt(['from_promo' => true]);
        return redirect(route('merchant', ['data' => $encryptedData]));
    }

    public function openStore($id){
        $encryptedData = encrypt(['from_promo_store' => true, 'id_store' => $id]);
        return redirect(route('merchant', ['data' => $encryptedData]));
    }
}
