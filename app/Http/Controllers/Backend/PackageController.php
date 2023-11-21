<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function list(){

    $packages=Package::all();   
    return view('admin.pages.packages.list',compact('packages'));
    }
    
    public function form(){
        return view('admin.pages.packages.form');
        }
        public function store(Request $request){
           Package::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
           ]);

           return redirect()->route('packages.list');

        }

        public function delete($id)
        {
            $package=Package::find($id);
            //dd($package);
         if($package)
        {
            $package->delete();
        }
        notify()->success('Package Deleted Successfully');
      return redirect()->back();
        }

        public function edit($id)
        {
            $package=Package::find($id);
            return view('admin.pages.packages.edit',compact('package'));    
        }

}
