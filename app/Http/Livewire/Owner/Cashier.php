<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;
use App\Models\Point;
use App\Models\User;
use App\Models\HistoryCustomerPoint;
use App\Models\Brand;

class Cashier extends Component
{
    public $openPoint;
    public function mount(){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $this->brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $this->points = Point::where([
            'brand_id' => $this->brand['id'],
            'status' => 0,
        ])
        ->with(['store', 'sales', 'user'])
        ->get();
    }

    public function openPoint($id){
        $this->openPoint = Point::where([
            'id' => $id,
        ])->with(['sales', 'store', 'user'])->first();

        $this->emit('showForm', true);
    }

    public function acceptPoint(){
        HistoryCustomerPoint::create([
            'point_id' => $this->openPoint['id'],
            'user_id' => $this->openPoint['user_id'],
            'description' => $this->openPoint['note'],
            'point' => $this->openPoint['point'],
            'is_income_point' => true,
        ]);
        $user = User::where([
            'id' => $this->openPoint['user_id'],
        ])->first();

        User::where([
            'id' => $this->openPoint['user_id'],
        ])->update([
            "total_point" => $user['total_point'] + $this->openPoint['point']
        ]);

        Point::where([
            'id' => $this->openPoint['id'],
        ])->update([
            'status' => 1,
        ]);
        $this->mount();
        $this->emit('showForm', false);
        $this->emit('showLoading', false);
    }

    public function render()
    {
        return view('livewire.owner.cashier');
    }
}
