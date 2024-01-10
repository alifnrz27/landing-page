<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;

use App\Models\User;
use App\Models\Brand;

class Users extends Component
{
    public $isShow;
    public
    $errorMessages = [],
    $name,

    $username,
    $currentUsername,
    $password,
    $user,
    $passwordConfirmation;

    public $isShowUpdate;

    public
    $role = '',
    $users = [],
    $customers=[],
    $cashiers = [],
    $order="ASC",
    $orderBy="name",
    $search = "",
    $brand;

    public function mount(){
        $this->brand = Brand::where(['user_id' => auth()->user()->id])->first();
    }

    public function orderCustomerBy($orderBy){
        $this->orderBy = $orderBy;
        $this->order = $this->order == "ASC" ? "DESC" : "ASC";
    }

    public function showUser($id){
        $this->user = User::where(['id' => $id])->first();
        $this->name = $this->user['name'];
        $this->username = $this->user['username'];
        $this->currentUsername = $this->user['username'];
        $this->emit('formOpen', true);
    }

    public function openForm($role){
        $this->role = $role;
        $this->emit('formOpen', true);
    }

    public function update(){
        $customMessages = [
            'name.required' => 'Name is required.',
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Minimum password 8 characters',
            'password.same' => 'Password confirmation don\'t match.',
        ];

        try {
            $validate = [
                'name' => ['required'],
            ];

            if($this->username != $this->currentUsername){
                $validate['username'] = ['required', 'unique:users'];
            }else{
                $validate['username'] = ['required'];
            }

            if($this->password){
                $validate['password'] = ['required', 'min:8', 'same:passwordConfirmation'];
            }

            $this->validate($validate, $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            $this->errorMessages = [];
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        $submit = [
            'name' => $this->name,
            'username' => $this->username,
        ];

        if($this->password){
            $submit['password'] = bcrypt($this->password);
        }
        $user = User::where(['id' => $this->user['id']])->update($submit);

        $this->clearForm();
        $this->mount();
        $this->emit('formOpen', false);
        $this->emit('closeLoader', false);
        $this->emit('showNotification', true);
    }

    public function submit(){
        $customMessages = [
            'name.required' => 'Name is required.',
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Minimum password 8 characters',
            'password.same' => 'Password confirmation don\'t match.',
        ];

        try {
            $this->validate([
                'name' => ['required'],
                'username' => ['required', 'unique:users'],
                'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            ], $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            $this->errorMessages = [];
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        if($this->role == 'sales'){
            $role_id = 5;
        }elseif($this->role == 'cashier'){
            $role_id = 6;
        }

        $user = User::create([
            'name' => $this->name,
            'subdomain_id' => auth()->user()->subdomain_id,
            'role_id' => $role_id,
            'username' => $this->username,
            'password'=> bcrypt($this->password),
        ]);

        $this->clearForm();
        $this->mount();
        $this->emit('formOpen', false);
        $this->emit('closeLoader', false);
        $this->emit('showNotification', true);
    }

    public function clearForm(){
        $this->errorMessages = [];
        $this->name = null;
        $this->username = null;
        $this->password = null;
        $this->passwordConfirmation = null;
    }

    public function render()
    {
        $this->users = User::where([
            ['subdomain_id', '=', auth()->user()->subdomain_id],
            ['role_id', '=', 5],
            ['name', 'like', '%' . $this->search . '%']
        ])->with(['role'])->latest()->get();

        $this->customers = User::where([
            ['subdomain_id', '=', auth()->user()->subdomain_id],
            ['role_id', '=', 4],
            ['name', 'like', '%' . $this->search . '%']
        ])->orderBy($this->orderBy, $this->order)->get();

        $this->cashiers = User::where([
            ['subdomain_id', '=', auth()->user()->subdomain_id],
            ['role_id', '=', 6],
            ['name', 'like', '%' . $this->search . '%']
        ])->with(['role'])->latest()->get();

        return view('livewire.owner.users');
    }
}
