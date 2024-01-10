<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){
        $id = '';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        return view('customer.merchant', ['id' => $id]);
    }
}
