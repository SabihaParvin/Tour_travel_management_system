@extends('frontend.master')

@section('content')


@include('frontend.partials.carousel')


<!-- Destination Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
            <h1>Explore Top Destination</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="{{'/frontend/'}}/assets/img/destination-1.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">United States</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="{{'/frontend/'}}/assets/img/destination-2.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">United Kingdom</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="{{'/frontend/'}}/assets/img/destination-3.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Australia</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Destination End -->

<!-- packages Start -->


<!-- packages End -->

<!-- Review Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <a href="{{route('give.review')}}">Give Review</a>
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Review</h6>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach($reviewRatings as $review)

            <div class="text-center pb-4">
                <img class="img-fluid mx-auto" src="{{url('/uploads/'. $review->user->image)}}" style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">{{$review->review}}
                    </p>
                    <h5 class="text-truncate">{{$review->user->name}}</h5>
                    <span>{{$review->user->role}}</span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Review End -->

<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
            <h1>Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{'/frontend/'}}/assets/img/blog-1.jpg" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1">01</h6>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="d-flex mb-2">
                            <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                        </div>
                        <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{'/frontend/'}}/assets/img/blog-2.jpg" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1">01</h6>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="d-flex mb-2">
                            <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                        </div>
                        <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{'/frontend/'}}/assets/img/blog-3.jpg" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1">01</h6>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="d-flex mb-2">
                            <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                        </div>
                        <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection