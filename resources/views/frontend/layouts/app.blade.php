<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Apps Promotion')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdeign" name="author" />

    {{-- <link rel="shortcut icon"   href="{{asset('frontend')}}/{{asset('frontend')}}/{{asset('frontend')}}/images/favicon.ico"> --}}
    <link rel="shortcut icon"   href="{{asset('frontend')}}/images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet"   href="{{asset('frontend')}}/css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

    <!-- Tobi  -->
    <link rel="stylesheet"   href="{{asset('frontend')}}/css/tobii.min.css">

    <!-- animation -->
    <link rel="stylesheet"  href="{{asset('frontend')}}/css/aos.css" />

    <!-- Material Icon Css -->
    <link rel="stylesheet"  href="{{asset('frontend')}}/css/materialdesignicons.min.css" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet"  href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- boxi icon -->
    <link rel="stylesheet"  href="{{asset('frontend')}}/css/boxicons.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet"  href="{{asset('frontend')}}/css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet"  href="{{asset('frontend')}}/scss/style.css" type="text/css" />

    <!-- colors -->
    <link  href="{{asset('frontend')}}/css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- light-dark mode button -->
    <a  href="void(0);" id="mode" class="mode-btn text-white rounded-end">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>

    <!-- topbar -->
    <section class="tagline d-none d-md-block">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="phone">
                            <i class="mdi mdi-phone"></i> +1 123 456 78 90
                        </div>
                        <div class="email ms-3">
                            <a  href="{{asset('frontend')}}/mailto:#" class="text-dark">
                                <i class="mdi mdi-email-open-outline"></i> Support@domain.com
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="top_socials d-flex list-unstyled justify-content-end mb-0">
                        <li class="entry">
                            <a  href="{{asset('frontend')}}/javascript: void(0);">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                        </li>
                        <li class="entry">
                            <a  href="{{asset('frontend')}}/javascript: void(0);">
                                <i class="bx bxl-dribbble"></i>
                            </a>
                        </li>
                        <li class="entry">
                            <a  href="{{asset('frontend')}}/javascript: void(0);">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <!-- end topbar -->

    <!-- START  NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
        <div class="container-fluid">

            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase"  href="{{asset('frontend')}}/index-1.html">
                <img src="{{asset('frontend')}}/images/logo-light.png" class="logo-light" alt="" height="30">
                <img src="{{asset('frontend')}}/images/logo-dark.png" class="logo-dark" alt="" height="30">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link"  href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#app">Application</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a  href="javascript: void(0);" class="btn bg-gradiant">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <div class="overflow-hidden-x">
        @yield('content')
    </div>
    <!-- footer section -->
    @include('frontend.layouts.footer')
    <hr>
    @include('frontend.layouts.footerbottom')
    <!-- end footer -->

    <!-- Style switcher -->
    @include('frontend.layouts.styleswitch')
    <!-- end switcher-->

    <!--Bootstrap Js-->
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>

    <!-- animation -->
    <script src="{{asset('frontend')}}/js/aos.js"></script>

    <!-- Slider Js -->
    <script src="{{asset('frontend')}}/js/tiny-slider.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



    <script src="{{asset('frontend')}}/js/tobii.min.js"></script>

    <!-- <script src="js/smooth-scroll.polyfills.min.js"></script> -->

    <!-- counter -->
    <!-- <script src="js/counter.init.js"></script> -->
    <script src="{{asset('frontend')}}/js/tobii.js"></script>

    <!-- App Js -->
    <script src="{{asset('frontend')}}/js/app.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>
