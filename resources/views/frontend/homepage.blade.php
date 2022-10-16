@extends('frontend.layouts.app')
@section('content')
    <section id="home" class="hero_section gradiant_3 padding">
        <div id="particles-js" class="particles-js"></div>
        <div class="display-table">
            <div class="table-cell">
                <div class="container">
                    <div class="hero_content">
                        <h1>Showcase your app <br> with xoom</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived
                            not only five centuries.</p>
                    </div>
                    <div class="btn_group">
                        <a href="#" class="download_btn"><i class="fa fa-android"></i><span>Get impration</span>Android
                            Apps</a>
                        <a href="#" class="download_btn"><i class="fa fa-money" aria-hidden="true"></i><span>Start
                                from</span>$10</a>
                    </div>
                </div>
                <div class="hero_mockup d-none d-md-block"></div>
            </div>
        </div>

    </section><!-- Hero Section -->

    <section id="about" class="promo_section padding">
        <div class="container">
            <div class="section_heading mb-40 align-center">
                <h2>About xoom</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only
                    five centuries.</p>
            </div><!-- Section Heading -->
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                    <div class="promo_content">
                        <img src="{{ asset('frontend') }}/img/promo-1.png" alt="Promo">
                        <h3>Friendly Interface</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="promo_content">
                        <img src="{{ asset('frontend') }}/img/promo-2.png" alt="Promo">
                        <h3>Easy Customise</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                    <div class="promo_content">
                        <img src="{{ asset('frontend') }}/img/promo-3.png" alt="Promo">
                        <h3>24/7 Support</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Promo Section -->

    {{-- <section id="features" class="feature_section padding">
    <div class="container">
        <div class="section_heading mb-40 align-center">
            <h2>Xoom Features</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p>
        </div><!-- Section Heading -->
        <div class="row feature_lists">
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature_content align-center">
                    <i class="icon-mobile"></i>
                    <h4 class="mb-10">Responsive Design</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and more app typesetting industry.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature_content align-center">
                    <i class="icon-browser mb-10"></i>
                    <h4 class="mb-10">Bootstrap 3.1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and more app typesetting industry.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature_content align-center">
                    <i class="icon-global"></i>
                    <h4 class="mb-10">Cross Browser Support</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and more app typesetting industry.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature_content align-center">
                    <i class="icon-hotairballoon"></i>
                    <h4 class="mb-10">Simple frendly interface</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and more app typesetting industry.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature_content align-center">
                    <i class="icon-happy"></i>
                    <h4 class="mb-10">Personalized user support</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and more app typesetting industry.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature_content align-center">
                    <i class="icon-chat"></i>
                    <h4 class="mb-10">Great community</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and more app typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- Feature Section --> --}}


    <section id="features" class="feature_section bg-grey padding">
        <div class="container">
            <div class="section_heading mb-40 align-center">
                <h2>Powerfull Feature</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only
                    five centuries.</p>
            </div><!-- Section Heading -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <ul class="feature_list feature_left">
                        <li class="feature_content wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms">
                            <i class="icon-mobile"></i>
                            <h4 class="mb-10">Responsive Design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInRight" data-wow-delay="200ms" data-wow-duration="800ms">
                            <i class="icon-browser mb-10"></i>
                            <h4 class="mb-10">Bootstrap 3.1</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInRight" data-wow-delay="400ms" data-wow-duration="800ms">
                            <i class="icon-global"></i>
                            <h4 class="mb-10">Cross Browser Support</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <span class="circle"></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mock-hide">
                    <img class="feature_mockup" src="{{ asset('frontend') }}/img/mockup-2.png" alt="Feature">
                </div>
                <div class="col-md-4 col-sm-6">
                    <ul class="feature_list">
                        <li class="feature_content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="800ms">
                            <i class="icon-hotairballoon"></i>
                            <h4 class="mb-10">Simple frendly interface</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="800ms">
                            <i class="icon-happy"></i>
                            <h4 class="mb-10">Personalized user support</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="800ms">
                            <i class="icon-chat"></i>
                            <h4 class="mb-10">Great community</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <span class="circle"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Feature Section -->


    <section id="screenshots" class="screenshot_section padding">
        <div class="container">
            <div class="section_heading mb-40 align-center">
                <h2>Xoom Screenshots</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only
                    five centuries.</p>
            </div><!-- Section Heading -->
            <div class="row">
                <div class="col-12">
                    <div class="screen_wrap">
                        <div class="swiper-container screen_carousel">
                            <div class="swiper-wrapper">
                                @foreach ($sliders as $slider)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/slider/' . $slider->thumbnail) }}" alt="App Screen">
                                    </div>
                                @endforeach

                            </div>
                            <!-- pagination -->
                            <div class="screen-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Screenshot Section -->

    <section id="pricing" class="pricing_section bg-grey padding">
        <div class="container">
            <div class="section_heading mb-40 align-center">
                <h2>Popular Package</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only
                    five centuries.</p>
            </div><!-- Section Heading -->
            <div class="row pricing_list">
                @foreach ($packages as $package)
                <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp" data-wow-delay="200ms"
                    data-wow-duration="800ms">
                    <div class="pricing_table gradiant_3 align-center">
                        <div class="pricing_head ">
                            <h4>{{$package->name}}</h4>
                            <h3>${{$package->price}}</h3>
                            <h5>{{$package->day}} Days Delivery</h5>
                            {{-- <h5>7/24 Support</h5> --}}
                        </div>
                        <ul class="text-left px-4">
                            @foreach ($package->services as $service)
                                <li class="border-bottom">{{$service->service}}</li>
                            @endforeach
                        </ul>
                        <div class="pricing_footer">
                            <a href="{{route('singlepackage', $package->id)}}" class="button_1 price_btn">Get Started</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center pt-4">
                <a href="{{ route('packagepage') }}" class="button_1 button_2">All Package</a>
            </div>
        </div>
    </section><!-- Pricing Section -->

    <div id="counter" class="counter_section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter_content">
                        <i class="ti-download"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Total Downloads</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter_content">
                        <i class="ti-thumb-up"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Total Likes</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter_content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">Active Users</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter_content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- Counter Section -->

    <section id="testimonial" class="testimonial_section bg-grey padding">
        <div class="container">
            <div class="section_heading mb-40 align-center">
                <h2>What People Say</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only
                    five centuries.</p>
            </div><!-- Section Heading -->
            <ul id="testimonial_carousel" class="testimonial_items owl-carousel owl-nav-2">
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-1.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Angelina Rose</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </li>
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-2.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Jonathan Smith</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </li>
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-3.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Michel Brown</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </li>
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-4.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Stephen Roben</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </li>
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-5.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Alena Kalt</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Testimonial Section -->

    <section id="download" class="download_section gradiant_3 padding">
        <div class="container">
            <div class="download_content wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="800ms">
                <h3>Download Xoom Today</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>It has survived not only
                    five centuries.</p>
                <div class="btn_group">
                    <a href="#" class="download_btn"><i class="fa fa-android"></i><span>available on</span>Google
                        Store</a>
                    <a href="#" class="download_btn"><i class="fa fa-apple"></i><span>available on</span>Apple
                        Store</a>
                </div>
            </div>
        </div>
        <div class="download_mockup"></div>
    </section><!-- Download Section -->

    <section id="blog" class="blog_section padding">
        <div class="container">
            <div class="section_heading mb-40 align-center">
                <h2>Latest News</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only
                    five centuries.</p>
            </div><!-- Section Heading -->
            <div class="row blog_lists">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="blog_content">
                        <div class="blog_top">
                            <img src="{{ asset('frontend') }}/img/blog-1.jpg" alt="Blog">
                            <a href="#">January <span>01 2018</span></a>
                        </div>
                        <div class="blog_bottom">
                            <a href="#">
                                <h3>How To Restart My Mobile.</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a class="read_more" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="blog_content">
                        <div class="blog_top">
                            <img src="{{ asset('frontend') }}/img/blog-2.jpg" alt="Blog">
                            <a href="#">January <span>01 2018</span></a>
                        </div>
                        <div class="blog_bottom">
                            <a href="">
                                <h3>Improve Your Apps By Updating.</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a class="read_more" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="blog_content">
                        <div class="blog_top">
                            <img src="{{ asset('frontend') }}/img/blog-3.jpg" alt="Blog">
                            <a href="#">January <span>01 2018</span></a>
                        </div>
                        <div class="blog_bottom">
                            <a href="">
                                <h3>How To Customize Xoom App</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a class="read_more" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Blog Section -->
@endsection
@push('script')
@endpush
