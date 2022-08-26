@extends('frontend.layouts.app')
@section('content')



<section id="blog" class="blog_section padding" style="margin-top: 50px">
    <div class="container">
        <div class="section_heading mb-40 align-center">
            <h2>Latest News</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p>
        </div><!-- Section Heading -->
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <img src="{{$blog->thumbnail}}" alt="" class="img-fluid">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolorem consequuntur nihil nisi. Odio impedit deserunt ex rem sit beatae hic neque aperiam, illo id est nihil vero voluptatum fuga?</p>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</section><!-- Blog Section -->
@endsection
