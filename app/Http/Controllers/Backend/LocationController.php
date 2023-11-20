<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function list(){
        return view('admin.pages.location.list');
    }

    public function form(){
        return view('admin.pages.location.form');
    }
    
    public function store(Request $request){
        dd($request->all());
    }
}

