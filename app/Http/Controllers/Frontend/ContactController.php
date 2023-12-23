<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function list()
    {
        return view('Frontend.pages.contactUs');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        Contact::create([
            'user_id'=>auth()->user()->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
           ]);
        notify()->success('Message recieved. You will get email soon!');
        return redirect()->route('frontend.home');
    }
}
