<?php

namespace App\Http\Controllers;

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

