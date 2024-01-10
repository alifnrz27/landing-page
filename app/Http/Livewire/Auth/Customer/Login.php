<?php

namespace App\Http\Livewire\Auth\Customer;

use App\Models\Role;
use App\Models\subdomain;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $login = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;
    public $from_register = false;

    protected $rules = [
        'username' => ['required'],
        'password' => ['required'],
    ];

    public function getSubdomainOrDomainFromURL() {
        $host = $_SERVER['HTTP_HOST'];
        $domainParts = explode('.', $host);

        // Menghilangkan "www" jika ada
        if ($domainParts[0] === 'www') {
            array_shift($domainParts);
        }

        // Mengambil subdomain pertama atau domain utama
        // $subdomainOrDomain = $domainParts[0];
        $subdomainOrDomain = implode(".", $domainParts);

        return $subdomainOrDomain;
    }

    public function authenticate($login, $password)
    {
        $this->login = $login;
        $this->password = $password;

        $fieldType = filter_var($this->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';

        $customMessages = [
            'login.required' => 'Phone number / email is required.',
            'password.required' => 'Password is required.',
        ];
        $this->validate([
            'login' => ['required'],
            'password' => ['required'],
        ], $customMessages);

        $subdomain = $this->getSubdomainOrDomainFromURL();
        $subdomain_id = subdomain::where([
            'name' => $subdomain
        ])->value('id');
        if(!$subdomain_id){
            $subdomain_id = 1;
        }

        $credentials = [
            $fieldType => $this->login,
            'password' => $this->password,
            'subdomain_id' => $subdomain_id,
        ];
        if (!Auth::attempt($credentials, $this->remember)) {
            $this->addError('login', trans('auth.failed'));
            $this->emit('backToLastImage', true);
            return;
        }
        $this->emit('backToLastImage', true);
        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(isset($data['from_register'])){
                $this->from_register = $data['from_register'];
            }

        }
        return view('livewire.auth.customer.login')->extends('layouts.auth');
    }
}
