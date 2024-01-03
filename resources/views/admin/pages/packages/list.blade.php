@extends('admin.master')

@section('content')

<h1>Package List</h1>

<a href="{{route('packages.form')}}" class="btn btn-success">Create New Packages</a>
<a href="{{route('packages.print')}}" class="btn btn-success">Print</a>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Start_Date</th>
      <th scope="col">End_Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($packages  as $key=>$package)

    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$package->name}}</td>
      <td>
         <img style="border-radius: 500px;" width="50%" src="{{url('/uploads/'.$package->image)}}" alt="image">
      </td>
      <td>{{$package->description}}</td>
      <td>{{$package->price}}.BDT</td>
      <td>{{$package->start_date}}</td>
      <td>{{$package->end_date}}</td>
      <td>
        <a class="btn btn-success" href="{{route('package.view', $package->id)}}">view</a>
        <a class="btn btn-warning" href="{{route('package.edit', $package->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('package.delete', $package->id)}}">Delete</a>
      </td>

    </tr>
@endforeach
  </tbody>
</table>
{{$packages->links()}}

@endsection