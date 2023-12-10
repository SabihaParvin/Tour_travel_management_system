@extends('admin.master')

@section('content')

<h2>Tourist List</h2>



<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Phone no</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($tourists as $key=>$tourist)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$tourist->name}}</td>
      <td>{{$tourist->image}}</td>
      <td>{{$tourist->email}}</td>
      <td>{{$tourist->contactInfo}}</td>
      <td>
        <a class="btn btn-warning" href="">View</a>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>

    </tr>
@endforeach
  </tbody>
</table>

@endsection
