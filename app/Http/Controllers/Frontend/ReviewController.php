<?php

namespace App\Http\Controllers\frontend;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function review()
    {
        return view('frontend.pages.review.form');
    }
    public function store(Request $request)
    {
        Review::create([
            'user_id'=>auth()->user()->id,
            'review'=>$request->review,
        ]);
        
        notify()->success('Thanks for your valuable Feedback.');
        return redirect()->route('frontend.home');
    }
}
