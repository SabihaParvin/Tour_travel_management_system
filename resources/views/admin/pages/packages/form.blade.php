@extends('admin.master')

@section('content')

<form action="{{route('packages.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="">Enter package Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
   
  </div>

  <div class="form-group">
  <label for="">Enter Package Description:</label>
   <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="">Enter price:</label>
    <input type="numeric" class="form-control" id="" placeholder="Enter price" name="price">
   
  </div>
  <div class="form-group">
    <label for="">Enter start date:</label>
    <input type="date" class="form-control" id="" placeholder="Enter startDate" name="start_date">
   
  </div>
  <div class="form-group">
    <label for="">Enter end date:</label>
    <input type="date" class="form-control" id="" placeholder="Enter endDate" name="end_date">
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection