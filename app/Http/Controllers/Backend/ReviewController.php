<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function list(){
        return view('admin.pages.review.list');
    }

    public function form(){
        return view('admin.pages.review.form');
    }
}
