@extends('admin.master')
@section('content')

<h1>Package View</h1>

<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
                            <img  src="{{url('/uploads/'.$package->image)}}" alt="image">
								<div class="single-package-item-txt">
									<h3>thailand <span class="pull-right">$799</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Days 6 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>447 reviews</span>
										</p>
									</div><!--/.packages-review-->
									
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->



@endsection