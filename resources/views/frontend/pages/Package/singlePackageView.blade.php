@extends('frontend.master')

@section('content')

<div class="single-package-item-txt">

    <img src="{{url('/uploads/'.$singlePackage->image)}}" alt="package-place" class="img-fluid">

    <h3>{{$singlePackage->name}} <span class="pull-right">{{$singlePackage->price}}.BDT</span></h3>
    <div class="packages-para">
        <p>
            <span>
                <i class="fa fa-angle-right"></i> Description: {{$singlePackage->description}}
            </span>
        </p>
        <p>
            <span>
                <i class="fa fa-angle-right"></i> Start Date: {{$singlePackage->start_date}}
            </span>
        </p>
        <p>
            <span>
                <i class="fa fa-angle-right"></i> End Date: {{$singlePackage->end_date}}
            </span>
        </p>
    </div>
</div>

<!--/.packages-para
        <div class="packages-review">
            <p>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span></span>
            </p>

        </div>/.packages-review-->
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
                            <select required class="form-control" name="room" id="room_type">
                                <option value="Single room">Single room</option>
                                <option value="Couple room">Couple room</option>
                                <option value="Family room">Family room</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="number_of_guests">Number of Guests:</label>
                            <input type="number" class="form-control" name="number_of_guests" id="number_of_guests" min="1" required>
                        </div>
                        <input type="hidden" name="number_of_guests" id="hidden_number_of_guests">

                        <div class="form-group">
                            <label for="amount">Total amount:</label>
                            <input value="{{ $singlePackage->price }}.BDT" type="text" class="form-control" name="amount" id="total_amount" readonly required>
                        </div>
                        <div class="form-group">
                            <label for="">Select pickup point</label>
                            <select required class="form-control" name="pickup_point" id="">
                                <option value="Chowrasta">Chowrasta</option>
                                <option value="Abdullahpur">Abdullahpur</option>
                                <option value="Saydabaad">Saydabaad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="special_requests">Special Requests:</label>
                            <textarea class="form-control" name="special_requests" rows="4"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success"> Book Now</button>
                    </form>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Get references to the number of guests, total amount, room type fields, and hidden input
                            var numberOfGuestsField = document.getElementById('number_of_guests');
                            var totalAmountField = document.getElementById('total_amount');
                            var roomTypeField = document.getElementById('room_type');
                            var hiddenNumberOfGuestsField = document.getElementById('hidden_number_of_guests');

                            // Initial calculation on page load
                            calculateTotalAmount();

                            // Attach event listeners to update total amount when the number of guests or room type changes
                            numberOfGuestsField.addEventListener('input', calculateTotalAmount);
                            roomTypeField.addEventListener('change', handleRoomTypeChange);

                            function calculateTotalAmount() {
                                // Get the price from the server-side variable
                                var packagePrice = parseFloat("{{ $singlePackage->price }}");

                                // Get the number of guests entered by the user
                                var numberOfGuests = parseInt(numberOfGuestsField.value) || 0;

                                // Get the selected room type
                                var roomType = roomTypeField.value;

                                // Add extra cost based on the selected room type
                                var extraCost = 0;
                                if (roomType === 'Single room') {
                                    extraCost = 1000;
                                } else if (roomType === 'Couple room') {
                                    extraCost = 500;
                                }

                                // Calculate the total amount based on the formula (price * number of guests) + extra cost
                                var totalAmount = (packagePrice * numberOfGuests) + extraCost;

                                // Update the total amount field with the calculated value
                                totalAmountField.value = totalAmount.toFixed(2) + ' BDT';
                            }

                            function handleRoomTypeChange() {
                                // Get the selected room type
                                var roomType = roomTypeField.value;

                                // Set the number of guests based on the selected room type
                                if (roomType === 'Single room') {
                                    numberOfGuestsField.value = 1;
                                    hiddenNumberOfGuestsField.value = 1;
                                    numberOfGuestsField.readOnly = true;
                                } else if (roomType === 'Couple room') {
                                    numberOfGuestsField.value = 2;
                                    hiddenNumberOfGuestsField.value = 2;
                                    numberOfGuestsField.readOnly = true;
                                } else {
                                    numberOfGuestsField.value = 1;
                                    hiddenNumberOfGuestsField.value = 1;
                                    numberOfGuestsField.readOnly = false;
                                }

                                // Recalculate the total amount
                                calculateTotalAmount();
                            }

                            // Update hidden input on form submit
                            document.querySelector('form').addEventListener('submit', function() {
                                hiddenNumberOfGuestsField.value = numberOfGuestsField.value;
                            });
                        });
                    </script>
                    @endsection