@extends('admin.master')

@section('content')

<h2>Tourist List</h2>

<a href="{{route('tourist.form')}}" class="btn btn-success">Add New Tourist</a>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone no</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($tourists as $tourist)

    <tr>
      <th scope="row">{{$tourist->id}}</th>
      <td>{{$tourist->name}}</td>
      <td>{{$tourist->email}}</td>
      <td>{{$tourist->phoneNo}}</td>
      <td>{{$tourist->password}}</td>
     
      <td>
        <a class="btn btn-success">Edit</a>
        <a class="btn btn-danger">Delete</a>
      </td>

    </tr>
@endforeach
  </tbody>
</table>
{{$tourists->links()}}
@endsection
