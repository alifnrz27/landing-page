<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
class ForgotPassword extends Component
{
    public $email;

    public function sendResetLink(){
        $validate = [
            'email' => 'required|email',
        ];
        dd('ted');
        $this->validate($validate);

        $status = Password::sendResetLink(
            ['email' => $this->email]
        );
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
