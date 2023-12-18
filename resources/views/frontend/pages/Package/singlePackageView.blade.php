@extends('frontend.master')

@section('content')


<div class="single-package-item-txt">

    <img src="{{url('/uploads/'.$singlePackage->image)}}" alt="package-place">

            <h3>{{$singlePackage->name}} <span class="pull-right">{{$singlePackage->price}}.BDT</span></h3>
            <div class="packages-para">
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i>Description: {{$singlePackage->description}}
                    </span>
                </p>
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i> Start Date: {{$singlePackage->start_date}}
                    </span>
                </p>
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i>End Date: {{$singlePackage->end_date}}
                    </span>
                </p>
            </div><!--/.packages-para-->
            <div class="packages-review">
                <p>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span>254 reviews</span>
                </p>

            </div><!--/.packages-review-->
            <div class="about-btn">
                <a class="btn btn-primary" href="{{route('book.now',$singlePackage->id)}}">
                    Book now
                </a>
            </div>

@endsection

