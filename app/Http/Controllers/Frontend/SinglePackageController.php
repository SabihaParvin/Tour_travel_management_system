<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SinglePackageController extends Controller
{

  public function singlePackage($package_id)
  {
    $packages = Package::all();

    $singlePackage = Package::find($package_id);

    // dd($singlePackage);
    return view('frontend.pages.package-view', compact('singlePackage','packages'));
  }
}
