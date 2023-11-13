<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function list(){
        return view('admin.pages.ratings.list');
    }
}
