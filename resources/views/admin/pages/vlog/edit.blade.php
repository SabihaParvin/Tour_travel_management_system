@extends('admin.master')

@section('content')
<h1>Edit Vlog Details</h1>
<form action="{{route('vlog.update',$vlog->id)}}" method="post" enctype="multipart/form-data">
 @csrf
 @method('put')

 <form action="{{ route('vlog.update', $vlog->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="">Title</label>
        <input value="{{ $vlog->title }}" type="text" class="form-control" id="" placeholder="Enter title" name="title">
    </div>

    <div class="form-group">
        <label for="">Enter Vlog Description</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $vlog->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="current_image">Current Image:</label>
        <img style="border-radius: 400px;" width="30%" src="{{ url('/uploads/' . $vlog->image_path) }}" alt="Current Image" class="img-thumbnail">
    </div>

    <div class="form-group">
        <label for="image">Select New Image:</label>
        <input type="file" name="image_path" accept="image/*" class="form-control">
    </div>

    <div class="form-group">
        <label for="current_video">Current Video:</label>
  
        <video width="320" height="240" controls>
            <video src="{{ url('/uploads/' . $vlog->video_path) }}" type="video/mp4">
            
        </video>
    </div>

    <div class="form-group">
        <label for="video">Select New Video:</label>
        <input type="file" name="video_path" accept="video/*" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection