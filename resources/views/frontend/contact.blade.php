@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('content')
<section class="contact overflow-hidden" >
    <!-- start container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="sec-hd mb-1">
                    <span class="heading"></span>
                    <h2 class="sec-title">Contact Us!</h2>
                    <span class="heading"></span>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
                <div class="contact-box">
                    <div class="custom-form mt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg" style="opacity: 1;"> </p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text"
                                            class="form-control contact-form" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="email" id="email" type="email"
                                            class="form-control contact-form" placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control contact-form" id="subject"
                                            placeholder="Your Subject..">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="comments" id="comments" rows="6"
                                            class="form-control contact-form h-auto"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-rounded bg-gradiant" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5 py-4 justify-content-center text-center">
            <div class="col-md-4">
                <div>
                    <i class="mdi mdi-google-maps f-50 text-primary"></i>
                    <h5 class="mb-1">Location</h5>
                    <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-4 mt-lg-0">
                    <i class="mdi mdi-email f-50 text-primary"></i>
                    <h5 class="mb-1">Email</h5>
                    <p class="f-14 mb-0 text-muted">Email: Example@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-4 mt-lg-0">
                    <i class="mdi mdi-phone f-50 text-primary"></i>
                    <h5 class="mb-1">Phone</h5>
                    <p class="f-14 mb-0 text-muted">+ 124 236 0693</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>

@endsection
