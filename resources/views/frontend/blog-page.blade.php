@php
    $keyword = null;
        if(isset($_GET['keyword'])){
            $keyword = $_GET['keyword'];
        }
@endphp
@extends('frontend.layouts.app')
@section('content')

<section id="blog" class="blog_section padding" style="margin-top: 50px">
    <div class="container">
        <div class="section_heading mb-40 align-center">
            <h2>Latest News</h2>
            {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p> --}}
        </div><!-- Section Heading -->
        <div class="row">
            <form action="" class="form-inline mb-3" method="GET">
                <div class="form-group mb-0">
                    <label for="searchBlog" class="d-none d-md-block text-bold">Search Blog: </label>
                    <input name="keyword" @if($keyword) value="{{$keyword}}" @endif class="form-control mx-2" id="searchBlog" placeholder="Search blog ...">
                    </input>
                </div>
                <button type="submit" class="btn-sm button_1 ml-2" style="line-height: 40px">Search</button>
            </form>
        </div>
        <div class="row blog_lists">
            @foreach ($blogs as $blog)
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog_content">
                    <div class="blog_top">
                        <img src="{{asset('frontend')}}/img/blog-1.jpg" alt="Blog">
                        {{-- <a href="#">January <span>01 2018</span></a> --}}
                    </div>
                    <div class="blog_bottom">
                        <a href="{{route('singleblog', $blog->id)}}">
                            <h3>{{$blog->title}}</h3>
                        </a>
                        <p>{{Str::limit($blog->description, 150)}}</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="my-4">
                {{$blogs->appends($_GET)->links()}}
            </div>
        </div>
    </div>
</section><!-- Blog Section -->
@endsection
