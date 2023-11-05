<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function list(){
        return view('admin.pages.place.list');
    }
}
