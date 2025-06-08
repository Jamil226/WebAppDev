@extends('frontend.layouts.main')
@section('title', 'About')
@section('main-container')

<section class="page-header our-team">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/hero-image2-1.jpg');"></div>
    <div class="container">
        <ul class="wallpi-breadcrumb list-unstyled">
            <li><a href="{{ route('user.home') }}">Home</a></li>
            <li><span>Our Team</span></li>
        </ul>
        <h2 class="page-header__title">Our Team</h2>
    </div>
</section>

<section class="team-one team-one--page">
    <div class="container">
        <div class="row gutter-y-30">
            @foreach ($team as $team)
            <div class="col-md-6 col-lg-4">
                <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="team-card__image">
                        <img src="backend/images/team/{{ $team->image }}" alt="Martin Kellis">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="icon-add"></i>
                                <div class="team-card__social__list">
                                    <a href="https://linkedin.com/in/{{ $team->linkedin }}">
                                        <i class="fab fa-linkedin-in"></i>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://twitter.com/{{ $team->twitter }}">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://facebook.com/{{ $team->facebook }}">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://instagram.com/{{ $team->insta }}">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-card__content">
                        <h4 class="team-card__title">
                            <a href="team-details.html">{{ $team->fullname }}</a>
                        </h4>
                        <span class="team-card__designation">{{ $team->designation }}</span><!-- /.team-card__designation -->
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="consultation-one consultation-one--page">
    <div class="consultation-one__bg" style="background-image: url('assets/images/shapes/consultation-shape1-1.png');"></div>
    <div class="container-fluid consultation-one__wrap">
        <div class="row consultation-one__row">
            <div class="consultation-one__colimg">
                <div class="consultation-one__colimg__image">
                    <div class="consultation-one__colimg__image__mainimg">
                        <img src="assets/images/backgrounds/hero-image1-1.jpg" alt="wallpi">
                    </div>

                    <div class="consultation-one__colimg__image__circlemediam">
                        <img src="assets/images/resources/consultation-img1-1.jpg" alt="wallpi">
                    </div>
                </div>
            </div>

            <div class="consultation-one__contentwrap">
                <div class="consultation-one__contentwrap__bg" style="background-image: url('assets/images/backgrounds/consultation-bg1-1.png');"></div>
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

<section class="feature-two feature-two--page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-wall"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Effective</h4>
                    <p class="feature-two__text">For high-quality colour printing at an affordable price, we are the</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-paint"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Careful</h4>
                    <p class="feature-two__text">For high-quality colour printing at an affordable price, we are the</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-two__innercol text-center">
                    <div class="feature-two__icon">
                        <i class="icon-advantages"></i>
                    </div>
                    <h4 class="feature-two__title">We’re Flexible</h4>
                    <p class="feature-two__text">For high-quality colour printing at an affordable price, we are the</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.feature-one -->

<section class="quick-support quick-support--page">
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
