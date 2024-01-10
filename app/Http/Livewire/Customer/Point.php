<?php

namespace App\Http\Livewire\Customer;

use App\Models\HistoryCustomerPoint;
use Livewire\Component;

class Point extends Component
{
    public
    $historyPoints,
    $limitHistory = 5,
    $showButtonMore = true;
    public function mount(){
        $this->historyPoints = HistoryCustomerPoint::where(['user_id' => auth()->user()->id])->latest()->limit($this->limitHistory)->get();
    }

    public function addMore(){
        $currentLimit = $this->limitHistory;
        $this->limitHistory += 5;
        $this->mount();

        if($currentLimit >= count($this->historyPoints)){
            $this->showButtonMore = false;
        }
    }

    public function render()
    {
        return view('livewire.customer.point');
    }
}
