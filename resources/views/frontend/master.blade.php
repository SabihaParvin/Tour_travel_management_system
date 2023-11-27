
<!doctype html>
<html class="no-js"  lang="en">

	<head>
	

		<!-- META DATA -->
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Tour & Travel Management System</title>
		@notifyCss

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{'/frontend/'}}/assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="{{'/frontend/'}}/assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{'/frontend/'}}/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="{{'/frontend/'}}/assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	
	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		@include('frontend.partials.header')
		
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful World 

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											explore now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		
		

		<!--galley start-->
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							top destination
						</h2>
						<p>
							Where do you wanna go? How much you wanna explore?  
						</p>
					</div><!--/.gallery-header-->
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="{{'/frontend/'}}assets/images/gallary/g1.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													china
												</a>
												<p><span>20 tours</span><span>15 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="{{'/frontend/'}}assets/images/gallary/g2.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													venuzuala
												</a>
												<p><span>12 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="{{'/frontend/'}}assets/images/gallary/g3.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													brazil
												</a>
												<p><span>25 tours</span><span>10 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="{{'/frontend/'}}assets/images/gallary/g4.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													australia 
												</a>
												<p><span>18 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="{{'/frontend/'}}assets/images/gallary/g5.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													netharlands
												</a>
												<p><span>14 tours</span><span>12 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-8">
						  				<div class="filtr-item">
											<img src="{{'/frontend/'}}assets/images/gallary/g6.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													turkey
												</a>
												<p><span>14 tours</span><span>6 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->


		<!



		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						special packages
					</h2>
					<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
					</p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{'/frontend/'}}assets/images/packages/p1.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>italy <span class="pull-right">$499</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 3 Days 2 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i> food facilities
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
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{'/frontend/'}}assets/images/packages/p2.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>england <span class="pull-right">$1499</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 6 Days 7 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  Free food 
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>344 reviews</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{'/frontend/'}}assets/images/packages/p3.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>france <span class="pull-right">$1199</span></h3>
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
											<span>544 reviews</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{'/frontend/'}}assets/images/packages/p4.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>india <span class="pull-right">$799</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 4 Days 5 nights
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
											<span>625 reviews</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{'/frontend/'}}assets/images/packages/p5.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>spain <span class="pull-right">$999</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 4 Days 4 nights
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
											<span>379 reviews</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{'/frontend/'}}assets/images/packages/p6.jpg" alt="package-place">
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
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						clients reviews
					</h2>
					<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. 
					</p>

				</div><!--/.gallery-header-->

				<div class="owl-carousel owl-theme" id="testemonial-carousel">

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial1.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial2.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial1.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial1.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial2.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial1.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial1.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial2.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{'/frontend/'}}assets/images/client/testimonial1.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

				</div><!--/.testemonial-carousel-->
				@yield('content')
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->


		
		
				

	@include('notify::components.notify')

				
		
		
		
        @include('frontend.partials.footer')


		<script src="{{'/frontend/'}}/assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="{{'/frontend/'}}/assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="{{'/frontend/'}}/assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="{{'/frontend/'}}/assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="{{'/frontend/'}}/assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="{{'/frontend/'}}/assets/js/jquery.counterup.min.js"></script>
		<script src="{{'/frontend/'}}/assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="{{'/frontend/'}}/assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="{{'/frontend/'}}/assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="{{'/frontend/'}}/assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="{{'/frontend/'}}/assets/js/custom.js"></script>

		@notifyJs

	</body>

</html>