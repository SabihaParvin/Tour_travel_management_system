@extends('admin.master')

@section('content')

<h1>Vlogs</h1>

<a href="{{route('vlog.form')}}" class="btn btn-success">Upload New Vlog</a>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">video</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($vlogs  as $key=>$vlog)
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$vlog->title}}</td>
      <td>
         <img style="border-radius: 300px;" width="20%" src="{{url('/uploads/'.$vlog->image_path)}}" alt="image_path">
      </td>
      <td>{{$vlog->description}}</td>
      <td>
         <video style="border-radius: 80px;" width="20%" src="{{url('/uploads/'.$vlog->video_path)}}" alt="video_path">
      </td>
      <td>
        <a class="btn btn-warning" href="{{route('vlog.edit',$vlog->id)}}">Update</a>
        <a class="btn btn-danger" href="{{route('vlog.delete',$vlog->id)}}">Delete</a>
      </td>
     
    </tr>
 @endforeach
  </tbody>
  </table>
 @endsection