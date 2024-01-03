@extends('admin.master')

@section('content')


<div class="container">
<form action="{{route('packages.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Enter package Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="name" required>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input name="image" type="file" class="form-control">
  </div>

  <div class="form-group">
  <label for="">Enter Package Description:</label>
   <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
   @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Enter price:</label>
    <input type="numeric" class="form-control" id="" placeholder="Enter price" name="price" required>
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Enter start date:</label>
    <input type="date" class="form-control" id="" placeholder="Enter startDate" name="start_date"required>
    @error('start_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Enter end date:</label>
    <input type="date" class="form-control" id="" placeholder="Enter endDate" name="end_date"required>
    @error('end_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection