@extends('admin.master')

@section('content')

<form action="{{route('blog.store')}}" method= "post" enctype= "multipart/form-data"> 
    @csrf
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" id="" placeholder="Enter title" name="title">
  </div>

  <div class="form-group">
    <label for="">Upload image</label>
    <input name="image" type="file" class="form-control">
  </div>

  <div class="form-group">
  <label for="">Enter Blog Description</label>
   <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="">Upload blog</label>
    <input name="blog" type="file" class="form-control">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection