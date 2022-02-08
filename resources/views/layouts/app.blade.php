<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Master Prowriters | @yield('title')</title>

    <!-- Mobile Specific Meta
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}"/>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/lightbox2/dist/css/lightbox.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body id="body">

<!--
 Start Preloader
 ==================================== -->
<div id="preloader">
    <div class='preloader'>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--
End Preloader
==================================== -->


<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- logo -->
            <a class="navbar-brand logo" href="#">
                <img class="logo-default" src="{{ asset('images/logo.png') }}" alt="logo"/>
                <img class="logo-white" src="{{ asset('images/logo-white.png') }}" alt="logo"/>
{{--                {{ config('app.name') }}--}}
            </a>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item {{ Route::is('site-root') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('site-root') }}">Homepage</a>
                    </li>
                    <li class="nav-item {{ Route::is('about-us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ Route::is('services') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item {{ Route::is('order.create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('order.create') }}">Order Now</a>
                    </li>
                    <li class="nav-item {{ Route::is('feedback.create') ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('feedback.create') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->
@yield('hero-slider')

@yield('single-page-header')

@yield('content')

<footer id="footer" class="bg-one">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3>about</h3>
                    <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus
                        commodo, tortor mauris sed posuere.</p>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <ul>
                        <li><h3>Our Services</h3></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <ul>
                        <li><h3>Quick Links</h3></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ’s</a></li>
                        <li><a href="#">Badges</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <ul>
                        <li><h3>Connect with us Socially</h3></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Pinterest</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
        </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
        <h5>&copy; {{ date('Y') }}. All rights reserved.</h5>
        <h6>Design and Developed by <a href="#">FoBo Technologies</a></h6>
    </div>
</footer> <!-- end footer -->


<!-- end Footer Area
========================================== -->


<!--
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Form Validation -->
<script src="{{ asset('plugins/form-validation/jquery.form.js') }}"></script>
<script src="{{ asset('plugins/form-validation/jquery.validate.min.js') }}"></script>

<!-- Bootstrap4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Parallax -->
<script src="{{ asset('plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
<!-- lightbox -->
<script src="{{ asset('plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<!-- filter -->
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- Smooth Scroll js -->
<script src="{{ asset('plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/utility-functions.js') }}"></script>

@yield('js')

</body>
</html>
