<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Xoom is a colofull app landing page where include awesome landing page demos.">
    <meta name="author" content="WowThemez">

    <title>Xoom | App Landing Page</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/img/favicon.png">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/themify-icons.css">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/elegant-font-icons.css">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/elegant-line-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slicknav.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/venobox/venobox.css">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">

    <script src="{{ asset('frontend') }}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    @stack('style')
    @paddleJS
</head>

<body data-spy="scroll" data-target="#navmenu" data-offset="70" class="loaded">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div id='preloader'>
        <div class='loader'>
            <div class="battery"></div>
        </div>
    </div><!-- Preloader -->

    <header id="header" class="header_section">
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('homepage') }}" class="navbar-brand"><img src="{{ asset('frontend') }}/img/logo.png" alt="app promotion"></a>
                <div class="d-flex menu-wrap">
                    <div id="navmenu" class="mainmenu">
                        <ul class="nav">
                            <li><a data-scroll class="nav-link active" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a></li>
                            {{-- <li><a data-scroll class="nav-link" href="#about">About</a></li> --}}
                            <li><a data-scroll class="nav-link" href="{{ route('packagepage') }}">Package</a></li>
                            {{-- <li><a data-scroll class="nav-link" href="#features">Features</a></li> --}}
                            {{-- <li><a data-scroll class="nav-link" href="#pricing">Pricing</a></li> --}}
                            <li><a data-scroll class="nav-link" href="{{route('blogpage')}}">Blog</a></li>
                            @auth
                            <li class="nav-item ">
                                <a href="">
                                    <img src="https://image.shutterstock.com/image-photo/concept-words-live-demo-on-260nw-1855958839.jpg" height="35px" width="35px" class="rounded-circle" alt="">
                                </a>
                            </li>
                            <li class="dropdown show nav-item ">
                                <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="me-2 icon-md" data-feather="log-out"></i>
                                        <span>Log Out</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endauth
                        </ul>
                    </div>
                    @guest
                    <div class="menu-btn">
                        <a href="{{route('login')}}" class="button_1 button_2">Login</a>
                    </div>
                    @endguest
                </div>
            </nav>
        </div>
    </header> <!-- Header -->

    <!-- Main Content  -->
    @yield('content')

    <!-- Footer Section -->
    @include('frontend.layouts.footer')

    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

    <!-- jQuery Lib -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Tether JS -->
    <script src="{{ asset('frontend') }}/js/vendor/tether.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>
    <!-- waypoints js -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery.slicknav.min.js"></script>
    <!-- OWL-Carousel JS -->
    <script src="{{ asset('frontend') }}/js/vendor/owl.carousel.min.js"></script>
    <!-- swiper JS -->
    <script src="{{ asset('frontend') }}/js/vendor/swiper.min.js"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery.counterup.min.js"></script>
    <!-- Smooth Scroll JS -->
    <script src="{{ asset('frontend') }}/js/vendor/smooth-scroll.min.js"></script>
    <!-- vendor JS -->
    <script src="{{ asset('frontend') }}/js/vendor/venobox.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery.ajaxchimp.min.js"></script>
    @stack('script')

    <!-- Wow JS -->
    <script src="{{ asset('frontend') }}/js/vendor/wow.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    @stack('script')
</body>

</html>
