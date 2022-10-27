@extends('frontend.layouts.app')
@section('content')
    <section id="home" class="hero_section gradiant_3 padding">
        <div id="particles-js" class="particles-js"></div>
        <div class="display-table">
            <div class="table-cell">
                <div class="container">
                    <div class="hero_content">
                        <h1>Showcase your app <br> with xoom</h1>
                        <p>It is an most simple way to promote your app to users across Search, Play, Display,<br> and YouTube, Facebook , Twitter.</p>
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
                <h2>About Us</h2>
                <p>As you might have heard before many times, without a good App Store Optimization, your app would never become well liked
. As users would not find it in the search and will not install if the graphics are done badly. Keyword installs is currently the Top1 tool in terms of efficiency of getting tons of cheap organic installs and increasing your income..</p>
            </div><!-- Section Heading -->
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                    <div class="promo_content">
                        <img src="{{ asset('frontend') }}/img/promo-1.png" alt="Promo">
                        <h3>Friendly Interface</h3>
                        <p>Positive reviews on your app will help you rank higher on the Google Play Store, which means you will increase your downloads. Buy app ratings and reviews to get a higher ranking for your Android application.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="promo_content">
                        <img src="{{ asset('frontend') }}/img/promo-2.png" alt="Promo">
                        <h3>Easy Customise</h3>
                        <p>We boost your app downloads through positive reviews which will help you get more installs. Buy android app ratings and reviews to increase your Android application's number of installs. Increase your app download count with us.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                    <div class="promo_content">
                        <img src="{{ asset('frontend') }}/img/promo-3.png" alt="Promo">
                        <h3>24/7 Support</h3>
                        <p>In commerce and industry, 24/7 or 24-7 service (usually pronounced "twenty-four seven") is service that is available at any time and usually, every day.</p>
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
                <p>We are offering Android app reviews to several clients across multiple industries. DAR is working closely for many years now. Buy an Android app review package and boost your brand's Android app reviews to get more leads.</p>
            </div><!-- Section Heading -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <ul class="feature_list feature_left">
                        <li class="feature_content wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms">
                            <i class="icon-mobile"></i>
                            <h4 class="mb-10">Responsive Design</h4>
                            <p>Responsive web design is about creating web pages that look good on all devices!</p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInRight" data-wow-delay="200ms" data-wow-duration="800ms">
                            <i class="icon-browser mb-10"></i>
                            <h4 class="mb-10">Bootstrap 5.2</h4>
                            <p>LThe most popular HTML, CSS, and JavaScript framework for developing responsive, mobile first projects on the web. </p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInRight" data-wow-delay="400ms" data-wow-duration="800ms">
                            <i class="icon-global"></i>
                            <h4 class="mb-10">Cross Browser Support</h4>
                            <p> Cross-browser compatibility can be defined as the ability of a website, application or script to support various web browsers identically.</p>
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
                            <p>Make the search bar easy to locate & use. A common goal among designers is to make interfaces straightforward for the user.</p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="800ms">
                            <i class="icon-happy"></i>
                            <h4 class="mb-10">Personalized user support</h4>
                            <p>Contact us or visit our Help Center to get the answers and information you need. We’re here to help.</p>
                            <span class="circle"></span>
                        </li>
                        <li class="feature_content wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="800ms">
                            <i class="icon-chat"></i>
                            <h4 class="mb-10">Great community</h4>
                            <p>The Great Community Give, an initiative of The Community Foundation of Harrisonburg and Rockingham County, is a sunrise to sunset giving day event that promotes charitable giving to support nonprofit organizations in Harrisonburg and Rockingham County.</p>
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
                <p>Log In to your account. You confirm you are at least 18 years old and you accept the Xoom User Agreement, when logging in or signing up with PayPal.</p>
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
                <p>Packaging keeps the world organized. Whether it’s a packet for your M&Ms, a hamper for your dirty laundry or the bottle that holds the delicious liquid particles of your beer together, the things we put things in are important!</p>
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
                <p>Are you afraid to buy our reviews service will be removed? Don’t Worry, We are not like the rest of the fake reviews providers. We provide 100% Non-Drop reviews, Permanent reviews, and Legit Reviews Service. We’re working with the largest team and we’re instant start work after your placing order. So, Buy our Service and enjoy it.</p>
            </div><!-- Section Heading -->
            <ul id="testimonial_carousel" class="testimonial_items owl-carousel owl-nav-2">
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-1.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Angelina Rose</h4>
                        <p>I don’t think something needs to be complicated in order to be beautiful, and I carry this philosophy over to my photography, and especially to the way I work with my clients. </p>
                    </div>
                </li>
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-2.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Jonathan Smith</h4>
                        <p>Jonathan Charles Smith is an American college football coach who is currently the head coach at Oregon State University.</p>
                    </div>
                </li>
                <li class="testimonial_item">
                    <div class="client_thumb">
                        <img src="{{ asset('frontend') }}/img/client-3.jpg" alt="client">
                    </div>
                    <div class="testi_content">
                        <h4>Michel Brown</h4>
                        <p>Misael Browarnik Beiguel better known as Michel Brown is an Argentine actor, singer and Television presenter</p>
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
                <p>App-reviews.org provides professional reviews and ratings of top quality for Android applications.<br>
We deliver genuine app reviews to assist you with an improvement of your app ranking.</p>
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
                <p>Android 11 helps you get to what matters most on your phone. Faster controls that make routines easier. Features that help you stay in touch</p>
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
                            <p>Before proceeding, it's important to note that there are many skins applied by device manufacturers on top of stock Android. </p>
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
                            <p>You can update your Android apps and the Play Store app one at a time, all together, or automatically. Updating your apps to the latest version gives you access to the latest features and improves app security and stability.</p>
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
                            <p>The Xoom app lets you send money, reload phones, and pay bills faster from your iOS or Android mobile device. You can also check on the status of your transactions wherever you go using your phone.</p>
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
