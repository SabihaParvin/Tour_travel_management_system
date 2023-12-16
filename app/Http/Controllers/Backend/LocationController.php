<?php

namespace App\Http\Controllers\Backend;

use App\Models\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function list()
    {
        $locations=Location::all();
        return view('admin.pages.location.list',compact('locations'));
    }

    public function form(){
        return view('admin.pages.location.form');
    }
    
    public function store(Request $request)
    {
        //dd($request->all());

        $fileName=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
        Location::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$fileName,

        ]);
        notify()->success("Location created successfully");
        return redirect()->route('location.list');
    }
}

