@extends('frontend.layouts.main')
@section('title', 'About')
@section('main-container')

<section class="page-header @@ExtraClass">
    <div class="page-header__bg" style="background-image: url('frontend/images/backgrounds/hero-image2-1.jpg');"></div>
    <div class="container">
        <ul class="wallpi-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>About</span></li>
        </ul>
        <h2 class="page-header__title">About Us</h2>
    </div>
</section>

<section class="about-two about-two--aboutpage">
    <div class="container">
        <div class="row about-two__row">
            <div class="about-two__imagecol wow fadeInRight" data-wow-delay="300ms">
                <div class="about-two__imagecol__image">
                    <img src="frontend/images/resources/about2-1.jpg" alt="">
                </div>
                <div class="about-two__imagecol__imagesmall">
                    <img src="frontend/images/resources/about2-2.jpg" alt="">
                </div>
            </div>

            <div class="about-two__contentcol wow fadeInLeft" data-wow-delay="300ms">
                <div class="sec-title">


                    <span class="sec-title__tagline">About Comapny</span><!-- /.sec-title__tagline -->

                    <h2 class="sec-title__title">Why Choose <br> Our Wallpaper <br> Services</h2><!-- /.sec-title__title -->

                    <p class="sec-title__text">We aim to provide the very best in printing services, with personable and knowledgeable customer services to match.</p><!-- /.sec-title__text -->

                </div><!-- /.sec-title -->
                <div class="about-two__contentcol__benefits d-flex align-items-center">
                    <div class="about-two__contentcol__benefits__wrap d-flex align-items-center">
                        <span class="benefits-icon icon-print"></span>
                        <p class="about-two__contentcol__benefits__text">Quality Standards
                            Product</p>
                    </div>

                    <div class="about-two__contentcol__benefits__wrap d-flex align-items-center">
                        <span class="benefits-icon icon-done-ring-round"></span>
                        <p class="about-two__contentcol__benefits__text">Cost Effective
                            Services</p>
                    </div>
                </div>

                <p class="about-two__contentcol__text">Lorem ipsum dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm on ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <div class="about-two__contentcol__btnwrap">
                    <a href="about.html" class="wallpi-btn about-one--btn"><span>Explore more</span></a>
                    <h6 class="about-two__contentcol__printed">High Quality Printed Wallpaper</h6>
                </div>
            </div><!-- /.why-choose-two__image -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- about-two End -->

<section class="feature-two feature-two--aboutpage">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-wallpaper-1"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Effective</h4>
                    <p class="feature-two__text">For high-quality colour printing at an affordable price, we are the</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-mobile"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Careful</h4>
                    <p class="feature-two__text">For high-quality colour printing at an affordable price, we are the</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-management"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Flexible</h4>
                    <p class="feature-two__text">For high-quality colour printing at an affordable price, we are the</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.feature-one -->

<section class="why-choose-one why-choose-one--aboutpage">
    <div class="why-choose-one--aboutpage__shapeleft">
        <img src="frontend/images/shapes/about-shap-left1-1.png" alt="">
    </div>
    <div class="why-choose-one--aboutpage__shaperight">
        <img src="frontend/images/shapes/about-shap-right1-1.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="why-choose-one__content">
                    <div class="sec-title">


                        <span class="sec-title__tagline">Why Should Choose Us</span><!-- /.sec-title__tagline -->

                        <h2 class="sec-title__title">We Provide Quality Home Wallpaper Solution</h2><!-- /.sec-title__title -->

                        <p class="sec-title__text">There are many variations of passages of lorem wallpaper Ipsum available, but the majority have suffered alteration in some form odio dignissimos ducimus qui blanditiis</p><!-- /.sec-title__text -->

                    </div><!-- /.sec-title -->
                    <a href="about.html" class="wallpi-btn why-choose-one--btn"><span>Explore more</span></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="why-choose-one__feature">
                    <div class="feature-one__item">
                        <div class="feature-one__item__img">
                            <img src="frontend/images/resources/feature1-2.jpg" alt="wallpi">
                        </div>

                        <div class="feature-one__item__wrap d-flex flex-wrap">
                            <div class="feature-one__item__circle_img">
                                <img src="frontend/images/resources/feature-circle1-2.jpg" alt="">
                            </div>

                            <div class="feature-one__item__info">
                                <h4 class="feature-one__item__info__title">100% Your Satisfaction</h4>
                                <p class="feature-one__item__info__text">Losum dolor sit amet consectetur adipiscing elit wood expert lorem ipsum is simply free text dolor sit</p>
                            </div>
                        </div>
                    </div><!-- feature-item -->

                    <div class="feature-one__item">
                        <div class="feature-one__item__img">
                            <img src="frontend/images/resources/feature1-1.jpg" alt="wallpi">
                        </div>

                        <div class="feature-one__item__wrap d-flex flex-wrap">
                            <div class="feature-one__item__circle_img">
                                <img src="frontend/images/resources/feature-circle1-1.jpg" alt="">
                            </div>

                            <div class="feature-one__item__info">
                                <h4 class="feature-one__item__info__title">Cost Effective Services</h4>
                                <p class="feature-one__item__info__text">Losum dolor sit amet consectetur adipiscing elit wood expert lorem ipsum is simply free text dolor sit</p>
                            </div>
                        </div>
                    </div><!-- feature-item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why-choose-one End -->

