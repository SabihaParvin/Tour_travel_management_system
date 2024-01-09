@extends('admin.master')

@section('content')

<h1>Edit Location</h1>
<form action="{{route('location.update',$locations->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="">Enter Location Name:</label>
    <input value="{{$locations->name}}" type="text" class="form-control" id="location_name" placeholder="Enter name" name="name">
  </div>

  <div class="form-group">
  <label for="">Enter Location Description:</label>
   <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$locations->description}}</textarea>
  </div>

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input value="{{$locations->image}}" name="image" type="file" class="form-control">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection