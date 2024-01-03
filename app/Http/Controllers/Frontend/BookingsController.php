<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{

    public function bookStore(Request $request, $packageID)
    {
        Booking::create([
            'user_id'=>auth()->user()->id,
            'package_id'=>$packageID,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'room'=>$request->room,
            'number_of_guests'=>$request->number_of_guests,
            'special_requests'=>$request->special_requests,
            'amount'=>$request->amount,
            'transanction_id'=>date('YmdHis'),
            'payment_status'=>'pending',
       ]);
       notify()->success('Booking successfull');
       return redirect()->route('frontend.home');
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
