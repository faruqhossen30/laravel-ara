@extends('frontend.layouts.app')
@section('title', 'BLog Page ')
@section('content')
    <section class="section" style="margin-top: 70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="blog-post">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                <div class="col-lg-6 mb-4">
                                    <div class="card blog-grid-box p-2">
                                        <img src="{{ asset('frontend') }}/images/thumbnail.jpg" alt=""
                                            class="img-fluid">
                                        <div class="card-body">
                                            <ul class="list-inline d-flex justify-content-between mb-3">
                                                <li class="list-inline-item">
                                                    <p class="text-muted mb-0"><a href="blog-author.html"
                                                            class="text-muted fw-medium">Alice Mellor</a> - Aug 08,
                                                        2021</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 432</p>
                                                </li>
                                            </ul>
                                            <a href="blog-details.html" class="text-secondary">
                                                <h6 class="fs-17 text-capitalize">{{$blog->title}}</h6>
                                            </a>
                                            <p class="text-muted">{{Str::limit($blog->description, 150)}}</p>
                                            <div>
                                                <a href="{{route('singleblog', $blog->id)}}" class="form-text text-primary">Read
                                                    More <i class="uil uil-angle-right-b"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end blog-grid-box-->
                                </div>
                            @endforeach
                            <div class="my-4">
                                {{$blogs->appends($_GET)->links()}}
                            </div>

                            {{-- <div class="col-lg-6 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="ratio ratio-16x9"> <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ"
                                            title="YouTube video" allowfullscreen></iframe> </div>
                                    <div class="card-body">
                                        <ul class="list-inline d-flex justify-content-between mb-3">
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><a href="blog-author.html"
                                                        class="text-muted fw-medium">Harvey Bird</a> - Feb 21,
                                                    2021</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 110</p>
                                            </li>
                                        </ul>
                                        <a href="blog-details.html" class="primary-link">
                                            <h6 class="fs-17">How to become a best sale marketer in a year!
                                            </h6>
                                        </a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities
                                            and real-time potentialities Appropriately communicate one-to-one
                                            technology.</p>
                                        <div>
                                            <a href="blog-details.html" class="form-text text-primary">Read
                                                More <i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end blog-grid-box-->
                            </div> --}}
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end blog-post-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-5">
                    <div class="sidebar ms-lg-4 ps-lg-4 mt-5 mt-lg-0">
                        <!-- Search widget-->
                        <aside class="widget widget_search">
                            <form class="position-relative">
                                <input class="form-control" type="search" placeholder="Search...">
                                <button
                                    class="bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y me-2"
                                    type="submit"><span class="mdi mdi-magnify text-muted"></span></button>
                            </form>
                        </aside>
                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Categories</h6>
                            </div>
                            <div class="my-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="education" />
                                    <label class="form-check-label ms-2" for="education">Education</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1"
                                        checked />
                                    <label class="form-check-label ms-2" for="flexCheckChecked1">Business</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2"
                                        checked />
                                    <label class="form-check-label ms-2" for="flexCheckChecked2">Information</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked3">Interview</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked4">Travel</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked5" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked5">Jobs</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked6" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked6">Fashion</label>
                                </div>
                            </div>
                        </div>
                        <!--end Categories-->

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Popular Post</h6>
                            </div>
                            <ul class="widget-popular-post list-unstyled my-4">
                                <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                    <img src="{{ asset('frontend') }}/images/small-thumbnail.jpg" alt=""
                                        class="widget-popular-post-img rounded" style="width: 85px" />
                                    <div class="flex-grow-1 text-truncate ms-3">
                                        <a href="blog-details.html" class="text-dark">The evolution of landing
                                            page creativity</a>
                                        <span class="d-block text-muted fs-14">Aug 10, 2021</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                    <img src="{{ asset('frontend') }}/images/small-thumbnail.jpg" alt=""
                                        class="widget-popular-post-img rounded" style="width: 85px" />
                                    <div class="flex-grow-1 text-truncate ms-3">
                                        <a href="blog-details.html" class="text-dark">The evolution of landing
                                            page creativity</a>
                                        <span class="d-block text-muted fs-14">Aug 10, 2021</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                    <img src="{{ asset('frontend') }}/images/small-thumbnail.jpg" alt=""
                                        class="widget-popular-post-img rounded" style="width: 85px" />
                                    <div class="flex-grow-1 text-truncate ms-3">
                                        <a href="blog-details.html" class="text-dark">The evolution of landing
                                            page creativity</a>
                                        <span class="d-block text-muted fs-14">Aug 10, 2021</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                    <img src="{{ asset('frontend') }}/images/small-thumbnail.jpg" alt=""
                                        class="widget-popular-post-img rounded" style="width: 85px" />
                                    <div class="flex-grow-1 text-truncate ms-3">
                                        <a href="blog-details.html" class="text-dark">The evolution of landing
                                            page creativity</a>
                                        <span class="d-block text-muted fs-14">Aug 10, 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--end Polular Post-->

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Text Widget</h6>
                            </div>
                            <p class="mb-0 text-muted mt-3">
                                Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan
                                sed. Craft
                                beer elit seitan exercitation, photo booth et 8-bit kale chips proident
                                chillwave deep v
                                laborum. Aliquip veniam
                                delectus, Marfa eiusmod Pinterest in do umami readymade swag.
                            </p>
                        </div>

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Archives</h6>
                            </div>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                            class="uil uil-angle-right-b"></i> March 2021</a> (40)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                            class="uil uil-angle-right-b"></i> April 2021</a> (08)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                            class="uil uil-angle-right-b"></i> Nov 2020</a> (32)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                            class="uil uil-angle-right-b"></i> May 2020</a> (11)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                            class="uil uil-angle-right-b"></i> Jun 2019</a> (21)</li>
                            </ul>
                        </div>

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Latest Tags</h6>
                            </div>
                            <div class="tagcloud mt-3">
                                <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Fashion</a>
                                <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Jobs</a>
                                <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Business</a>
                                <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Corporate</a>
                                <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">E-commerce</a>
                                <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Agency</a>
                                <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Responsive</a>
                            </div>
                        </div>
                        <!--end Latest Tags-->

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Follow & Connect</h6>
                            </div>
                            <ul class="widget-social-menu list-inline mb-0 mt-3">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="uil uil-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="uil uil-whatsapp"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="uil uil-twitter-alt"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="uil uil-dribbble"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="uil uil-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
