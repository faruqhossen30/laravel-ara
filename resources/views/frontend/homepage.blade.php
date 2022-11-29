@extends('frontend.layouts.app')
@section('content')
    <!-- hero section -->
    @include('frontend.inc.hero')
    <!-- end hero section -->
    <!-- start work -->
    @include('frontend.inc.work')
    <!-- end work -->

    <!-- Features section -->
    @include('frontend.inc.feature')
    <!-- end section -->

    <!--start pricing-->
    @include('frontend.inc.pricing')
    <!--end pricing-->

    <!-- slider section -->
    @include('frontend.inc.slider')
    <!-- end section -->

    <!-- team section -->
    @include('frontend.inc.team')
    <!-- end section -->

    <!-- cta section -->
    @include('frontend.inc.cta')
    <!-- end section -->

    <!-- contact section -->
    @include('frontend.inc.contact')
    <!-- end section -->
@endsection
