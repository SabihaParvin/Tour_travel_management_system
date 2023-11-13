<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function list(){
        return view('admin.pages.bookings.list');
    }
}
