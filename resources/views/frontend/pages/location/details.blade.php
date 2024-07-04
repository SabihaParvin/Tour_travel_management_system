<!-- resources/views/frontend/pages/location/details.blade.php -->

@extends('frontend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $location->name }} Details</div>

                <div class="card-body">
                    <p><strong>Name:</strong> {{ $location->name }}</p>
                    <p><strong>Description:</strong> {{ $location->description }}</p>
                    @if($location->image)
                        <img src="{{ asset('uploads/' . $location->image) }}" alt="{{ $location->name }}" class="img-thumbnail">
                    @else
                        <p>No image available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
