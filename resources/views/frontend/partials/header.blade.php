<!-- Topbar Start -->

<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>tripper@gmail.com</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+8801772078684</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0" style="z-index: 12;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">TRIPP</span>ER</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{route('frontend.home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about.us')}}" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="{{route('Frontend.PackageView')}}" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Location</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="" class="dropdown-item">Spots</a>
                        </div>
                    </div>
                    <a href="{{route('contact.us')}}" class="nav-item nav-link">Contact</a>


                    @guest
                    <a class="nav-item nav-link" class="btn btn-primary" href="{{route('tourist.registration')}}">Registration</a>
                    <a class="nav-item nav-link" class="btn btn-primary" href="{{route('tourist.login.post')}}">Login</a>
                    @endguest

                    @auth
                    <a class="nav-item nav-link" class="btn btn-primary" href="{{route('tourist.logout')}}">Logout</a> |
                    <a class="nav-item nav-link" class="btn btn-primary" href="{{route('profile.view')}}">Profile|{{auth()->user()->name}} ({{ auth()->user()->role }})</a>
                    @endauth

         

                </div>
            </div>

        </nav>
        
    </div>
</div>
<!-- Navbar End -->