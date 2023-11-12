@extends('admin.master')

@section('content')

<h2>Tourist List</h2>

<a href="{{url('/users/form')}}" class="btn btn-success">Add New User</a>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
     
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($users as $user)

    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->image}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      
     
      <td>
        <a class="btn btn-success">Edit</a>
        <a class="btn btn-warning">view</a>
        <a class="btn btn-danger">Delete</a>
      </td>

    </tr>
@endforeach
  </tbody>
</table>

@endsection
