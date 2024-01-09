<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Vlog;
use App\Models\Review;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function home()
  {
    $reviews=Review::all();
    
    return view('frontend.pages.home', compact('reviews'));
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
 
   public function aboutUs()
  {
    return view('frontend.pages.aboutUs');  
  }

  public function contactUs()
  {
    return view('frontend.pages.contactUs');  
  }
  public function vlog()
  {
    $vlogs=Vlog::all();
    return view('frontend.pages.vlog',compact('vlogs'));  
  }

 
}
