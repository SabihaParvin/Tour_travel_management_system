<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SinglePackageController extends Controller
{

  public function singlePackage($package_id)
  {
    $packages = Package::all();
    $users=User::all();
    $singlePackage = Package::find($package_id);

    // dd($singlePackage);
    return view('frontend.pages.package.singlePackageView', compact('singlePackage','packages','users'));
  }
  public function packageView()
  {
    $packages = Package::all();
    return view('frontend.pages.package.packages',compact('packages'));
  }
}
