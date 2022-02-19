<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::paginate(5);
        return view('customer.list', compact('customers'));
    }

    public function register(){
        return view('customer.create');
    }
}
