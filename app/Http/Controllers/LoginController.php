<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginCustomerRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Http\Requests\SignupCustomerRequest;

class LoginController extends Controller
{
    public function loginCustomer()
    {
        return view('layout.login');
    }

    public function postLoginCustomer(LoginCustomerRequest $request)
    {

            $ar = array('email' => $request->email, 'password' => $request->password);
            if (Auth::attempt($ar)) {
                return redirect()->route('login');
            } else {
//                dd($validator);
                return redirect()->back()->with('login-failed', 'Đăng nhập thất bại. Vui lòng thử lại');

            }
//        }
    }

    public function signupCustomer(Request $request)
    {

        $user = new User;
        $user->name = $request->namesignup;
        $user->email = $request->emailsignup;
        $user->password = Hash::make($request->passsignup);
        $user->save();
        return redirect()->route('login');

    }
}

