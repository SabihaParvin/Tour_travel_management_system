@extends('frontend.master')
@section('content')

<h2>Search result for : {{ request()->search }} found {{$packages->count()}} packages.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
@if($packages->count()>0)
    @foreach ($packages as $package)

    <div class="container">
    <div class="row dd-flex justify-content-center">
    <a href="{{route('single.package.view',$package->id)}}">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                <div class="col-md-6">
                        <div class="package_image"> <img src="{{url('/uploads/'.$package->image)}}"> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center"> <i></i>
                         <span class="fw-bold ms-1 fs-5">{{$package->name}}</span> </div>
                        <div class="fs-1 ms-1 mt-3">{{$package->description}}</div>
                        <div class="ms-1"> <span>{{$package->price}}.BDT</span> </div>
                        <div class="ms-1"> <span>{{$package->start_date}} </span> </div>
                        <div class="ms-1"> <span>{{$package->end_date}} </span> </div>
                        <div class="mt-5 radio-buttons"> <label class="radio"> <input type="radio" name="code" value="grey" checked> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="pink"> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="black"> <span></span> </label> </div>
                        <div> <button class="button"> <span>Add to Cart</span> <i class="ms-2 fa fa-long-arrow-right"></i> </button> </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

                @endforeach

                @else

                    <h1>No product found.</h1>
                @endif
</div>

@endsection