<!DOCTYPE html>
<html lang="en">

<head>
    @notifyCss

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tour and Travel Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <link href="{{url('backend/')}}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<style>
    @media print {
        #print {
            display: none;
        }
    }
</style>

<body>
    <div class="container">

        <div class="row mt-3">
            <h2 class="mb-1 text-center">Report</h2>
            <!-- <div class="col-1"></div> -->
            <div class="col">
                <button id="print" class="btn btn-success mb-3" onclick="printlist()">Print List</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sl no</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Package ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Room Type</th>
                            <th scope="col">Number of guest</th>
                            <th scope="col">Special Request</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Transanction ID</th>
                            <th scope="col">Payment Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $key=>$booking)

                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$booking->user_id}}</td>

                            <td>{{$booking->package_id}}</td>
                            <td>{{$booking->created_at}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->email}}</td>
                            <td>{{$booking->phone}}</td>
                            <td>{{$booking->room}}</td>
                            <td>{{$booking->number_of_guests}}</td>
                            <td>{{$booking->special_requests}}</td>
                            <td>{{$booking->amount}}</td>
                            <td>{{$booking->status}}</td>
                            <td>{{$booking->transanction_id}}</td>
                            <td>{{$booking->payment_status}}</td>
                        </tr>
                        @endforeach

                        <script>
                            function printlist() {
                                window.print();


                            }
                        </script>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-1"></div> -->
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{url('backend/')}}/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{url('backend/')}}/assets/demo/chart-area-demo.js"></script>
    <script src="{{url('backend/')}}/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{url('backend/')}}/js/datatables-simple-demo.js"></script>

    @notifyJs
</body>

</html>