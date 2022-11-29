<section class="contact overflow-hidden" id="contact">
    <!-- start container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="sec-hd">
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
    <div class="position-relative">
        <div class="contact-map">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1963590.6735126767!2d-117.71712342097838!3d36.07023032891268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1649323982108!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- end container -->
</section>
