@extends('frontend.master')
@section('content')


<div class="container">
    <div class="row">
        @foreach($locations as $location)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $location->name }} Details</div>

                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $location->name }}</p>
                        <p><strong>Description:</strong> {{ $location->description }}</p>
                        <img src="{{ asset('uploads/' . $location->image) }}" alt="{{ $location->name }}" class="img-thumbnail">

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection