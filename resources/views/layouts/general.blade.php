<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="./style/common.css" />    
    <link rel="stylesheet" href="./style/home.css" />
    <link rel="stylesheet" href="./style/slider.css" />
    <link href="./fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    @yield('special-header')
</head>

<body>
    <!-- start of header -->
    <header class="container-fluid" id="site-main-header" style="z-index: 1000; position: sticky; top: 0">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark col-12">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="media/Logo_2.png" alt="logo" style="height: 10vh" />
                </a>
                <form class="form-inline my-2 my-lg-0 order-lg-1 d-flex flex-nowrap">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-success mx-1" type="submit">
                        Search
                    </button>
                </form>
                <span id="sign-anc-spn" class="order-lg-1 d-flex flex-nowrap">
                    <a class="btn btn-success mx-1" href="{{url('/sign-in')}}">Sign in</a>
                    <a class="btn btn-success mx-1" href="{{url('/sign-up')}}">Sign up</a>
                </span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle nav-link header-btn"
                                    style="background: none; border: none" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Browse our courses
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a class="dropdown-item" href="{{url('/search-courses')}}">Primary School</a>
                                    <a class="dropdown-item" href="{{url('/search-courses')}}">Secondary School</a>
                                    <a class="dropdown-item" href="{{url('/search-courses')}}">High School</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end of header -->
    <!-- start of content -->
    
    @yield('main-body')
    
    <!-- end of content -->
    <!-- start of footer -->
    <footer class="container-fluid pt-3 pt-md-4 border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3 class="footer-title">Information</h3>
                    <hr />
                    <ul class="list-unstyled footer-list" id="ul1">
                        <li><a class="footer-link" href="{{url('/')}}">Home</a></li>
                        <li>
                            <a class="footer-link" href="{{url('/about-us')}}">About Us</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{url('/contact-us')}}">Contact Us</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{url('/privacy&policy')}}">Privacy & Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3 class="footer-title">Contact Us</h3>
                    <hr />
                    <ul class="list-unstyled footer-list" id="ul1">
                        <li>
                            <a class="footer-link" href="#"><i class="far fa-envelope"></i> test@test.com</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#"><i class="fas fa-phone"></i> 0123456789</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3 class="footer-title">Connect with us</h3>
                    <p>
                        <i class="fab fa-facebook p-1 footer-link"></i>
                        <i class="fab fa-twitter p-1 footer-link"></i>
                        <i class="fab fa-instagram p-1 footer-link"></i>
                        <i class="fab fa-linkedin-in p-1 footer-link"></i>
                    </p>
                    <h3 class="footer-title">Contact on the go</h3>
                    <span id="img-footer">
                        <img src="./media/app-store.svg" />
                        <img src="./media/google-play.svg" />
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->
    @yield('special-end-page')
    <script src="./scripts/home.js"></script>
    <script src="./scripts/slider.js"></script>
    <script src="./scripts/multipagesslider.js"></script>
</body>

</html>