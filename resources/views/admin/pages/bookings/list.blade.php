@extends('admin.master')

@section('content')
<h1>Booking List</h1>
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection


<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Explore The Packages</h1>
            </div>
           
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <div class="p-4">
                    <a> </a>
                    <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                        <a class="destination-overlay text-white text-decoration-none" href="{{route('single.package.view',$package->id)}}">
                            <h5 class="text-white"></h5>
                            <span></span>
                        </a>
                    </div>
                </div>
             </div>
            


       <!--/.about-btn--> 
        </div><!--
            class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">{{$package->name}}</h5>/.single-package-item-txt-->
    </div><!--/.single-package-item-->

</div><!--/.col-->


    <!-- packages End -->