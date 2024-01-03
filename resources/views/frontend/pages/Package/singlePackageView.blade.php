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

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookingModal">
                Open Booking Form
            </button>

            <!-- Booking Modal -->
            <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bookingModalLabel">Booking Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- Booking Form -->
                            <form action="{{route('book.store',$singlePackage->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input value="{{auth()->user()->name}}" type="text" class="form-control" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input value="{{auth()->user()->email}}" type="email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input value="{{auth()->user()->contactInfo}}" type="tel" class="form-control" name="phone" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Select Room type:</label>
                                    <select required class="form-control" name="room" id="">
                                        <option value="Single room">Single room</option>
                                        <option value="Couple room">Couple room</option>
                                        <option value="Family room">Family room</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="number_of_guests">Number of Guests:</label>
                                    <input type="number" class="form-control" name="number_of_guests" id="number_of_guests" min="1" required>
                                </div>

                                <div class="form-group">
                                    <label for="special_requests">Special Requests:</label>
                                    <textarea class="form-control" name="special_requests" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="amount">Total amount:</label>
                                    <input value="{{ $singlePackage->price }}.BDT" type="text" class="form-control" name="amount" id="total_amount" readonly required>
                                </div>
                                <button type="submit" class="btn btn-success"> Book Now</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get references to the number of guests and total amount fields
            var numberOfGuestsField = document.getElementById('number_of_guests');
            var totalAmountField = document.getElementById('total_amount');

            // Initial calculation on page load
            calculateTotalAmount();

            // Attach event listener to update total amount when the number of guests changes
            numberOfGuestsField.addEventListener('input', calculateTotalAmount);

            function calculateTotalAmount() {
                // Get the price from the server-side variable
                var packagePrice = parseFloat("{{ $singlePackage->price }}");

                // Get the number of guests entered by the user
                var numberOfGuests = parseInt(numberOfGuestsField.value) || 0;

                // Calculate the total amount based on the formula (price * number of guests)
                var totalAmount = packagePrice * numberOfGuests;

                // Update the total amount field with the calculated value
                totalAmountField.value = totalAmount.toFixed(2) + ' BDT';
            }
        });
    </script>

@endsection