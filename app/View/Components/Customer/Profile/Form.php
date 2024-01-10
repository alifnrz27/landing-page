<?php

namespace App\View\Components\Customer\Profile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     */


    public
    $buildingTypes,
    $is_primary;
    public function __construct($buildingTypes, $is_primary)
    {
        $this->buildingTypes = $buildingTypes;
        $this->is_primary = $is_primary;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.customer.profile.form');
    }
}
