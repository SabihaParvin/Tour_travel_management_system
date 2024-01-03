<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function bookNow($packageID)
    {
        Booking::create([
            'user_id'=>auth()->user()->id,
            'package_id'=>$packageID,
            'transanction_id'=>date('YmdHis'),
            'payment_status'=>'pending',
       ]);
       notify()->success('Booking successfull');
       return redirect()->back();
    }

    public function cancelBookings($bID)
    {
        $booking=Booking::find($bID);
        if($booking)
        {
            $booking->update([
                'status'=>'cancelled'
            ]);
        }

        notify()->success('Booking Cancelled');
       return redirect()->back();
    }
}
