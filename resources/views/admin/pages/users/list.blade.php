@extends('admin.master')

@section('content')
<h1>User List</h1>

<a href="{{route('users.form')}}" class="btn btn-success">Create new User</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key=>$singleUser)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$singleUser->name}}</td>
        <td>
            <img style="border-radius: 300px;" width="20%" src="{{url('/uploads/'.$singleUser->image)}}" alt="image">
        </td>
        <td>{{$singleUser->email}}</td>
        <td>{{$singleUser->contactInfo}}</td>
        <td>{{$singleUser->role}}</td>
        <td>
            <a class="btn btn-warning" href="{{route('user.edit',$singleUser->id)}}">Edit</a>
            <a  class="btn btn-danger"href="{{route('users.delete',$singleUser->id)}}">Delete</a>
        </td>

    </tr>
        
    @endforeach


   

    
  </tbody>
</table>
@endsection