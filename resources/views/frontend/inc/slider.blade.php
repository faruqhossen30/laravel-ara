<section id="screenshots" class="screenshot_section padding">
    <div class="container">
        <div class="section_heading mb-40 align-center">
            <h2>Xoom Screenshots</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p>
        </div><!-- Section Heading -->
        <div class="row">
            <div class="col-12">
                  <div class="screen_wrap">
                    <div class="swiper-container screen_carousel">
                        <div class="swiper-wrapper">
                            @foreach ($sliders as $slider)
                            <div class="swiper-slide">
                                <img src="{{asset('storage/slider/'.$slider->thumbnail)}}" alt="App Screen">
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
