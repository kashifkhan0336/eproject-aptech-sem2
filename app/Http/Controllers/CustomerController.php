<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginCustomerRequest;
use App\Http\Requests\RegisterCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function show()
    {
        return view("customer.login-register");
    }

    public function register(RegisterCustomerRequest $request)
    {
        $validated = $request->safe()->all();
        $validated["password"]=Hash::make($validated["password"]);
        Customer::create($validated);
        return view("customer.login-register", ["msg"=>"Account created"]);
    }
    public function login(LoginCustomerRequest $request)
    {
        #return "lol";
        $validated = $request->safe()->all();
        if(Auth::guard('customer')->attempt(["email"=>$validated["email"], "password"=>$validated["password"]]))
        {
            $request->session()->regenerate();

            return redirect()->intended('account');
        }else{
            return back()->withErrors(['loginerror' => 'Wrong username or password']);
        }
    }

    public function account()
    {
        return view("customer.account");
    }

    public function cart(){
        return view("customer.cart");
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
