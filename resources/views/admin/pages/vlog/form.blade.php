@extends('admin.master')

@section('content')

<form action="{{route('vlog.store')}}" method= "post" enctype= "multipart/form-data"> 
    @csrf
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" id="" placeholder="Enter title" name="title">
  </div>

  <div class="form-group">
  <label for="">Enter Vlog Description</label>
   <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
  <label for="image">Select Image:</label>
    <input type="file" name="image_path" accept="image/*" class="form-control">
  </div>
  <div class="form-group">
  <label for="video">Select Video:</label>
  <input type="file" name="video_path" accept="video/*"class="form-control">
  </div>   

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection