@extends('frontend.master')
@section('content')

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <div id="success"></div>
                        <form action="{{route('contact.store')}}"  method="post">
                            @csrf
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="" placeholder="Your Name" name="name">
                                </div>
                                <div class="control-group col-sm-6">
                                <input type="email" class="form-control p-4" id="" placeholder="Your email" name="email">
                                </div>
                            </div>
                            <div class="control-group">
                            <input type="text" class="form-control p-4" id="" placeholder="Subject" name="subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control"placeholder="Message" name="message" id="" cols="20" rows="10" ></textarea>
                             </div>
                             <div class="text-center">
                            <button type="submit" class="btn btn-primary py-3 px-4">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection