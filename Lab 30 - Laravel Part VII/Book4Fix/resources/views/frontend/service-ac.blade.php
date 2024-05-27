@extends('frontend.layouts.main')
@section('title', 'AC Services')
@section('main-container')
<section class="page-header @@ExtraClass">
    <div class="page-header__bg" style="background-image: url('{{ url('frontend/images/backgrounds/hero-image2-1.jpg') }}');"></div>
    <div class="container">
        <ul class="wallpi-breadcrumb list-unstyled">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><span>Services</span></li>
        </ul>
        <h2 class="page-header__title">Services Carousel</h2>
    </div>
</section>

<section class="service-one service-one--three service-one--page2">
    <div class="container">
        <div class="service-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
            "items": 1,
            "margin": 0,
            "loop": false,
            "smartSpeed": 700,
            "nav": false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "dots": true,
            "autoplay": false,
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2,
                    "margin": 30
                },
                "1200": {
                    "items": 3,
                    "margin": 30
                }
            }
        }'>
            <div class="item">
                <div class="service-one__item wow fadeInUp" data-wow-delay="00ms">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/resources/services3-1.jpg') }}" alt="Book for Fix">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="services-wall-painting.html">Wall Paintings</a>
                            </h4>
                            <a class="sercives-arrow-right" href="services-wall-painting.html"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>

                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Explore our print solutions & services</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-one__item wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/resources/services3-2.jpg') }}" alt="Book for Fix">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="services-room-wallpaper.html">Room Wallpapers</a>
                            </h4>
                            <a class="sercives-arrow-right" href="services-room-wallpaper.html"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>

                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Explore our print solutions & services</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="service-one__item wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/resources/services3-3.jpg') }}" alt="services">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="services-wall-sheets.html">Wall Sheets</a>
                            </h4>
                            <a class="sercives-arrow-right" href="services-wall-sheets.html"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>

                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Explore our print solutions & services</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-one__item wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/resources/services3-4.jpg') }}" alt="Book for Fix">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="services-interior-design.html">Interior Designing</a>
                            </h4>
                            <a class="sercives-arrow-right" href="services-interior-design.html"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>

                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Explore our print solutions & services</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-one__item wow fadeInUp" data-wow-delay="400ms">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/resources/services3-5.jpg') }}" alt="services">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="services-room-wallpaper.html">PVc Wallpaper</a>
                            </h4>
                            <a class="sercives-arrow-right" href="services-room-wallpaper.html"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>

                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Explore our print solutions & services</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-one__item wow fadeInUp" data-wow-delay="500ms">
                    <div class="service-one__item__image">
                        <img src="{{ url('frontend/images/resources/services3-6.jpg') }}" alt="Book for Fix">
                        <div class="service-one__item__titlewrap d-flex align-items-center justify-content-between">
                            <h4 class="service-one__item__title">
                                <a href="services-canvas-printing.html">Indoor Posters</a>
                            </h4>
                            <a class="sercives-arrow-right" href="services-canvas-printing.html"><i class="icon-arrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="service-one__item__info">
                        <p class="service-one__item__text">Explore our print solutions & services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
