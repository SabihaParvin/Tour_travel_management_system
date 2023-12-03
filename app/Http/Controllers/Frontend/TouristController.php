<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Booking;
use App\Models\Package;
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
        // return view('frontend.pages.profile');
        
        $bookings= Booking::where('user_id',auth()->user()->id)->get();
        // dd($bookings->toarray());
        $users=User::all();
        // dd($users);
        
        return view('frontend.pages.profile.viewprofile',compact('bookings','users'));
    }
    
    public function profileEdit($userId)
    {
      
        $users=User::find($userId);
    
        return view('frontend.pages.profile.profileEdit',compact('users'));
    
    }

    public function profileUpdate(Request $request, $userId)
    {
        $users=User::find($userId);

     notify()->success('Updated successfully.');
    return redirect()->route('profile.view');

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
            return redirect()->route('frontend.home');
        }

        notify()->error('Invalid Credentials.');
            return redirect()->back();
    }

    
    

    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Successfull.');    
        return redirect()->route('frontend.home');
    }

}

