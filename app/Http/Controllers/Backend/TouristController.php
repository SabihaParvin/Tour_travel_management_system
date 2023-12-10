<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TouristController extends Controller
{
    public function list(){

    $tourists=User::paginate(3);
    $tourists=User::where('role','tourist')->get() ;
    
    return view('admin.pages.tourist.list',compact('tourists'));
    }






    /*public function form(){
        return view('admin.pages.tourist.form');
        }
        public function store(Request $request){
        //    dd($request->all());

            $valided=Validator::make($request->all(),[

            'name'=>'required',
            'email'=>'required',
            'phoneNo'=>'required',
            'password'=>'required'
            ]);

            if($valided->fails()){
            return redirect()->back()->witherrors($valided);
            }



           Tourist::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phoneNo'=>$request->phoneNo,
            'password'=>$request->password,
           ]);


           notify()->success('Laravel Notify is awesome!');

           return redirect()->back()->witherrors($valided);
    }*/
}
