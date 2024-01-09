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
    
    public function delete($Id)
    {
        $locations=Location::find($Id);
     
       if($locations)
       {
        $locations->delete();
       }
    notify()->success("location deleted");
     return redirect()->back();
    }
    public function edit($Id)
    {
        {
            $locations=Location::find($Id);
            return view('admin.pages.location.edit',compact('locations'));    
        }
    }

    Public function update(Request $request,$Id)
    {
         $locations=Location::find($Id);
        
        $fileName=$locations->image;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
        $locations->Update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$fileName,
            
        ]); 
        notify()->success('location updated successfully.');
        return redirect()->route('location.list');
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

