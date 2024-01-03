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
    </tr>
  </thead>
  <tbody>
    
    @foreach($tourists as $key=>$tourist)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$tourist->name}}</td>
      <td>
            <img style="border-radius: 60px;" width="7%" src="{{url('/uploads/'.$tourist->image)}}" alt="image">
        </td>
      <td>{{$tourist->email}}</td>
      <td>{{$tourist->contactInfo}}</td>

    </tr>
@endforeach
  </tbody>
</table>

@endsection
