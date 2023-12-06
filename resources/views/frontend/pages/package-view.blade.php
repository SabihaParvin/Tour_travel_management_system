@extends('frontend.master')

@section('content')


<div class="container">
    <div class="row dd-flex justify-content-center">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center"> <i></i>
                         <span class="fw-bold ms-1 fs-5">{{$singlePackage->name}}</span> </div>
                        <h1 class="fs-1 ms-1 mt-3">{{$singlePackage->description}}</h1>
                        <div class="ms-1"> <span>{{$singlePackage->price}}.BDT</span> </div>
                        <div class="ms-1"> <span>{{$singlePackage->start_date}} </span> </div>
                        <div class="ms-1"> <span>{{$singlePackage->end_date}} </span> </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="package_image"> <img src="{{url('/uploads/'.$singlePackage->image)}}"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection