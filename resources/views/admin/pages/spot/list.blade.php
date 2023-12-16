@extends('admin.master')

@section('content')

<h1>Spot List</h1>
<a href="" class="btn btn-success">create new spot</a>
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Location ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
    <a class="btn btn-success" href="">view</a>
    <a class="btn btn-warning" href="">Update</a>
    <a class="btn btn-danger" href="">Delete</a>
  </td> 
      
  </tr>
  </tbody>
</table>
@endsection