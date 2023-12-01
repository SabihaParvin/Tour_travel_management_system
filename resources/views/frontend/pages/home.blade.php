@extends('frontend.master')

@section('content')

<div class="gallary-header text-center">
    <h2>
        Packages
    </h2>

</div>
@foreach($packages as $package)
<div class="col-md-4 col-sm-6">
    <div class="single-package-item">

        <a href="{{route('single.package.view',$package->id)}}"><img src="{{url('/uploads/'.$package->image)}}" alt="package-place"></a>
        <div class="single-package-item-txt">
            <h3>{{$package->name}} <span class="pull-right">{{$package->price}}.BDT</span></h3>
            <div class="packages-para">
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i>Description: {{$package->description}}
                    </span>
                </p>
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i> Start Date: {{$package->start_date}}
                    </span>
                </p>
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i>End Date: {{$package->end_date}}
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
                <a class="btn btn-primary" href="{{route('book.now',$package->id)}}">
                    Book now
                </a>
            </div><!--/.about-btn-->
        </div><!--/.single-package-item-txt-->
    </div><!--/.single-package-item-->

</div><!--/.col-->
@endforeach
@endsection