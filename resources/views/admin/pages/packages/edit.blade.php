@extends('admin.master')

@section('content')

<h1>Edit your packages</h1>
<form action="{{route('package.update',$package->id)}}" method="post">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="">Enter package Name:</label>
    <input value="{{$package->name}}" type="text" class="form-control" id="" placeholder="Enter name" name="name">
   
  </div>

  <div class="form-group">
  <label for="">Enter Package Description:</label>
   <input value="{{$package->description}}" class="form-control" name="description" id="" cols="30" rows="10">
  </div>
  <div class="form-group">
    <label for="">Enter price:</label>
    <input value="{{$package->price}}" type="numeric" class="form-control" id="" placeholder="Enter price" name="price">
   
  </div>
  <div class="form-group">
    <label for="">Enter start date:</label>
    <input value="{{$package->start_date}}" type="date" class="form-control" id="" placeholder="Enter startDate" name="start_date">
   
  </div>
  <div class="form-group">
    <label for="">Enter end date:</label>
    <input value="{{$package->end_date}}" type="date" class="form-control" id="" placeholder="Enter endDate" name="end_date">
   </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection