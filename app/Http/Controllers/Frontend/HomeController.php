<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Package;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function home()

  {
    $locations=Location::all();

    return view('frontend.pages.home', compact('locations'));
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
  public function location()
  {
     $locations=Location::all();
    return view('frontend.pages.location.location', compact('locations'));  
  }
   public function aboutUs()
  {
    return view('frontend.pages.aboutUs');  
  }

  public function contactUs()
  {
    return view('frontend.pages.contactUs');  
  }
  public function blog()
  {
    $blogs=Blog::all();
    return view('frontend.pages.blog',compact('blogs'));  
  }
 
}
