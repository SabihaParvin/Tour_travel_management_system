<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function list(){
        return view('admin.pages.bookings.list');
    }
}
