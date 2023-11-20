<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(){
        return view('admin.pages.report.list');
    }

    public function form(){
        return view('admin.pages.report.form');
    }
}
