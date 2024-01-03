@extends('admin.master')

@section('content')
<h1>Booking List</h1>

<a class="btn btn-primary" href="{{route('bookings.print')}}">Print</a>
<div class="container">
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">User ID</th>
      <th scope="col">Package ID</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Room Type</th>
      <th scope="col">Number of guest</th>
      <th scope="col">Special Request</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Transanction ID</th>
      <th scope="col">Payment Status</th>
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
  <td>{{$booking->name}}</td>
  <td>{{$booking->email}}</td>
  <td>{{$booking->phone}}</td>
  <td>{{$booking->room}}</td>
  <td>{{$booking->number_of_guests}}</td>
  <td>{{$booking->special_requests}}</td>
  <td>{{$booking->amount}}</td>
  <td>{{$booking->status}}</td>
  <td>{{$booking->transanction_id}}</td>
  <td>{{$booking->payment_status}}</td>
  
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
</div>
@endsection
