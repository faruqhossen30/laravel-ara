@extends('frontend.layouts.app')
@section('content')
<section id="blog" class="blog_section padding" style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <img src="{{$blog->thumbnail}}" alt="" class="img-fluid" style="width: 100%">
                </div>
                <div>
                    <ul class="list-inline mb-0 mt-3 text-muted">
                        <li class="list-inline-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{$blog->thumbnail}}" alt="" style="height: 3rem; width:3rem">
                                </div>
                                <div class="ms-3">
                                    <a href="blog-author.html" class="primary-link"><h6 class="mb-0">By Admin</h6></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="uil uil-calendar-alt"></i>
                                </div>
                                <div class="ms-2">
                                    <p class="mb-0"> Aug 02, 2022</p>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="list-inline-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="uil uil-comments-alt"></i>
                                </div>
                                <div class="ms-2 flex-grow-1">
                                    <p class="mb-0"> 2 Comments</p>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <h4 class="my-3">{{$blog->title}}</h4>
                {!! $blog->description !!}


            </div>
            <div class="col-lg-4">
                <div>
                    <h3>Polular Post</h3>
                </div>
                <div>
                    <ul class="widget-popular-post list-unstyled my-4">
                        <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                            <img src="{{$blog->thumbnail}}" alt="" class="widget-popular-post-img rounded">
                            <div class="flex-grow-1 text-truncate ms-3">
                                <a href="blog-details.html" class="text-dark">The evolution of landing page creativity</a>
                                <span class="d-block text-muted fs-14">Aug 10, 2021</span>
                            </div>
                        </li>
                        <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                            <img src="{{$blog->thumbnail}}" alt="" class="widget-popular-post-img rounded">
                            <div class="flex-grow-1 text-truncate ms-3"><a href="blog-details.html" class="text-dark">Beautiful day with friends in paris</a>
                                <span class="d-block text-muted fs-14">Jun 24, 2021</span>
                            </div>
                        </li>
                        <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                            <img src="{{$blog->thumbnail}}" alt="" class="widget-popular-post-img rounded">
                            <div class="flex-grow-1 text-truncate ms-3"><a href="blog-details.html" class="text-dark">Project discussion with team</a>
                                <span class="d-block text-muted fs-14">July 13, 2021</span>
                            </div>
                        </li>
                        <li class="d-flex mb-3 align-items-center">
                            <img src="{{$blog->thumbnail}}" alt="" class="widget-popular-post-img rounded">
                            <div class="flex-grow-1 text-truncate ms-3"><a href="blog-details.html" class="text-dark">Smartest Applications for Business</a>
                                <span class="d-block text-muted fs-14">Feb 01, 2021</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- Blog Section -->
@endsection

@push('style')
<style>
    .widget-popular-post .widget-popular-post-img {
        width: 85px;
        height: 60px;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .ms-3 {
        margin-left: 1rem !important;
    }

</style>
@endpush