<section class="funfact-one funfact-one--aboutpage mb-4">
    <div class="container">
        <ul class="list-unstyled funfact-one__list">
            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-img-box"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="15" data-speed="1500"></strong>
                    </div>
                    <p class="funfact-one__text">Years Of Experience</p>
                </div>
            </li><!-- /.funfact-one__item -->

            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-book-check"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="10" data-speed="1500"></strong>
                        <span class="funfact-one__counter-num">K+</span>
                    </div>
                    <p class="funfact-one__text">Customers Satisfaction</p>
                </div>
            </li><!-- /.funfact-one__item -->

            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-folder-check"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="14" data-speed="1500"></strong>
                        <span class="funfact-one__counter-num">K+</span>
                    </div>
                    <p class="funfact-one__text">Projects Worldwide</p>
                </div>
            </li><!-- /.funfact-one__item -->

            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-user"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="11" data-speed="1500"></strong>
                        <span class="funfact-one__counter-num">K+</span>
                    </div>
                    <p class="funfact-one__text">Our Recent Client</p>
                </div>
            </li><!-- /.funfact-one__item -->
        </ul><!-- /.list-unstyled funfact-one__list -->
    </div><!-- /.container -->
</section>

<section class="services-feedback-one services-feedback-one--two services-feedback-one--aboutpage" style="background-image: url('frontend/images/resources/services-feedback-bg2-1.jpg');">
    <div class="container">
        <div class="row services-feedback-one__row">
            <div class="services-feedback-one__content fadeInLeft" data-wow-delay="100ms">
                <div class="sec-title">


                    <h2 class="sec-title__title">Leading Provider of interior Service In London</h2><!-- /.sec-title__title -->

                    <p class="sec-title__text">There are many variations of passages of lorem wallpaper Ipsum available, but the majority have suffered alteration in some form odio dignissimos ducimus qui blanditiis</p><!-- /.sec-title__text -->

                </div><!-- /.sec-title -->
                <div class="services-feedback-one__progress-wrap">
                    <div class="services-feedback-one__progress">
                        <h6 class="services-feedback-one__progress-title">Our Success Client</h6>
                        <div class="services-feedback-one__progress-bar">
                            <div class="services-feedback-one__progress-inner count-bar" data-percent="85%">
                                <div class="services-feedback-one__progress-number count-text">85%</div>
                            </div>
                        </div>
                    </div>

                    <div class="services-feedback-one__progress">
                        <h6 class="services-feedback-one__progress-title">Interior Work</h6>
                        <div class="services-feedback-one__progress-bar">
                            <div class="services-feedback-one__progress-inner count-bar" data-percent="90%">
                                <div class="services-feedback-one__progress-number count-text">90%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services-feedback-one__image fadeInRight" data-wow-delay="100ms">
                <img class="services-feedback-one__mainimage" src="frontend/images/resources/feedback-services1-1.jpg" alt="">
                <div class="services-feedback-one__leftshape">
                    <img src="frontend/images/resources/feedback-services1-1.jpg" alt="">
                </div>
                <div class="services-feedback-one__rightshape">
                    <img src="frontend/images/resources/feedback-services1-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!-- /.services-feedback-one -->

