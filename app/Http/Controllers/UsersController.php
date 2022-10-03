<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Customer;
use App\Models\Users;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginIndex()
    {
         return view("customer-login");
        //
    }
    public function registerIndex(){
        return view("welcome");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterUserRequest $request)
    {
        $validated = $request->safe()->all();
        $validated["password"]=Hash::make($validated["password"]);
        Users::create($validated);
        #Auth::login();
        //
    }
    public function login(LoginUserRequest $request){
        $validated = $request->safe()->all();
        $signedIn = Users::where("username", $validated["username"]);
        //return $signedIn->get() != null;
        if(count($signedIn->get())){
//            return "User found" . count($signedIn->get());
            if(Hash::check($validated["password"], $signedIn->value("password")))
            {
                return "Password Correct!";
            }else{
                return redirect("/customer/login")->withErrors(["password"=>"Wrong Password"]);
            }
        }
        return redirect("/customer/login")->withErrors(["nouser"=>"No User by this name exist"]);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
