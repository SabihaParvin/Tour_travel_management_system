<?php

namespace App\Http\Controllers\frontend;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function location()
    {
        $locations = Location::all();
        return view('frontend.pages.location.location', compact('locations'));  
    }

    public function details($LID)
    {
        $location = Location::findOrFail($LID);
        return view('frontend.pages.location.details', compact('location'));  
    }
}
