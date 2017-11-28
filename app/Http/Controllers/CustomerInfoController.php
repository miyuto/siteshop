<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class CustomerInfoController extends Controller
{
    public function getCustomerInfo(){
        if(Auth::check()){
            return view('layout.customer_info');
        }
        else{
            return redirect()->route('login')->with('notLoginGetCustomer','AAA');
        }
    }
}
