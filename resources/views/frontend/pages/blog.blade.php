@extends('frontend.master')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h5>
            <h1>Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
        @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{url('/uploads/'.$blog->image_path)}}" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1"></h6>
                            <small class="text-white text-uppercase">{{$blog->created_at->format('F j, Y')}}</small>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="d-flex mb-2">
                            <p class="text-primary text-uppercase text-decoration-none" >Admin</p>
                            <span class="text-primary px-2">|</span>
                            <p class="text-primary text-uppercase text-decoration-none" href="">{{$blog->title}}</p>
                        </div>
                        <div>
                        <p class="text-primary text-uppercase text-decoration-none" href="">{{$blog->description}}</p>  
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal">
                        See Blog
                        </button>
            @endforeach
                        <!-- Video Modal -->
                        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="videoModalLabel">{{$blog->title}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Embed the video using an iframe -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="{{url('/uploads/'.$blog->video_path)}}" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

            <!-- Popper.js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

            <!-- Bootstrap JS -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            @endsection