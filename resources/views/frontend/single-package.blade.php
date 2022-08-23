@extends('frontend.layouts.app')
@section('content')
    <section id="singepackageSection" >
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-6 xs-padding wow bounceInUp my-3 " data-wow-delay="0ms" data-wow-duration="800ms">
                    <div class="display-4 text-center  py-3">

                    </div>
                    <div class="pricing_table pricing_tbl gradiant_2 align-center">
                        <div class="pricing_head ">
                            {{-- <h4>{{$package->name}}</h4>
                        <h3>${{$package->price}}</h3> --}}
                            <h4>daily pack</h4>
                            <h3>$22</h3>
                            <h5>7/24 Support</h5>
                        </div>
                        <ul>
                            {{-- @foreach ($package->services as $service)
                            <li>{{$service->service}}</li>

                        @endforeach --}}
                            <li>office plane</li>
                            <li>singel plane</li>
                            <li>mega plane</li>
                        </ul>
                        <div class="pricing_footer">
                            <a href="" class="button_1 price_btn">Get Started</a>
                            {{-- {{route('singlepackage', $package->id)}} --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 xs-padding wow bounceInUp my-3    " data-wow-delay="0ms"
                    data-wow-duration="800ms">
                    <div class="compare-header text-center py-4 ">
                        Compare plans
                    </div>
                    <table class="table text-centerr">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fechar</th>
                                <th scope="col">DAILY PACK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td><i class="ti-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
