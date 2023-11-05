@extends('admin.master')

@section('content')

<form action="{{route('tourist.store')}}"method="post">
    @csrf
  <div class="form-group">
    <label for="">Enter User Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="name" required>
    @error('name')
  <div class="alert alert-danger">{{ $message}}</div>
  @enderror
  </div>
 

  <div class="form-group">
    <label for="">Enter User email:</label>
    <input type="email" class="form-control" id="" placeholder="Enter email" name="email" required>
    @error('email')
  <div class="alert alert-danger">{{ $message}}</div>
  @enderror
  </div>
  

  <div class="form-group">
    <label for="">Enter phone number:</label>
    <input type="numeric" class="form-control" id="" placeholder="Enter phoneNo" name="phoneNo" required>
    @error('phoneNo')
  <div class="alert alert-danger">{{ $message}}</div>
  @enderror
  </div>
  

  <div class="form-group">
    <label for="">Enter User Password:</label>
    <input type="text" class="form-control" id="" placeholder="Enter password" name="password" required>
    @error('password')
  <div class="alert alert-danger">{{ $message}}</div>
  @enderror
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection