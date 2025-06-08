<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title') | {{ config('app.name') }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Book for Fix offers comprehensive home maintenance and repair services in UAE. Our services include home renovation, painting, AC repairing, electrical, plumbing, carpentry, handyman services, and more. Contact us for reliable and efficient solutions.">
        <meta name="keywords" content="book for fix uae, home maintenance in Al Barsha 1, home maintenance in Al Barsha 1 Dubai, home repair in Al Barsha 1 Dubai, renovation in Al Barsha 1 Dubai, painting in Al Barsha 1 Dubai, AC repairing in Al Barsha 1 Dubai, coil cleaning in Al Barsha 1 Dubai, duct cleaning, electrical in Al Barsha 1 Dubai, plumbing in Al Barsha 1 Dubai, carpentry in Al Barsha 1 Dubai, handyman in Al Barsha 1 Dubai, water tank cleaning in Al Barsha 1 Dubai, pave yard cleaning in Al Barsha 1 Dubai, swimming pool maintenance in Al Barsha 1 Dubai, Book for Fix">
        <meta name="author" content="Book for Fix">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="7 days">
        <meta name="distribution" content="global">
        <meta name="rating" content="general">
        <meta name="googlebot" content="index, follow">
        <meta name="bingbot" content="index, follow">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Book for Fix - Home Maintenance & Repair Services in UAE">
        <meta property="og:description" content="Book for Fix offers comprehensive home maintenance and repair services in UAE. Our services include home renovation, painting, AC repairing, electrical, plumbing, carpentry, handyman services, and more. Contact us for reliable and efficient solutions.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.bookforfix.com/">
        <meta property="og:image" content="https://www.bookforfix.com/image/logo.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:locale" content="en_US">
        <meta property="og:site_name" content="Book for Fix">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('frontend/images/favicons/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('frontend/images/favicons/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('frontend/images/favicons/favicon-16x16.png') }}" />
        <link rel="manifest" href="{{ url('frontend/images/favicons/site.webmanifest') }}" />

        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('frontend/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/animate/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/jarallax/jarallax.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/nouislider/nouislider.pips.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/tiny-slider/tiny-slider.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/wallpi-icons/style.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/css/wallpi.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />
    </head>
    <body class="custom-cursor">
        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>
        <div class="preloader">
            <div class="preloader__image" style="background-image: url({{ url('frontend/images/loader.png') }});"></div>
        </div>
        <div class="page-wrapper">
            <div class="topbar-one topbar-one--three">
                <div class="container-fluid">
                    <div class="topbar-one__inner">
                        <ul class="list-unstyled topbar-one__info">
                            <li class="topbar-one__info__item">
                                <i class="icon-globe topbar-one__info__icon"></i>
                                <a href="https://www.google.com/maps/place/The+Iridium+Building/@25.1186337,55.2072461,15z/data=!4m6!3m5!1s0x3e5f6bc1af8e1daf:0x6388c09f82918589!8m2!3d25.1186337!4d55.2072461!16s%2Fg%2F11cs6c9zdr?entry=ttu" target="_blank">Iridium Building, Al Barsha 1, Dubai, UAE</a>
                            </li>
                            <li class="topbar-one__info__item">
                                <i class="icon-chat topbar-one__info__icon"></i>
                                <a href="mailto:info@bookforfix.com">info@bookforfix.com</a>
                            </li>
                            <li class="topbar-one__info__item">
                                <i class="icon-clock topbar-one__info__icon topbar-one__info__icon--size"></i>
                                Mon - Fri 9.00 - 17.00
                            </li>
                        </ul>
                        <div class="topbar-one__right">
                            <div class="topbar-one__social">
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
                            </div>
                            <div class="topbar-one__quick_support">
                                <p class="topbar-one__quick_call">
                                    <i class="icon-phone-call"></i>
                                    <span> Free Consultation </span>
                                    <a href="tel:+971585861272">+971 58 586 1272</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="main-header main-header--three sticky-header sticky-header--normal">
                <div class="container-fluid">
                    <div class="main-header__inner">
                        <div class="main-header__logo">
                            <a href="{{ url('/') }}">
                                <img class="logo-image" src="{{ url('frontend/images/logo.png') }}" height="80px" alt="Book for Fix">
                            </a>
                        </div>
                            <nav class="main-header__nav main-menu">
                                <ul class="main-menu__list">
                                    <li>
                                        <a class="active href="{{ route('user.home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.about') }}">About</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="{{ route('user.service.ac') }}">AC Repair & Service</a></li>
                                            <li><a href="#">Coil Cleaning</a></li>
                                            <li><a href="#">Duct Cleaning</a></li>
                                            <li><a href="#">Electrical</a></li>
                                            <li><a href="#">Plumbing</a></li>
                                            <li><a href="#">Painting</a></li>
                                            <li><a href="#">Carpentry</a></li>
                                            <li><a href="#">Handyman</a></li>
                                            <li><a href="#">Water Tank Cleaning</a></li>
                                            <li><a href="#">Pave Yard Cleaning</a></li>
                                            <li><a href="#">Swimming Pool Maintenance</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Packages</a>
                                        <ul>
                                            <li><a href="{{ route('user.mainternace') }}">Maintenance</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Maintenance</a>
                                        <ul>
                                            <li><a href="#">Annual Maintenance</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Renovation</a>
                                        <ul>
                                            <li><a href="#">Home Renovation</a></li>
                                            <li><a href="#">Kitchen Renovation</a></li>
                                            <li><a href="#">Bathroom Renovation</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('user.testimonial') }}">Testimonials</a></li>
                                    <li><a href="{{ route('user.contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        <div class="main-header__right">
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a href="{{ route('user.contact') }}" class="wallpi-btn main-header__btn">
                                <span>Get a Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
