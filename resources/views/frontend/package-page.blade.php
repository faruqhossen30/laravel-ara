@extends('frontend.layouts.app')
@section('title', 'Package ')
@section('content')
    <section class="section pricing" id="pricing" style="margin-top: 100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <form action="" method="get" class="form-inline">
                        <div class="row align-items-center">
                            <div class="col d-flex flex-row align-items-center">
                                <label class="fw-semibold" for="forDay">Day:</label>
                                <select name="day" class="form-control" id="forDay">
                                    <option selected="" value="">Select</option>
                                    <option value="1">1 Day</option>
                                    <option value="2">2 Day</option>
                                    <option value="3">3 Day</option>
                                </select>
                            </div>
                            <div class="col d-flex flex-row align-items-center">
                                <label for="forType">Type:</label>
                                <select name="type" class="form-control" id="forType">
                                    <option value="">Select</option>
                                    <option value="install">Install only</option>
                                    <option value="review">Review only</option>
                                </select>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary btn-sm">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row justify-content-center">
                @foreach ($packages as $package)
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="pricing-box text-center">
                            <div class="px-4 py-5">
                                <div class="pricing-icon text-primary">
                                    <h3>{{ $package->price }}<sup>$</sup></h3>
                                </div>
                                <!--end pricing-icon-->
                                <h5 class="my-4 box-heading">{{ $package->name }}</h5>
                                <ul class="pricing-team pricing-list list-unstyled mt-2 mb-0 text-start text-capitalize">
                                    @foreach ($package->services as $service)
                                        <li class="pricing-item"><i class="uil uil-check-circle text-primary"></i>
                                            {{$service->service}}
                                        </li>
                                    @endforeach
                                    {{-- <li class="pricing-item"><del class="text-muted">Updates</del></li> --}}
                                    {{-- <li class="pricing-item"><del class="text-muted">Premium support</del></li> --}}
                                </ul>
                                <a href="{{route('singlepackage', $package->id)}}" class="btn bg-gradiant mt-4 w-100">
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                @endforeach
                <div class="my-2">
                    {{ $packages->appends($_GET)->links() }}
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
