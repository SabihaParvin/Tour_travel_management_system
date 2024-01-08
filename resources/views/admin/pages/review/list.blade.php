@extends('admin.master')

@section('content')

<h1>Review</h1>
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">User Id</th>
      <th scope="col">Testimonial</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reviews as $key=>$review)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$review->user_id}}</td>
      <td>{{$review->review}}</td>
      <td>
        <a class="btn btn-danger" href="{{route('review.delete',$review->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection