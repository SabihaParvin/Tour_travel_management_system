<!-- resources/views/receipts/print.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .receipt-container {
            padding: 20px;
            border: 1px solid #ddd;
            margin: 20px auto;
            max-width: 600px;
            background-color: #f9f9f9;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .receipt-header h2 {
            margin: 0;
        }
        .receipt-details {
            margin-bottom: 20px;
        }
        .receipt-details h5 {
            margin-bottom: 10px;
        }
        .receipt-details p {
            margin: 0;
        }
        .receipt-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header">
            <h2>Booking Receipt</h2>
        </div>
        <div class="receipt-details">
            <h5>Booking Details:</h5>
            <p><strong>ID:</strong> {{ $booking->id }}</p>
            <p><strong>Date:</strong> {{ $booking->created_at->format('F j, Y') }}</p>
            <p><strong>Package:</strong> {{ $booking->package->name }}</p>
            <p><strong>Status:</strong> {{ $booking->status }}</p>
            <p><strong>Payment Status:</strong> {{ $booking->payment_status }}</p>
            <p><strong>Transaction ID:</strong> {{ $booking->transanction_id }}</p>
        </div>
        <div class="receipt-details">
            <h5>Customer Details:</h5>
            <p><strong>Name:</strong> {{ $booking->name }}</p>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Phone:</strong> {{ $booking->phone }}</p>
        </div>
        <div class="receipt-details">
            <h5>Booking Information:</h5>
            <p><strong>Room:</strong> {{ $booking->room }}</p>
            <p><strong>Number of Guests:</strong> {{ $booking->number_of_guests }}</p>
            <p><strong>Pickup Point:</strong> {{ $booking->pickup_point }}</p>
            <p><strong>Special Requests:</strong> {{ $booking->special_requests }}</p>
        </div>
        <div class="receipt-details">
            <h5>Payment Details:</h5>
            <p><strong>Amount:</strong> {{ $booking->amount }} </p>
        </div>
        <div class="receipt-footer">
            <button onclick="window.print()" class="btn btn-primary">Print Receipt</button>
        </div>
    </div>
</body>
</html>
