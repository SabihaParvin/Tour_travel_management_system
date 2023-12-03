<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home()

  {
    $packages=Package::all();

    return view('frontend.pages.home', compact('packages'));
  }  
  public function searchpackage(Request $request)
  {
    //dd(request()->all());
    if($request->search)
    {
        $packages=Package::where('name','LIKE','%'.$request->search.'%')->get();
        //select * from packages where name like % cox's Bazar %;
    }else{
        $packages=Package::all();
    }
    return view('frontend.pages.search.searchPackage',compact('packages'));
  }
  
}
