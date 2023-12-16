@extends('admin.master')

@section('content')

<h1>Ratings</h1>
<table class="table table-light">
  <thead>
  <tr>
      <th scope="col">Sl no</th>
      <th scope="col">User Id</th>
      <th scope="col">package id</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <a class="btn btn-warning" href="">Update</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
  </tbody>
</table>
@endsection