@extends('frontend.layout.master')
@section('meta_title')
@endsection
@section('title')
Home
@endsection

@push('styles')

@endpush

@section('content')
<style type="text/css">
footer .footer-bottom p a {
    color: #000 !important;
}

.contact-us-area .address-items .info li .icon, .contact-us-area .address-items .info li span {
    display: table-cell;
    vertical-align: inherit!important;
}

@media only screen and (max-width: 767px){
h1 {
  font-size: 22px;
  margin-bottom: 10px !important;
}
.banner-area{
    background-position: center;
background-attachment: inherit;
height: 220px;
    }
    .banner-area div.info{    background-color: rgba(255, 255, 255, 0.5);
    height: 220px;}
}
}
</style>
 <!-- Start Banner
    ============================================= -->
    <div class="banner-area text-small content-double button-effect bg-fixed"
        style="background-image: url({{asset('frontend_assets/img/slider1.jpg')}});">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="double-items">
                            <!-- Banner Left Content -->
                            <div class="info col-md-6" style="margin-right: auto;">
                                <div class="content inc-video">
                                    <!-- <h1>It's time to create your own business scheme</h1> -->
                                    <h1>Advertise your business and contribute to our youth community. </h1>
                                    <p>
                  Connect with Teen Customers on Lit Teen Social.

                                    </p>
                                    <!--<a href="#" class="btn circle btn-dark border btn-md">Get Started</a>
                                    <a class="popup-youtube light video-play-button video-inline"
                                        href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                                        <i class="fa fa-play"></i>
                                    </a>-->
                                </div>
                            </div>
                            <!-- End Banner Left Content -->

                            <!-- Start Banner Form -->
                            <!-- <div class="form col-md-5 text-light col-md-offset-1">
                                <div class="form-info">
                                    <h2>Sign up today and receive <span>30 days</span> FREE trial.</h2>
                                    <form action="#">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Name*" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Email*" type="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Password*" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <button type="submit">
                                                    Register for free
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <!-- End Banner Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start We Offer
    ============================================= -->
    <div class="we-offer-area carousel-shadow text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>WHY WE DO <span>WHAT WE DO? </span></h2>
                        <h4>Screens & Teens. The technology battlefield.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="our-offer-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <i class="flaticon-sketch"></i>
                            <!-- <h4>Project creation</h4> -->
                            <p>
                                Our goal is to bridge the gap between technology and motivating our teens to socialize and experience fun, new exciting adventures
                            </p>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="item">
                            <i class="flaticon-cloud-computing"></i>
                            <!-- <h4>Software Development</h4> -->
                            <p>
                                Creating community & lifelong memories. Guiding our youth to live their best life.
                            </p>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="item">
                            <i class="flaticon-collaboration"></i>
                            <!-- <h4>Porject Management</h4> -->
                            <p>
                                Does your Business align with our goals? Reach out to us HERE today.
                            </p>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="item">
                            <i class="flaticon-refresh"></i>
                            <!-- <h4>Software Update</h4> -->
                            <p>
                                Gen Z will make up 40% of all consumer shopping this decade and 50 Billion Dollars in buying power in Canada.
                            </p>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="item">
                            <i class="flaticon-conversation"></i>
                            <!-- <h4>24/7 Support</h4> -->
                            <p>
                                Raise your brand awareness on LTS
                            </p>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Offer -->

    <!-- Start About
    ============================================= -->

    <!-- End About -->

    <!-- Start Features
    ============================================= -->

    <!-- End Features -->


    <!-- Start Overview
    ============================================= -->

    <!-- End Overview -->

    <!-- Start Pricing Area
    ============================================= -->
    <div id="pricing" class="pricing-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Pricing <span>Plan</span></h2>
                        <h4>List of our pricing packages</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pricing pricing-simple text-center">
                    <div class="col-md-4">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header">
                                    <!-- <h4>Free</h4> -->
                                    <h2><sup></sup>Free <sub></sub></h2>
                                </li>
                                <li class="icon">
                                    <i class="flaticon-start"></i>
                                </li>
                                <li >
                                    Run FREE company Teen Contest on LTS News Feed

                                </li>
                                <li>
                                    Giveaway prize provided by your business
                                </li>
                                <li>
                                    Your company is required to ship the giveaway prize at the end of the contest
                                </li>
                                <li>
                                    You may also get giveaways  & promotional swag shipped directly to LTS to advertise to our youth community
                                </li>
                                <!-- <li>Demo file <span data-toggle="tooltip" data-placement="top"
                                        title="Available on pro version"><i class="fas fa-info-circle"></i></span>
                                </li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support <span data-toggle="tooltip" data-placement="top"
                                        title="Available on pro version"><i class="fas fa-info-circle"></i></span>
                                </li>
                                <li>2 database</li>
                                <li>Documetation <span data-toggle="tooltip" data-placement="top"
                                        title="Available on pro version"><i class="fas fa-info-circle"></i></span>
                                </li>
                                <li class="footer">
                                    <a class="btn btn-dark border btn-sm" href="#">Try for free</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-item active">
                            <ul>
                                <li class="icon">
                                    <i class="flaticon-quality-badge"></i>
                                </li>
                                <li class="pricing-header">
                                    <h4 style="color: #000;">REGULAR</h4>
                                    <h2 style="color: #000;"><sup>$</sup>150</h2>
                                </li>
                                <li>
                                    <!-- <h4>Regular</h4> -->
                                    <!-- <h2><sup>$</sup>29 <sub>/ Year</sub></h2> -->
                                    Upload your advertisement banner to be displayed on our community News Feed
                                </li>
                                <li>
                                    Advertisements must be appropriate for our teen demographic
                                </li>
                                <li>
                                    LTS reserves the right to approve all ads
                                </li>
                                <li>
                                    Your ad will run for one or two weeks
                                </li>
                                <!-- <li>File compressed</li> -->
                                <!-- <li>Commercial use</li>
                                <li>Support <span data-toggle="tooltip" data-placement="top"
                                        title="Only for extended licence"><i class="fas fa-info-circle"></i></span>
                                </li>
                                <li>5 database</li>
                                <li>Documetation</li>
                                <li class="footer">
                                    <a class="btn btn-theme effect btn-sm" href="#">Get Started</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-item">
                            <ul>
                                <li class="icon">
                                    <i class="flaticon-value"></i>
                                </li>
                                <li class="pricing-header">
                                    <h4>Extended</h4>
                                    <h2><sup>$</sup>100</h2>
                                </li>
                                <li>
                                    Post your business listing & QR code offering in our app for our Teen community
                                </li>
                                <li>
                                    This option requires FREE or discounted items ( 50%) off or 2 for 1 Deals
                                </li>
                                <!-- <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                                <li>8 database</li>
                                <li>Documetation</li>
                                <li class="footer">
                                    <a class="btn btn-dark border btn-sm" href="#">Get Started</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-us-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Contact <span>Us</span></h2>
                        <h4>Do you Have Any Questions?</h4>
                        <p>Lit Teen Social & Adventures Ltd. is a teen social networking & membership club located in BC Canada. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 address" style="display: none;">
                    <div class="address-items">
                        <ul class="info">
                            <li>
                                <h4>Office Location</h4>
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                                <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                            </li>
                        </ul>
                    </div>
                </div><!-- col end-->
                <div class="col-md-3 address" style="display: none;">
                    <div class="address-items">
                        <ul class="info">
                            <li>
                                <h4>Phone</h4>
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                            </li>
                        </ul>
                    </div>
                </div><!-- col end-->
                <div class="col-md-12 address text-center">
                    <div class="address-items">
                        <ul class="info">
                            <li>
                                <h4>Email</h4>
                                <div class="mail-wrap" style="width: 240px; margin: 0 auto;">
                                    <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                    <span>litteensocial@gmail.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- col end-->
                <div class="col-md-3 address" style="display: none;">
                    <div class="address-items">
                        <h4>Find us On</h4>
                        <ul class="social">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-google-play"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-apple"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- col end-->
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection

@push('scripts')

@endpush
