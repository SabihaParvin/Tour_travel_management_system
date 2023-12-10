@extends('admin.master')

@section('content')

<h1>Edit Users Information</h1>
<form action="{{route('user.update',$users->id)}}" method="post" enctype="multipart/form-data">
 @csrf
 @method('put')
<div class="form-group">
  <label for="">Enter User Name:</label>
  <input value="{{$users->name}}" type="text" class="form-control" id="" placeholder="Enter name" name="user_name">

</div>


<div class="form-group">
  <label for="">Enter Email: </label>
  <input value="{{$users->email}}"  type="email" class="form-control" placeholder="Enter Email" name="user_email">

</div>

<div class="form-group">
  <label for="">Enter contact Info: </label>
  <input value="{{$users->contactInfo}}"  type="text" class="form-control" placeholder="Enter contact info" name="contactInfo">
</div>


<div class="form-group">
  <label for="">Upload Image: </label>
  <input value="{{$users->image}}"  name="user_image" type="file" class="form-control">
</div>



<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection