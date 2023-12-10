@extends('admin.master')

@section('content')

<h1>Blogs</h1>

<a href="{{route('blog.form')}}" class="btn btn-success">Upload New Blog</a>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($blogs  as $key=>$blog)
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$blog->title}}</td>
      <td>
         <img style="border-radius: 100px;" width="20%" src="{{url('/uploads/'.$blog->image)}}" alt="image">
      </td>
      <td>{{$blog->description}}</td>
      <td>
        <a class="btn btn-success" href="">view</a>
        <a class="btn btn-warning" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>

    </tr>
@endforeach
  </tbody>
</table>
@endsection