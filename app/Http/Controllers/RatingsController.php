<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function list(){
        return view('admin.pages.ratings.list');
    }
}
