
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @notifyCss
    <title>Tour & Travel Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{'/frontend/'}}/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{'/frontend/'}}/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{'/frontend/'}}/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{'/frontend/'}}/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->

    @include('frontend.partials.header')

    <!-- Navbar Start -->

    <!-- Navbar End -->


    <!-- Carousel Start -->

    <!-- Carousel End -->


    <!-- Booking Start -->
   
    <!-- Booking End -->

    <div class="container">

        @yield('content')

    </div>
    <!-- About Start -->

    <!-- About End -->


    <!-- Feature Start -->

    <!-- Feature End -->
    @include('notify::components.notify')

    <!-- Destination Start -->

    <!-- Destination Start -->


    <!-- Service Start -->

    <!-- Service End -->


    <!-- Packages Start -->

    <!-- Packages End -->


    <!-- Registration Start -->

    <!-- Registration End -->


    <!-- Team Start -->
 
    <!-- Team End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Blog Start -->
 
    <!-- Blog End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
 

    @include('frontend.partials.footer')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{'/frontend/'}}/assets/lib/easing/easing.min.js"></script>
    <script src="{{'/frontend/'}}/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{'/frontend/'}}/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{'/frontend/'}}/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{'/frontend/'}}/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{'/frontend/'}}/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{'/frontend/'}}/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{'/frontend/'}}/assets/js/main.js"></script>
    @notifyJs
    <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
</body>

</html>