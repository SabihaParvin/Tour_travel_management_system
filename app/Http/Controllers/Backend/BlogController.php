<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){
        return view('admin.pages.blog.list');
    } 

    public function form(){
        return view('admin.pages.blog.form');
    }
}
