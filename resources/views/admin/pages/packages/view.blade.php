@extends('admin.master')
@section('content')

<h1>Package View</h1>

<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
                            <img  src="{{url('/uploads/'.$package->image)}}" alt="image">
								<div class="single-package-item-txt">
									<h3 class="pull-right">{{$package->name}} </h3>
                                    <h5>Price: {{$package->price}}</h5>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i>Description: {{$package->description}}
											</span>
                                         </p>
                                        <p>
                                            <span>
											<i class="fa fa-angle-right"></i> Start Date: {{$package->start_date}}
                                            </span>
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>End Date: {{$package->end_date}}
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
											<span>447 reviews</span>
										</p>
									</div><!--/.packages-review-->
									
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->



@endsection