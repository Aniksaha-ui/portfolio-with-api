<?php

namespace App\Http\Controllers\Website\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    public function index(){
        return view('Website.customer.myorders');

    }
}
