@extends('frontend.layouts.app')
@section('content')
<section id="pricing" class="pricing_section bg-grey padding" style="margin-top: 90px">
    <div class="container">
        <div class="section_heading mb-40 align-center">
            <h2>Popular Package</h2>
            <p>Packaging keeps the world organized. Whether it’s a packet for your M&Ms, a hamper for your dirty laundry or the bottle that holds the delicious liquid particles <br>of your beer together, the things we put things in are important!</p>
        </div><!-- Section Heading -->
        <div class="mt-3">
            <form action="" class="form-inline" method="GET">
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="">Delivery Time: </label>
                    <select name="day" class="form-control" id="exampleFormControlSelect1">
                        <option selected value="">Select</option>
                        <option value="1">1 Day</option>
                        <option value="2">2 Day</option>
                        <option value="3">3 Day</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="">Service Type: </label>
                    <select name="type" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Select</option>
                        <option value="install" >Install only</option>
                        <option value="review">Review only</option>
                    </select>
                </div>

                <button type="submit" class="btn button_1 btn-sm mx-2" style="line-height: 40px">Filter</button>
            </form>
        </div>
        <div class="row pricing_list">
            @foreach ($packages as $package)
            <div class="col-md-4 col-sm-6 xs-padding wow bounceInUp my-3" data-wow-delay="0ms" data-wow-duration="800ms">
                <div class="pricing_table gradiant_2 align-center">
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
            <div>
                {{$packages->appends($_GET)->links()}}
            </div>
        </div>
    </div>
</section><!-- Pricing Section -->
@endsection
