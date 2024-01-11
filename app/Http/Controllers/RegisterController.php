<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestNewUser;

class RegisterController extends Controller
{
    public function submit(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:request_new_users'],
            'phone_number' => ['required', 'unique:request_new_users'],
        ]);

        $user = RequestNewUser::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'status' => 0,
        ]);

        return redirect(route('home'));
    }
}
