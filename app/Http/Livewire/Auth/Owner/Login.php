<?php

namespace App\Http\Livewire\Auth\Owner;

use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $username = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'username' => ['required'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)) {
            $this->addError('username', trans('auth.failed'));

            return;
        }
        $role = Role::where(['id'=> autH()->user()->role_id])->first();
        session(['role' => $role->name]);
        if(auth()->user()->role_id == 5){
            return redirect()->intended(route('owner.point'));
        }elseif(auth()->user()->role_id == 6){
            return redirect()->intended(route('owner.cashiers'));
        }
        else{
            return redirect()->intended(route('owner.dashboard'));
        }
    }

    public function render()
    {
        return view('livewire.auth.owner.login')->extends('layouts.auth');
    }
}
