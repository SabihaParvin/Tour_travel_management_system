<?php

namespace App\Http\Controllers\Backend;


use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginform()
    {
      return view('admin.pages.login');  
    }
    public function loginpost(Request $request)
    {
        // dd($request->all());
        
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

        $login=auth()->guard('admin')->attempt($credentials);
        //dd($credentials);
        if($login)
        {
           return redirect()->route('dashboard');
        }

       return redirect()->back()->withErrors('invalid user email or password');
    }

    public function delete($userId)
    {
        $users=User::find($userId);
       // dd($userId);
       if($users)
       {
        $users->delete();
       }
    notify()->success("User deleted");
     return redirect()->back();
    }
    public function edit($userId)
    {
        {
            $users=User::find($userId);
            return view('admin.pages.users.edit',compact('users'));    
        }
    }

    Public function update(Request $request,$userId)
    {
         $users=User::find($userId);
        
        $fileName=$users->image;
        if($request->hasFile('user_image'))
        {
            $file=$request->file('user_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
        $users->Update([
            'name'=>$request->user_name,
            'image'=>$fileName,
            'email'=>$request->user_email,
            'contactInfo'=>$request->contactInfo,
            
        ]); 
        notify()->success('users updated successfully.');
        return redirect()->route('users.list');
}

    public function logout()
    {
        auth()->logout();
        return redirect()->route("admin.login");
    }

    public function list(){
        $users=User::all();
        return view('admin.pages.users.list',compact('users'));
    }
    public function form(){
        return view('admin.pages.users.form');
    }
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'user_name'=>'required',
            'role'=>'required',
            'user_email'=>'required|email',
            'user_password'=>'required|min:6',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->with('myError',$validate->getMessageBag());
        }
        
        $fileName=null;
        if($request->hasFile('user_image'))
        {
            $file=$request->file('user_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }

        Admin::create([
            'name'=>$request->user_name,
            'role'=>$request->role,
            'image'=>$fileName,
            'email'=>$request->user_email,
            'contactInfo'=>$request->contactInfo,
            'password'=>bcrypt($request->user_password),
        ]);

        return redirect()->back()->with('message','User created successfully.');


    }

}
