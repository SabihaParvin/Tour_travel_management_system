@extends('admin.master')

@section('content')
<h1>Package List</h1>

<a href="{{url('/package/form')}}" class="btn btn-success">Create New Packages</a>


<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Start_Date</th>
      <th scope="col">End_Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($packages  as $package)

    <tr>
      <th scope="row">{{$package->id}}</th>
      <td>{{$package->name}}</td>
      <td>{{$package->description}}</td>
      <td>{{$package->price}}</td>
      <td>{{$package->start_date}}</td>
      <td>{{$package->end_date}}</td>
     
      <td>
        <a class="btn btn-success">Edit</a>
        <a class="btn btn-danger">Delete</a>
      </td>

    </tr>
@endforeach
  </tbody>
</table>


@endsection