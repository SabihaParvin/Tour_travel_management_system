@extends('admin.master')

@section('content')

<form action="{{route('location.store')}}"method="post">
    @csrf
  <div class="form-group">
    <label for="">Enter Location Name:</label>
    <input type="text" class="form-control" id="location_name" placeholder="Enter name" name="name">
   
  </div>

  <div class="form-group">
  <label for="">Enter Location Description:</label>
   <textarea class="form-control" name="description" id="location_description" cols="30" rows="10"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection