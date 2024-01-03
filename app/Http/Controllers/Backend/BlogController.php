<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function list()
    {
        $blogs=Blog::all();
        return view('admin.pages.blog.list',compact('blogs'));
    } 

    public function form()
    {
        return view('admin.pages.blog.form');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        {
            
            $request->validate([
                'image_path' => 'sometimes|required|mimes:jpeg,png,gif|max:10240', // Adjust max size as needed
                'video_path' => 'sometimes|required|mimes:mp4,mov,avi,wmv|max:10240', // Adjust max size as needed
                'title' => 'required|string',
                'description' => 'required|string',
            ]);


        }
        $imageFileName = null;
        
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $imageFileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $imageFileName);
        }
        $videoFileName = null;
        if ($request->hasFile('video_path')) {
            $file = $request->file('video_path');
            $videoFileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $videoFileName);
        }
        dd($request->image_path);
               Blog::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'image_path'=>$imageFileName,
                'video_path'=>$videoFileName,
               ]);

        notify()->success('Blog uploaded successfully');
        return redirect()->route('blog.list');
    }
    public function contact()
    {
        $contacts=Contact::all();
        return view('admin.pages.contact',compact('contacts'));
    }

}
