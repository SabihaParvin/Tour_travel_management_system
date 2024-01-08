<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function list(){
        $reviews=Review::all();
        return view('admin.pages.review.list',compact('reviews'));
    }

    public function form(){
        return view('admin.pages.review.form');
    }
    public function delete($id)
    {
        $review = Review::find($id);
        //dd($package);
        if ($review) {
            $review->delete();
        }
        notify()->success('Review Deleted Successfully');
        return redirect()->back();
    }
}
