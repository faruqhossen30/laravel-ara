@extends('frontend.layouts.app')
@section('content')
<section id="pricing" class="pricing_section bg-grey padding" style="margin-top: 90px">
    <div class="container">
        <div class="section_heading mb-40 align-center">
            <h2>Popular Package</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p>
        </div><!-- Section Heading -->
        <div class="mt-3">
            <form action="" class="form-inline" method="GET">
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="">Delivery Time: </label>
                    <select name="day" class="form-control mx-2" id="exampleFormControlSelect1">
                        <option selected>Select</option>
                        <option value="1">1 Day</option>
                        <option value="5">5 Day</option>
                        <option value="7">7 Day</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="">Service Type: </label>
                    <select name="type" class="form-control mx-2" id="exampleFormControlSelect1">
                        <option selected>Select</option>
                        <option value="install">Install only</option>
                        <option value="review">Review only</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary my-2">Filter</button>
            </form>
        </div>
        <div class="row pricing_list">
            @foreach ($packages as $package)
            <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp my-3" data-wow-delay="0ms" data-wow-duration="800ms">
                <div class="pricing_table gradiant_2 align-center">
                    <div class="pricing_head ">
                        <h4>{{$package->name}}</h4>
                        <h3>${{$package->price}}</h3>
                        <h5>7/24 Support</h5>
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
            <div>
                {{$packages->links()}}
            </div>
        </div>
        <div class="text-center pt-4">
            <a href="#" class="button_1 button_2">All Package</a>
        </div>
    </div>
</section><!-- Pricing Section -->
@endsection
