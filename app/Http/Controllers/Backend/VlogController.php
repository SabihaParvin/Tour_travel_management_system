<?php

namespace App\Http\Controllers\Backend;


use App\Models\Vlog;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VlogController extends Controller
{
    public function list()
    {
        $vlogs = Vlog::all();
        return view('admin.pages.vlog.list', compact('vlogs'));
    }
    public function form()
    {
        return view('admin.pages.vlog.form');
    }
    public function delete($id)
    {
        $vlog = Vlog::find($id);
        
        if ($vlog) {
            $vlog->delete();
        }
        notify()->success('Vlog Deleted Successfully');
        return redirect()->back();
    }
    public function edit($id)
    {
        $vlog = Vlog::find($id);
        return view('admin.pages.vlog.edit', compact('vlog'));
    }
   

    public function update(Request $request, $id)
     
    {
        $vlog=Vlog::find($id);
      
            $imageFileName=$vlog->image_path;
            $videoFileName=$vlog->video_path;

            if ($request->hasFile('image_path')) {
                $file = $request->file('image_path');
                $imageFileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/uploads', $imageFileName);
            }
            
            if ($request->hasFile('video_path')) {
                $file = $request->file('video_path');
                $videoFileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/uploads', $videoFileName);
            }

        $vlog->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imageFileName,
            'video_path' => $videoFileName,
        ]);

     notify()->success('Updated successfully.');
    return redirect()->route('vlog.list');

    }

    public function store(Request $request)
    {
        //dd($request->all());
        /*{
            
            $request->validate([
                'image_path' => 'sometimes|required|mimes:jpeg,png,gif|max:10240', // Adjust max size as needed
                'video_path' => 'sometimes|required|mimes:mp4,mov,avi,wmv|max:10240', // Adjust max size as needed
                'title' => 'required|string',
                'description' => 'required|string',
            ]);


        }*/
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
        // dd($request->image_path);
        Vlog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imageFileName,
            'video_path' => $videoFileName,
        ]);

        notify()->success('Vlog uploaded successfully');
        return redirect()->route('vlog.list');
    }
    public function contact()
    {
        $contacts = Contact::all();
        return view('admin.pages.contact', compact('contacts'));
    }
    public function contactDelete($id)
    {
        $contact = Contact::find($id);
        //dd($contact);
        if ($contact) {
            $contact->delete();
        }
        notify()->success('Sent mail already');
        return redirect()->back();
    }
}
