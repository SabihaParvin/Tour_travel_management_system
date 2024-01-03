<?php

namespace App\Http\Controllers\Backend;

use App\Models\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
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

    public function confirmBooking($BID)
    {
        $booking=Booking::find($BID);
        if($booking)
        {
            $booking->update([
                'status'=>'Approved'
            ]);
        }
        notify()->success('Booking Approved.');
        return redirect()->back();
    }

    public function rejectBooking($id)
    {
        $booking=Booking::find($id);
        if($booking)
        {
            $booking->update([
                'status'=>'Rejected'
            ]);
        }
        notify()->success('Booking Rejected.');
        return redirect()->back();
    }
}
