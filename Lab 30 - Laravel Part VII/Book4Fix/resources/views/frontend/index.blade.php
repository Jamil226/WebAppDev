@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
<section class="main-slider-one">
    <div class="main-slider-one__carousel wallpi-owl__carousel owl-carousel" data-owl-options='{
        "loop": true,
        "animateOut": "fadeOut",
        "animateIn": "fadeIn",
        "items": 1,
        "autoplay": false,
        "autoplayTimeout": 7000,
        "smartSpeed": 1000,
        "nav": true,
        "navText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow1\"></span>"],
        "dots": false,
        "margin": 0
        }'>
        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg" style="background-image: url({{ url('frontend/images/sliders/maintenance.jpg') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider-one__content">
                                <span class="main-slider-one__tag-title">Revitalize your space</span>
                                <h1 class="main-slider-one__title">Home <br> Renovation</h1>
                                <div class="main-slider-one__btn">
                                    <a href="#" class="wallpi-btn hero-btn"><span>View Our Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-one__shope">
                    <img src="{{ url('frontend/images/shapes/rennovation.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg" style="background-image: url({{ url('frontend/images/sliders/plumbing-new.jpg') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider-one__content">
                                <span class="main-slider-one__tag-title">Fix leaks, solve problems</span>
                                <h1 class="main-slider-one__title">Plumbing <br> Solutions </h1>
                                <div class="main-slider-one__btn">
                                    <a href="#" class="wallpi-btn hero-btn"><span>View Our Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-one__shope">
                    <img src="{{ url('frontend/images/shapes/plumbing.png') }}" alt="Book for Fix">
                </div>
            </div>
        </div>

        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg" style="background-image: url({{ url('frontend/images/sliders/painting.jpg') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider-one__content">
                                <span class="main-slider-one__tag-title">Refresh your walls</span>
                                <h1 class="main-slider-one__title">Painting <br> Services </h1>
                                <div class="main-slider-one__btn">
                                    <a href="#" class="wallpi-btn hero-btn"><span>View Our Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-one__shope">
                    <img src="{{ url('frontend/images/shapes/painting-brush.png') }}" alt="Book for Fix">
                </div>
            </div>
        </div>

        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg" style="background-image: url({{ url('frontend/images/sliders/handyman-new.jpg') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider-one__content">
                                <span class="main-slider-one__tag-title">Quick fixes, expert help</span>
                                <h1 class="main-slider-one__title">Handyman <br> Assistance </h1>
                                <div class="main-slider-one__btn">
                                    <a href="#" class="wallpi-btn hero-btn"><span>View Our Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-one__shope">
                    <img src="{{ url('frontend/images/shapes/handyman.png') }}" alt="Book for Fix">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-one about-one--three">
    <div class="container">
        <div class="sec-title">
            <span class="sec-title__tagline">Who we are?</span>
            <h2 class="about-one__content__titel mt-4">Welcome to Book for Fix - Your Trusted Technical Services Provider</h2>
        </div>
        <div class="row" style="margin-top:-40px;">
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="about-one__content">
                    <div class="about-one__content__col">
                        <h3 class="about-one__content__titel">About Book for Fix</h3>
                        <p class="about-one__content__text" style="text-align:justify;">
                            At Book for Fix, we are more than mere technicians; we are artisans, sculpting dreams into reality. With every brushstroke, every twist of the wrench, we breathe life into homes, infusing them with the warmth of our passion.
                        </p>
                    </div>
                    <div class="about-one__content__col"  style="margin-top:-20px;">
                        <h3 class="about-one__content__titel">Our Mission</h3>
                        <p class="about-one__content__text" style="text-align:justify;">
                            Our mission transcends mere repairs; it is a testament to our devotion to your well-being. Through the symphony of our efforts, we harmonize reliability, efficiency, and affordability, orchestrating a melody of peace that resonates through the corridors of your home.
                        </p>
                    </div>
                    <div class="about-one__content__call" style="margin-top:-20px;">
                        <div class="about-one__content__inner d-flex align-items-center">
                            <img class="about-one__content__expertimg"
                                src="{{ url('frontend/images/about/about-bg-img.jpg') }}" alt="Book for Fix">
                            <p class="about-one__content__telnumber">CALL NOW WITH AN EXPERT
                                <a href="tel:+971585861272"><b>+971 58 586 1272</b></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-one__image wow fadeInLeft" data-wow-delay="300ms">
                    <div class="about-one__image__wrap">
                        <div class="about-one__image__wrap__shape-top"></div>
                        <div class="about-one__image__wrap__shape-bottom"></div>
                        <div class="about-one__image__wrap__shape-right"></div>
                        <img class="about-one__image__wrap__main" src="{{ url('frontend/images/about/about-bg-img.jpg') }}" alt="Book for Fix">
                        <div class="about-one__image__wrap__inner_wrap">
                            <div class="about-one__image__wrap__inner_mx">
                                <img class="about-one__image__wrap__inner_img" src="{{ url('frontend/images/about/about-front-min.jpg') }}" alt="Book for Fix">
                                <div class="about-one__image__wrap__inner_shape-top"></div>
                                <div class="about-one__image__wrap__inner_shape-left"></div>
                                <div class="about-one__image__wrap__circle">
                                    <img src="{{ url('frontend/images/about/logo-about.png') }}" alt="Book for Fix">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-wallpaper-1"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Effective</h4>
                    <p class="feature-two__text">
                        Our care, quality, and commitment make us effective.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-mobile"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Careful</h4>
                    <p class="feature-two__text">
                        In our hands, every detail is cradled with utmost care.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-management"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Flexible</h4>
                    <p class="feature-two__text">
                        In our graceful fluidity, we find boundless strength.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-one service-one--three">
    <div class="service-one__bg"
        style="background-image: url('{{ url('frontend/images/backgrounds/feature-bg2-1.jpg') }}'), url('{{ url('frontend/images/resources/services-feedback-bg2-1.jpg') }}')">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-one__sec-title-wrap d-flex flex-wrap">
                    <div class="sec-title">
                        <span class="sec-title__tagline">Our Services</span>
                        <h2 class="sec-title__title">Services That <br> We Provide</h2>
                    </div>
                    <div class="service-one__sec-info-wrap">
                        <p class="service-one__sec-info-text">
                            Our heartfelt commitment, infused with threads of empathy and compassion, is dedicated to meeting your needs with unwavering care and steadfast dedication, guiding you with love.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutter-y-20">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-ac.png') }}" alt="AC Repair & Maintenance">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">AC Repair</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Explore our AC repair solutions and services</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-coil-cleaning.png') }}" alt="Coil Cleaning">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">Coil Cleaning</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Revive your AC's vitality with our Coil Cleaning service</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-duct-cleaning.png') }}" alt="Duct Cleaning">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">Duct Cleaning</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Revitalize your home's air with our Duct Cleaning service</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-electrical.png') }}" alt="Electrical Work">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">Electrical Work</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Illuminate your life with our expert Electrical Work services</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-plumbing.png') }}" alt="Plumbing Services">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">Plumbing</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Flow into serenity with our expert Plumbing Services</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-painting.png') }}" alt="Painting">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">Painting</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Color your world with our transformative Painting services</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-carpentary.png') }}" alt="Carpentry">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">Carpentry</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Craft your dreams with our masterful Carpentry services</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-one__item">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/services/service-thumbnail-water-tank.png') }}" alt="Water Tank Cleaning">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="#">Water Tank Cleaning</a>
                            </h4>
                            <a class="sercives-arrow-right" href="#"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Refresh your spirit with our rejuvenating Water Tank Cleaning service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->
<section class="services-client-one services-client-one--three">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp animated" data-wow-delay="100ms"
                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <div class="services-client-one__wrap d-flex align-items-center justify-content-sm-between">
                    <div class="services-client-one__image">
                        <img src="{{ url('frontend/images/resources/feature1-2.jpg') }}" alt="Book for Fix">
                    </div>
                    <h4 class="services-client-one__title">We’re Trusted By More Then 400 Clients</h4>
                    <a href="#" class="wallpi-btn services-client--btn"><span>Explore more</span></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- services-client-one End -->

<section class="services-feedback-one services-feedback-one--three">
    <div class="container">
        <div class="row services-feedback-one__row">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-feedback-one__content">
                    <div class="sec-title">
                        <h2 class="sec-title__title">Your sanctuary of technical excellence</h2>
                        <p class="sec-title__text" style="text-align: justify;">
                            Step into the embrace of our Leading Technical Services Provider in UAE, where expertise and dedication intertwine to create a sanctuary of reliability, innovation, and unwavering support for all your needs.
                        </p>
                    </div>

                    <div class="services-feedback-one__progress-wrap">
                        <div class="services-feedback-one__progress">
                            <h6 class="services-feedback-one__progress-title">Project Success Rate</h6>
                            <div class="services-feedback-one__progress-bar">
                                <div class="services-feedback-one__progress-inner count-bar"
                                    data-percent="95%">
                                    <div class="services-feedback-one__progress-number count-text">95%</div>
                                </div>
                            </div>
                        </div>

                        <div class="services-feedback-one__progress">
                            <h6 class="services-feedback-one__progress-title">Cleint Satisfaction Rate</h6>
                            <div class="services-feedback-one__progress-bar">
                                <div class="services-feedback-one__progress-inner count-bar"
                                    data-percent="100%">
                                    <div class="services-feedback-one__progress-number count-text">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 wow fadeInRight" data-wow-delay="100ms">
                <div class="services-feedback-one__image">
                    <img src="{{ url('frontend/images/services/comapny-services-rate.png') }}" alt="Book for Fix">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-one project-one--three">
    <div class="project-one__bg"
        style="background-image: url('images/projects/bg.png');"></div>
    <div class="container-fluid">
        <div class="sec-title">
            <span class="sec-title__tagline">Our Project</span>
            <h2 class="sec-title__title">Our Quality Work</h2>
        </div>
        <div class="row project-one__row gutter-y-20">
            <div class="col-xl-3 col-lg-6">
                <div class="project-one__item">
                    <div class="project-one__item__image">
                        <img src="{{ url('frontend/images/projects/project-thumbnail.png') }}" alt="Book for Fix">
                    </div>
                    <div class="project-one__item__info">
                        <div class="project-one__item__inner">
                            <div class="project-one__item__bg normal--bg">
                                <strong class="project-one__item__text">Renovation</strong>
                                <h4 class="project-one__item__heading">
                                    <a href="#">Home Renovation</a></h4>
                                <a href="#" class="project-one__item__right-arrow">
                                    <i class="icon-arrow-small-right"></i>
                                </a>
                            </div>
                            <div class="project-one__item__bg hover--bg">
                                <strong class="project-one__item__text">Renovation</strong>
                                <h4 class="project-one__item__heading">
                                    <a href="#">Home Renovation</a></h4>
                                <p class="project-one__item__tex-info">
                                    With dedication and skill, we've transformed homes through renovation.
                                </p>
                                <a href="#" class="project-one__item__right-arrow">
                                    <i class="icon-arrow-small-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials-one testimonials-one--two">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title">
                    <span class="sec-title__tagline">Testimonial</span>
                    <h2 class="sec-title__title">What Does The Customer <br> Have To Say?</h2>
                </div>
            </div>
        </div>
        <div class="testimonials-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel" data-owl-options='{
            "items": 1,
            "margin": 0,
            "loop": true,
            "smartSpeed": 700,
            "nav": true,
            "navText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow1\"></span>"],
            "dots": true,
            "autoplay": false,
            "responsive": {
                "0": {
                    "items": 1
                },
                "992": {
                    "items": 2,
                    "margin": 15
                },
                "1200": {
                    "items": 3,
                    "margin": 30
                }
            }
        }'>
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonials-card__content">
                            Book For Fix turned my house into a haven! Their plumbing service fixed all my leaks, and now my home feels like a sanctuary.
                        </div>
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="{{ url('frontend/images/resources/testimonial-owner1-1.png') }}" alt="Book for Fix">
                            </div>
                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Robin Kaolaip</h5>
                                <p class="testimonials-card__designation">Interior design, architecture</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="consultation-one consultation-one--three">
    <div class="consultation-one__bg"
        style="background-image: url('{{ url('frontend/images/shapes/consultation-shape1-1.png') }}');"></div>
    <div class="container-fluid consultation-one__wrap">
        <div class="row consultation-one__row">
            <div class="consultation-one__colimg">
                <div class="consultation-one__colimg__image">
                    <div class="consultation-one__colimg__image__mainimg">
                        <img src="{{ url('frontend/images/sliders/handyman-new.jpg') }}" alt="Book for Fix">
                    </div>

                    <div class="consultation-one__colimg__image__circlemediam">
                        <img src="{{ url('frontend/images/sliders/home-renovation.jpg') }}" alt="Book for Fix">
                    </div>
                </div>
            </div>
            <div class="consultation-one__contentwrap">
                <div class="consultation-one__contentwrap__bg"
                    style="background-image: url('{{ url('frontend/images/backgrounds/consultation-bg1-1.png') }}');">
                </div>
                <div class="consultation-one__contentwrap__content">
                    <form class="contact__form contact-form-validated" action="#">
                        <div class="sec-title">
                            <h2 class="sec-title__title">Get A Free Consultation</h2>
                            <p class="sec-title__text">There are many variations of passages of lorem Ipsum
                                available, but <br> the majority have suffered alteration in some</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="Full Name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div
                                    class="consultation-one__contentwrap__content__input-box text-message-box">
                                    <textarea name="message" placeholder="Message Details"></textarea>
                                </div>

                                <div class="consultation-one__contentwrap__content__btn-box">
                                    <button type="submit" class="wallpi-btn wallpi-btn--submit"><span>Send Request</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="consultation-one__contentwrap__call">
                    <div class="consultation-one__contentwrap__inner">
                        <i class="icon-phone-call"></i>
                        <p class="consultation-one__contentwrap__telnumber">
                            Call Anytime
                            <a href="tel:+971585861272">+971 58 586 1272</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-one blog-one--three">
    <div class="blog-one__bg" style="background-image: url('images/backgrounds/blog-bg1-1.jpg');">
    </div>
    <div class="container">
        <div class="sec-title">
            <span class="sec-title__tagline">Our Blog Post</span>
            <h2 class="sec-title__title">News & Articles</h2>
        </div>
        <div class="blog-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
            "items": 1,
            "margin": 30,
            "loop": true,
            "smartSpeed": 700,
            "nav": false,
            "navText": "",
            "dots": false,
            "autoplay": false,
            "responsive": {
                "0": {
                    "items": 1,
                    "dots": true
                },
                "768": {
                    "items": 2,
                    "dots": false
                },
                "1200": {
                    "items": 3
                },
                "1366": {
                    "items": 4
                }
            }
        }'>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                    <div class="blog-card__image">
                        <img src="{{ url('frontend/images/blog/blog-post1-1.jpg') }}" alt="Book for Fix">
                        <a href="#" class="blog-card__image__link"></a>
                    </div>
                    <div class="blog-card__content">
                        <span class="blog-card__tagtext">Printing</span>
                        <h5 class="blog-card__title">
                            <a href="#">
                                Creating a Purpose-Driven Tech Culture at Chase
                            </a>
                        </h5>
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <i class="icon-user1"></i>
                                    By Admin
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="icon-calendar"></i> March 12</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="quick-support quick-support--three">
    <div class="container">
        <div class="quick-support__wrapper">
            <div class="row quick-support__row">
                <div class="quick-support__call">
                    <div class="quick-support__wrap d-flex align-items-center">
                        <i class="icon-phone-call quick-support__icon"></i>
                        <div class="quick-support__help">
                            <p class="quick-support__help__text">Helpline and Support</p>
                            <a class="quick-support__help__number" href="tel:+971585861272">+971 58 586 1272</a>
                        </div>
                    </div>
                </div>
                <div class="quick-support__reauest d-flex align-items-center justify-content-between">
                    <h3 class="quick-support__title">Contact us, and we'll do our best to assist you.</h3>
                    <a href="#" class="wallpi-btn wallpi-btn--request"><span>Contact Now</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
