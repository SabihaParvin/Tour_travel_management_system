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
        $fileName=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
        $blogfile=null;
        if($request->hasFile('blog'))
        {
            $file=$request->file('blog');
            $blogfile=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$blogfile);

        }
               Blog::create([
                'title'=>$request->title,
                'image'=>$fileName,
                'description'=>$request->description,
                'blog'=>$fileName,
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
