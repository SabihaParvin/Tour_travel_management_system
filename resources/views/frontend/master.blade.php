<!doctype html>
<html class="no-js" lang="en">

<head>


	<!-- META DATA -->
	<meta charset="utf-8">
	@notifyCss
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

	<!-- TITLE OF SITE -->
	<title>Tour & Travel Management System</title>


	<!-- favicon img -->
	<link rel="shortcut icon" type="image/icon" href="{{'/frontend/'}}/assets/logo/favicon.png" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/font-awesome.min.css" />

	<!--animate.css-->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/animate.css" />

	<!--hover.css-->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/hover-min.css">

	<!--datepicker.css-->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/datepicker.css">

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/owl.theme.default.min.css" />

	<!-- range css-->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/jquery-ui.min.css" />

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/bootstrap.min.css" />

	<!-- bootsnav -->
	<link rel="stylesheet" href="{{'/frontend/'}}/assets/css/bootsnav.css" />

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
	@include('frontend.partials.aboutus')
	<!--about-us end -->




	<!--galley start top destination -->


	<!--/.gallery-->
	<!--gallery end-->



	<!--packages start-->

	<section id="pack" class="packages">
		<div class="container">


			<!--/.gallery-header-->
			<div class="packages-content">
				<div class="row">
					@yield('content')





				</div><!--/.row-->

			</div><!--/.packages-content-->
		</div><!--/.container-->

	</section><!--/.packages-->


	<!--packages end-->

	<!-- testemonial Start -->

	<!-- testemonial End -->






	@include('notify::components.notify')





	@include('frontend.partials.footer')


	<script src="{{'/frontend/'}}/assets/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


	<!--bootstrap.min.js-->
	<script src="{{'/frontend/'}}/assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="{{'/frontend/'}}/assets/js/bootsnav.js"></script>

	<!-- jquery.filterizr.min.js -->
	<script src="{{'/frontend/'}}/assets/js/jquery.filterizr.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--jquery-ui.min.js-->
	<script src="{{'/frontend/'}}/assets/js/jquery-ui.min.js"></script>

	<!-- counter js -->
	<script src="{{'/frontend/'}}/assets/js/jquery.counterup.min.js"></script>
	<script src="{{'/frontend/'}}/assets/js/waypoints.min.js"></script>

	<!--owl.carousel.js-->
	<script src="{{'/frontend/'}}/assets/js/owl.carousel.min.js"></script>

	<!-- jquery.sticky.js -->
	<script src="{{'/frontend/'}}/assets/js/jquery.sticky.js"></script>

	<!--datepicker.js-->
	<script src="{{'/frontend/'}}/assets/js/datepicker.js"></script>

	<!--Custom JS-->
	<script src="{{'/frontend/'}}/assets/js/custom.js"></script>

	@notifyJs

</body>

</html>