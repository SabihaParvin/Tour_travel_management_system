@extends('frontend.master')

@section('content')


@include('frontend.partials.carousel')


<!-- Destination Start -->

<!-- Destination End -->

<!-- packages Start -->


<!-- packages End -->

<!-- Review Start--> 
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <a class="btn btn-primary" href="{{route('give.review')}}">Testimonial</a>
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="row">
            @foreach($reviews as $review)
            
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

<!-- Blog End -->

@endsection