<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginform(){
      return view('admin.pages.login');  
    }
    public function loginpost(Request $request){
        
        $validate=Validator::make($request->all(),
        [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate);
        }
        $credentials=$request->except('_token');
        // $credentials=$request->only('email','password');

        // if(auth()->attempt($credentials))

        $login=auth()->attempt($credentials);
        if($login)
        {
           return redirect()->route('dashboard');
        }

       return redirect()->back()->withErrors('invalid user email or password');
    }



    public function logout()
    {
        auth()->logout();
        return redirect()->route("admin.login");
    }

    public function list(){
        return view('admin.pages.users.list');
    }
    public function form(){
        return view('admin.pages.users.form');
    }
    public function store(){
      return view('admin.pages.users.store');
    }

}
