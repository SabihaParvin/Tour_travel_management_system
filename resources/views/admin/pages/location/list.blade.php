@extends('admin.master')

@section('content')
<h1>Location</h1>

<a href="{{route('location.form')}}" class="btn btn-success">Add new location</a>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        
  @foreach($locations  as $key=>$location)

<tr>
<th scope="row">{{$key+1}}</th>
  <td>{{$location->name}}</td>
  <td>{{$location->description}}</td>
  <td>
     <img style="border-radius: 100px;" width="20%" src="{{url('/uploads/'.$location->image)}}" alt="image">
  </td>
  

 
  <td>
    <a class="btn btn-warning" href="{{route('location.edit',$location->id)}}">Update</a>
    <a class="btn btn-danger" href="{{route('location.delete',$location->id)}}">Delete</a>
  </td>

</tr>
@endforeach
</tbody>
</table>
@endsection