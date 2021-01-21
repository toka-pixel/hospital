@extends('proclinic.layout')


@section('home')
<section class="hero-wrap hero-wrap-2" style="background-image: url('proclinic/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch "> 
                <div id="map">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3419.2524047471506!2d31.392332911491394!3d31.019216630658075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79c56d5e0d83b%3A0xac4a663775d8ee7b!2z2YXYs9iq2LTZgdmJ!5e0!3m2!1sen!2seg!4v1611256784201!5m2!1sen!2seg"
                        width="600" height="620" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0">
                        </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p><span>Email:</span> <a
                            href="https://preview.colorlib.com/cdn-cgi/l/email-protection#f79e999198b78e988285849e8392d994989a"><span
                                class="__cf_email__"
                                data-cfemail="b3daddd5dcf3cadcc6c1c0dac7d69dd0dcde">[email&#160;protected]</span></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection