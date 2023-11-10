@extends('admin.master')

@section('content')
<h1>Users</h1>

<a href="{{url('/users/form')}}" class="btn btn-success">Add new user</a>


<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($users as $user)

<tr>
  <th scope="row">{{$user->id}}</th>
  <td>{{$user->user_name}}</td>
  <td>{{$user->role}}</td>
  <td>{{$user->user_email}}</td>
  <td>{{$user->user_image}}</td>
  <td>{{$user->user_password}}</td>
 
  <td>
    <a class="btn btn-success">Edit</a>
    <a class="btn btn-danger">Delete</a>
  </td>

</tr>
@endforeach
</tbody>
</table>



@endsection