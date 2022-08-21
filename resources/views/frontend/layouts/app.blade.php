<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Xoom is a colofull app landing page where include awesome landing page demos.">
        <meta name="author" content="WowThemez">

        <title>Xoom | App Landing Page</title>

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/img/favicon.png">

		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/themify-icons.css">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/elegant-font-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/elegant-line-icons.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/slicknav.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.min.css">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/venobox/venobox.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/swiper.min.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/main.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">

        <script src="{{asset('frontend')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id='preloader' >
            <div class='loader' >
                <div class="battery"></div>
            </div>
        </div><!-- Preloader -->

        <header id="header" class="header_section">
            <div class="container">
                <nav class="navbar">
                    <a href="#" class="navbar-brand"><img src="{{asset('frontend')}}/img/logo.png" alt="Xoom"></a>
                    <div class="d-flex menu-wrap">
                       <div id="navmenu" class="mainmenu">
                           <ul class="nav">
                                <li><a data-scroll class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a></li>
                                <li><a data-scroll class="nav-link" href="#about">About</a></li>
                                <li><a data-scroll class="nav-link" href="#features">Features</a></li>
                                <li><a data-scroll class="nav-link" href="#screenshots">Screenshots</a></li>
                                <li><a data-scroll class="nav-link" href="#pricing">Pricing</a></li>
                                <li><a data-scroll class="nav-link" href="#testimonial">Reviews</a></li>
                                <li><a data-scroll class="nav-link" href="#blog">Blog</a></li>
                            </ul>
                       </div>
                        <div class="menu-btn">
                            <a href="#download" class="button_1 button_2">Download</a>
                        </div>
                    </div>
                </nav>
            </div>
		</header> <!-- Header -->

        <!-- Main Content  -->
        @yield('content')

		<!-- Footer Section -->
        @include('backend.layout.footer')

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

		<!-- jQuery Lib -->
		<script src="{{asset('frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Tether JS -->
		<script src="{{asset('frontend')}}/js/vendor/tether.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('frontend')}}/js/vendor/bootstrap.min.js"></script>
		<!-- waypoints js -->
		<script src="{{asset('frontend')}}/js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('frontend')}}/js/vendor/jquery.slicknav.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{asset('frontend')}}/js/vendor/owl.carousel.min.js"></script>
		<!-- swiper JS -->
	    <script src="{{asset('frontend')}}/js/vendor/swiper.min.js"></script>
		<!-- Counterup JS -->
		<script src="{{asset('frontend')}}/js/vendor/jquery.counterup.min.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{asset('frontend')}}/js/vendor/smooth-scroll.min.js"></script>
		<!-- vendor JS -->
		<script src="{{asset('frontend')}}/js/vendor/venobox.min.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="{{asset('frontend')}}/js/vendor/jquery.ajaxchimp.min.js"></script>
		<!-- Particle JS -->
        <script src="{{asset('frontend')}}/js/vendor/particles.min.js"></script>
		<!-- App JS -->
        <script src="{{asset('frontend')}}/js/vendor/app.js"></script>
		<!-- Wow JS -->
		<script src="{{asset('frontend')}}/js/vendor/wow.min.js"></script>
		<!-- Main JS -->
		<script src="{{asset('frontend')}}/js/main.js"></script>

    </body>
</html>
