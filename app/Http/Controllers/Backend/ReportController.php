<?php

namespace App\Http\Controllers\Backend;
use App\Models\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function list()
    {
        $bookings=Booking::all();
        return view('admin.pages.bookings.list',compact('bookings'));
    }

    public function print(){
        $bookings=Booking::all();
        return view('admin.pages.bookings.print',compact('bookings'));
    }
}
