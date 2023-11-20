<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function list(){
        return view('admin.pages.spot.list');
    }

    public function form(){
        return view('admin.pages.spot.form');
    }
}
