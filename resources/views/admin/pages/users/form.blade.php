@extends('admin.master')

@section('content')

<h1>Create new user</h1>


<form action="{{route('users.store')}}"method="post" >
  @csrf
  <div class="form-group">
    <label for="">Enter user Name:</label>
    <input type="text" class="form-control" id="user_name" placeholder="Enter name" name="name">
  </div>
 <div class="form-group">
    <label for="">Select Role:</label>
   <select class="form-control" name="role" id="">
        <!-- <option value="">Admin</option> -->
        <option value="manager">Manager</option>
        <option value="account">Account</option>
   </select>
  </div>

  <div class="form-group">
    <label for="">Enter user email:</label>
    <input type="email" class="form-control" id="user_email" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="">Enter user password:</label>
    <input type="text" class="form-control" id="user_password" placeholder="Enter password" name="password">
  </div>
  
  <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection