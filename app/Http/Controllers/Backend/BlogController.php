<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

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
        $fileName=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
               Blog::create([
                'title'=>$request->title,
                'image'=>$fileName,
                'description'=>$request->description,
               ]);

        notify()->success('Blog uploaded successfully');
        return redirect()->back();
    }
}
