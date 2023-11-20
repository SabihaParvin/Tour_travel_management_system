<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TouristController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }

    public function store(Request $request)
    {

    //dd($request->all());
    User::Create([
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>'tourist',
        'password'=>bcrypt($request->password),
    ]);

    notify()->success('Tourist Registration successful.');
    return redirect()->back();
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function loginpost(Request $request)
    {
        $val=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        if($val->fails())
        {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials))
        {
            notify()->success('Login Successfull.');
            return redirect()->route('home');
        }

        notify()->error('Invalid Credentials.');
            return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Successfull.');    
        return redirect()->route('home');
    }

}

