@extends('layouts.master')
@section('titulo') Servicios @endsection

@section('contenido')

    <section class="section-breadcrumb">
        <h2 class="title" >Our Facilities</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Facilities</span></span>
        </div>
    </section>

    <section class="section-facilities">
        <h2 class="hidden">Services</h2>
        <div class="container">
            <div class="facilities-container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-1.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">SPA Treatments & Massage</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-2.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-2">
                            <div class="tri-up"></div>
                            <h3 class="title">Indoor Heated Pool</h3>
                            <p class="content">Vivamus eros dolor, auctor aliquet dolor sit amet, euismod imperdiet ex. Nam sed nulla sed massa suscipit feugiat. Mauris et nunc ornare, placerat ex ac, interdum magna. Donec mollis tellus non sem pulvinar.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-3.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-3">
                            <div class="tri-up"></div>
                            <h3 class="title">Fitness Rooms</h3>
                            <p class="content">Suspendisse euismod, neque faucibus dictum rutrum, ex dolor tempor dolor, ut egestas velit tellus quis erat. Curabitur vel elit a nibh fringilla maximus.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-4.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-4">
                            <div class="tri-up"></div>
                            <h3 class="title">Dedicated Events Planner</h3>
                            <p class="content">Molestie condimentum tellus. Vivamus nec lectus congue, ultrices felis sit amet, dapibus augue. Cras fringilla efficitur elementum. Mauris ac consectetur nibh. Mauris tincidunt dolor justo, ac accumsan.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-5.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-5">
                            <div class="tri-up"></div>
                            <h3 class="title">Free WiFi Accessible</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-6.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-6">
                            <div class="tri-up"></div>
                            <h3 class="title">Safe Deposit Box</h3>
                            <p class="content">Vivamus eros dolor, auctor aliquet dolor sit amet, euismod imperdiet ex. Nam sed nulla sed massa suscipit feugiat. Mauris et nunc ornare, placerat ex ac, interdum magna. Donec mollis tellus non sem pulvinar.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-7.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-7">
                            <div class="tri-up"></div>
                            <h3 class="title">Carpark & Valet Parking</h3>
                            <p class="content">Suspendisse euismod, neque faucibus dictum rutrum, ex dolor tempor dolor, ut egestas velit tellus quis erat. Curabitur vel elit a nibh fringilla maximus.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-8.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-8">
                            <div class="tri-up"></div>
                            <h3 class="title">Business Centre</h3>
                            <p class="content">Molestie condimentum tellus. Vivamus nec lectus congue, ultrices felis sit amet, dapibus augue. Cras fringilla efficitur elementum. Mauris ac consectetur nibh. Mauris tincidunt dolor justo, ac accumsan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonials bg-secondary">
        <div class="text-center">
            <h2 class="title">Testimonial</h2>
        </div>
        <div class="moon-divider white"></div>
        <div class="container">
            <div class="testimonial-slider swiper-container">
                <div class="swiper-wrapper">
                    <!-- Testimonial 01 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">Aliquam sodales facilisis dolor, feugiat elementum tellus condimentum at. Mauris sem nisi, dictum eget facilisis quis, placerat eu nisl. Phasellus consectetur pharetra elit id maximus. Aliquam facilisis sodales erat, sit amet euismod eros dignissim aliquam pulvinar metus.</p>
                            <h3 class="name">Charles Coleman</h3>
                            <div class="position">CEO of Pineapple</div>
                        </div>
                    </div>
                    <!-- Testimonial 02 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">Aliquam sodales facilisis dolor, feugiat elementum tellus condimentum at. Mauris sem nisi, dictum eget facilisis quis, placerat eu nisl. Phasellus consectetur pharetra elit id maximus. Aliquam facilisis sodales erat, sit amet euismod eros dignissim aliquam pulvinar metus.</p>
                            <h3 class="name">Charles Coleman</h3>
                            <div class="position">CEO of Pineapple</div>
                        </div>
                    </div>
                    <!-- Testimonial 03 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">Aliquam sodales facilisis dolor, feugiat elementum tellus condimentum at. Mauris sem nisi, dictum eget facilisis quis, placerat eu nisl. Phasellus consectetur pharetra elit id maximus. Aliquam facilisis sodales erat, sit amet euismod eros dignissim aliquam pulvinar metus.</p>
                            <h3 class="name">Charles Coleman</h3>
                            <div class="position">CEO of Pineapple</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-page-controls"></div>
        </div>
    </section>
@endsection