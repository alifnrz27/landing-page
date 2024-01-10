<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\RequestNewUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $phone_number = '';

    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:request_new_users'],
            'phone_number' => ['required', 'unique:request_new_users'],
        ]);

        $user = RequestNewUser::create([
            'email' => $this->email,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'status' => 0,
        ]);

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Berhasil simpan data',
            'text'=>'',
        ]);
        $this->email = "";
        $this->name = "";
        $this->phone_number = "";
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