<section class="services-client-one">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-client-one__wrap d-flex align-items-center justify-content-sm-between">
                    <div class="services-client-one__image">
                        <img src="frontend/images/resources/feature1-2.jpg" alt="">
                    </div>
                    <h4 class="services-client-one__title">We’re Trusted by More then 8800 Clients</h4>
                    <a href="services.html" class="wallpi-btn services-client--btn"><span>Explore more</span></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.services-client-one -->

<section class="testimonials-one testimonials-one--three testimonials-one--aboutpage">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title">


                    <span class="sec-title__tagline">Testimonial</span><!-- /.sec-title__tagline -->

                    <h2 class="sec-title__title">What Does The Customer <br> Have To Say?</h2><!-- /.sec-title__title -->

                </div><!-- /.sec-title -->
            </div>
        </div>
        <div class="testimonials-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel" data-owl-options='{
    "items": 1,
    "margin": 0,
    "loop": true,
    "smartSpeed": 700,
    "nav": false,
    "navText": "",
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
        },
        "1280": {
            "items": 4,
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
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-1.png" alt="Robin Kaolaip">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Robin Kaolaip</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-4.png" alt="Alex Kaku">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Alex Kaku</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-5.png" alt="Wiliam Robin">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Wiliam Robin</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
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
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-3.png" alt="Kain Olaian">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Kain Olaian</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-2.png" alt="Forida Lara">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Forida Lara</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-3.png" alt="Alndo Almas">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Alndo Almas</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
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
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-1.png" alt="Robin Kaolaip">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Robin Kaolaip</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-2.png" alt="Forida Lara">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Forida Lara</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="frontend/images/resources/testimonial-owner1-3.png" alt="Alndo Almas">
                            </div><!-- /.testimonials-card__image -->

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Alndo Almas</h5><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation">Interior design, architecture</p><!-- /.testimonials-card__designation -->
                            </div>
                        </div>
                    </div><!-- /.testimonials-card__inner -->
                </div><!-- /.testimonials-card -->
            </div><!-- /.item -->
        </div><!-- /.testimonials-one__carousel -->
    </div><!-- /.container -->
</section><!-- /.testimonials-one -->

<section class="consultation-one consultation-one--three consultation-one--aboutpage">
    <div class="consultation-one__bg" style="background-image: url('frontend/images/shapes/consultation-shape1-1.png');"></div>
    <div class="container-fluid consultation-one__wrap">
        <div class="row consultation-one__row">
            <div class="consultation-one__colimg">
                <div class="consultation-one__colimg__image">
                    <div class="consultation-one__colimg__image__mainimg">
                        <img src="frontend/images/backgrounds/hero-image1-1.jpg" alt="wallpi">
                    </div>

                    <div class="consultation-one__colimg__image__circlemediam">
                        <img src="frontend/images/resources/consultation-img1-1.jpg" alt="wallpi">
                    </div>
                </div>
            </div>

            <div class="consultation-one__contentwrap">
                <div class="consultation-one__contentwrap__bg" style="background-image: url('frontend/images/backgrounds/consultation-bg1-1.png');"></div>
                <div class="consultation-one__contentwrap__content">
                    <form class="contact__form contact-form-validated" action="https://bracketweb.com/wallpi-html/inc/sendemail.php">
                        <div class="sec-title">


                            <h2 class="sec-title__title">Get A Free Consultation</h2><!-- /.sec-title__title -->

                            <p class="sec-title__text">There are many variations of passages of lorem Ipsum available, but <br> the majority have suffered alteration in some</p><!-- /.sec-title__text -->

                        </div><!-- /.sec-title -->
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
                                <div class="consultation-one__contentwrap__content__input-box text-message-box">
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
                        <p class="consultation-one__contentwrap__telnumber">Call Anytime <a href="tel:+88(000)-4612">+ 88 (000) - 4612</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.consultation-one -->

<section class="team-one team-one--aboutpage">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team-one__sec-title-wrap d-flex flex-wrap">
                    <div class="sec-title">


                        <span class="sec-title__tagline">Support Team</span><!-- /.sec-title__tagline -->

                        <h2 class="sec-title__title">Professional <br> Team Member’s</h2><!-- /.sec-title__title -->

                    </div><!-- /.sec-title -->
                    <div class="team-one__sec-info-wrap">
                        <p class="team-one__sec-info-text">There are many variations of passages of lorem Ipsum available
                            but the majority have suffered alteration in some form, by injected humour, Whether you require a one-time or recurring cleaning for</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="team-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel" data-owl-options='{
    "items": 1,
    "margin": 0,
    "loop": true,
    "smartSpeed": 700,
    "nav": false,
    "navText": "",
    "dots": false,
    "autoplay": false,
    "responsive": {
        "0": {
            "dots": true,
            "items": 1
        },
        "992": {
            "items": 3,
            "margin": 28,
            "dots": false
        }
    }
    }'>
                <div class="item">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="team-card__image">
                            <img src="frontend/images/team/team1-1.jpg" alt="Martin Kellis">
                            <div class="team-card__hover">
                                <div class="team-card__social">
                                    <i class="icon-add"></i>
                                    <div class="team-card__social__list">
                                        <a href="https://linkedin.com/">
                                            <i class="fab fa-linkedin-in"></i>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://twitter.com/">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://facebook.com/">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://instagram.com/">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.team-card__social__list -->
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__hover -->
                        </div><!-- /.team-card__image -->

                        <div class="team-card__content">
                            <h4 class="team-card__title">
                                <a href="team-details.html">Martin Kellis</a>
                            </h4><!-- /.team-card__title -->
                            <span class="team-card__designation">Head of Designer</span><!-- /.team-card__designation -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div>

                <div class="item">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="team-card__image">
                            <img src="frontend/images/team/team1-2.jpg" alt="Wiliam Adan">
                            <div class="team-card__hover">
                                <div class="team-card__social">
                                    <i class="icon-add"></i>
                                    <div class="team-card__social__list">
                                        <a href="https://linkedin.com/">
                                            <i class="fab fa-linkedin-in"></i>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://twitter.com/">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://facebook.com/">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://instagram.com/">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.team-card__social__list -->
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__hover -->
                        </div><!-- /.team-card__image -->

                        <div class="team-card__content">
                            <h4 class="team-card__title">
                                <a href="team-details.html">Wiliam Adan</a>
                            </h4><!-- /.team-card__title -->
                            <span class="team-card__designation">Head of Designer</span><!-- /.team-card__designation -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div>

                <div class="item">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                        <div class="team-card__image">
                            <img src="frontend/images/team/team1-7.jpg" alt="Lara Alex">
                            <div class="team-card__hover">
                                <div class="team-card__social">
                                    <i class="icon-add"></i>
                                    <div class="team-card__social__list">
                                        <a href="https://linkedin.com/">
                                            <i class="fab fa-linkedin-in"></i>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://twitter.com/">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://facebook.com/">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://instagram.com/">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.team-card__social__list -->
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__hover -->
                        </div><!-- /.team-card__image -->

                        <div class="team-card__content">
                            <h4 class="team-card__title">
                                <a href="team-details.html">Lara Alex</a>
                            </h4><!-- /.team-card__title -->
                            <span class="team-card__designation">Head of Designer</span><!-- /.team-card__designation -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div>
            </div>
        </div>
    </div>
</section><!-- /.team-one -->

<section class="quick-support quick-support--two">
    <div class="container">
        <div class="quick-support__wrapper">
            <div class="row quick-support__row">
                <div class="quick-support__call">
                    <div class="quick-support__wrap d-flex align-items-center">
                        <i class="icon-phone-call quick-support__icon"></i>
                        <div class="quick-support__help">
                            <p class="quick-support__help__text">Helpline and Support</p>
                            <a class="quick-support__help__number" href="tel:+8805002451">+88 05 00 24 51</a>
                        </div>
                    </div>
                </div>

                <div class="quick-support__reauest d-flex align-items-center justify-content-between">
                    <h3 class="quick-support__title">Please Contact Us And We’ll <br>
                        Do Our Best To Help.</h3>
                    <a href="contact.html" class="wallpi-btn wallpi-btn--request"><span>Request Now</span></a>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.quick-support -->




@endsection
