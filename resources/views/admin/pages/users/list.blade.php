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
    
  </tbody>
</table>
@endsection