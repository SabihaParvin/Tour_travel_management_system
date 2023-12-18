@extends('admin.master')

@section('content')
<h1>Booking List</h1>
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">User ID</th>
      <th scope="col">Package ID</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bookings  as $key=>$booking)

<tr>
<th scope="row">{{$key+1}}</th>
  <td>{{$booking->user_id}}</td>
  
  <td>{{$booking->package_id}}</td>
  <td>{{$booking->created_at}}</td>
  <td>{{$booking->status}}</td>
  @if($booking->status=='pending')
  <td>
    <a class="btn btn-warning" href="{{route('confirm.booking',$booking->id)}}">Approve</a>
    <a class="btn btn-danger" href="{{route('reject.booking',$booking->id)}}">Reject</a>
  </td>
 
 @endif
</tr>
@endforeach
  </tbody>
</table>
@endsection
