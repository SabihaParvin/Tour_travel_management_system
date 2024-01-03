<?php

namespace App\Http\Controllers\Backend;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function list()
    {

        $packages = Package::paginate(5);
        return view('admin.pages.packages.list', compact('packages'));
    }

    public function print()
    {
        $packages = Package::all();
        return view('admin.pages.packages.print',compact('packages'));
    }
    public function view($id)
    {
        $package = Package::find($id);
        return view('admin.pages.packages.view', compact('package'));
    }

    public function delete($id)
    {
        $package = Package::find($id);
        //dd($package);
        if ($package) {
            $package->delete();
        }
        notify()->success('Package Deleted Successfully');
        return redirect()->back();
    }

    public function edit($id)
    {
        $package = Package::find($id);
        return view('admin.pages.packages.edit', compact('package'));
    }
    public function update(Request $request, $id)
    {
        $package = Package::find($id);
        if ($package) {
            $fileName = $package->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/uploads', $fileName);
            }
        } {
            $package->update([
                'name' => $request->name,
                'image' => $fileName,
                'description' => $request->description,
                'price' => $request->price,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ]);

            notify()->success('Package updated successfully.');
            return redirect()->route('packages.list');
        }
    }

    public function form()
    {
        return view('admin.pages.packages.form');
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        if ($validate->fails()) {
            return redirect()->back()->with('myError', $validate->getMessageBag());
        }

        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }
        Package::create([
            'name' => $request->name,
            'image' => $fileName,
            'description' => $request->description,
            'price' => $request->price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        notify()->success('Package created successfully.');
        return redirect()->route('packages.list');
    }
}
