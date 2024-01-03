@extends('frontend.master')
@section('content')
<div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{'/frontend/'}}/assets/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>At the heart of Tripper is a team of avid travelers and industry experts dedicated to curating tailor-made experiences that exceed expectations. We understand that each traveler is unique, seeking distinct adventures that resonate with their dreams. That's why we go the extra mile to personalize every itinerary, ensuring it aligns seamlessly with your desires.</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="{{'/frontend/'}}/assets/img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{'/frontend/'}}/assets/img/about-2.jpg" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection