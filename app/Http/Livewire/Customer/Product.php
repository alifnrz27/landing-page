<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Product as ModelsProduct;
use App\Models\User;
use App\Models\Brand;

class Product extends Component
{

    public $products = [];
    public function mount(){
        $currentDate = Carbon::now();
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();

        $this->products = ModelsProduct::where('status', true)
                                ->where('brand_id', $brand->id)
                                ->whereDate('end_date', '>=', $currentDate)
                                ->with(['brand'])
                                ->get();
    }
    public function render()
    {
        return view('livewire.customer.product');
    }
}
