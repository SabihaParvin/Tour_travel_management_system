@extends('admin.master')

@section('content')
<h1>Contact List</h1>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $key=>$contact)

    <tr>
    <th scope="row">{{$key+1}}</th>
      
      <td>{{$contact->name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->subject}}</td>
      <td>{{$contact->message}}</td>
      <td>
 
      <a class="btn btn-danger" href="{{route('contact.delete',$contact->id)}}">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>

@endsection