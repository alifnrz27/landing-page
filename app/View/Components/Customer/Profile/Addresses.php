<?php

namespace App\View\Components\Customer\Profile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Addresses extends Component
{
    /**
     * Create a new component instance.
     */

     public $addressLists;
    public function __construct($addressLists)
    {
        $this->addressLists = $addressLists;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.customer.profile.addresses');
    }
}
