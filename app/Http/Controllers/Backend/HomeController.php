<?php

namespace App\Http\Controllers\Backend;


use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function home(){
       
        $users=User::count();
        $tourists=User::where('role','tourist')->count();
        $bookings=Booking::where('payment_status','confirm')->count();
        
        return view('admin.pages.home',compact('tourists','bookings','users'));
    }

}

