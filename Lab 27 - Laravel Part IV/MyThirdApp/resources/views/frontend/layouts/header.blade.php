<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | Book for Fix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url("frontend/images/favicons/apple-touch-icon.png")}}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url("frontend/images/favicons/favicon-32x32.png")}}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url("frontend/images/favicons/favicon-16x16.png")}}"/>
    <link rel="manifest" href="{{ url("frontend/images/favicons/site.webmanifest")}}"/>
    <meta name="description" content="Wallpi is a modern HTML Template for Interior Designing, Wallpaper, Home Wallpaper, Wall Paintings, Room Wallpapers, Printing & Digital Foiling. The template perfectly fits Interior Designing, Room Wallpapers, and Foiling Treatments businesses." />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url("frontend/vendors/bootstrap/css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/bootstrap-select/bootstrap-select.min.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/animate/animate.min.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/fontawesome/css/all.min.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/jquery-ui/jquery-ui.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/jarallax/jarallax.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/nouislider/nouislider.min.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/nouislider/nouislider.pips.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/tiny-slider/tiny-slider.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/wallpi-icons/style.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/owl-carousel/css/owl.carousel.min.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/vendors/owl-carousel/css/owl.theme.default.min.css")}}"/>
    <link rel="stylesheet" href="{{ url("frontend/css/wallpi.css")}}"/>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(frontend/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <div class="topbar-one__quick_support">
                        <p class="topbar-one__quick_call">
                            <i class="icon-phone-call"></i>
                            <span> Quick Support for call </span>
                            <a href="tel:+8805002451"> +88 05 00 24 51 </a>
                        </p>
                    </div>

                    <div class="topbar-one__right">
                        <ul class="list-unstyled topbar-one__info">
                            <li class="topbar-one__info__item">
                                <i class="icon-globe topbar-one__info__icon"></i>
                                <a href="contact.html">1/4 sector 5 San Francisco</a>
                            </li>
                            <li class="topbar-one__info__item">
                                <i class="icon-chat topbar-one__info__icon"></i>
                                <a href="mailto:Support@gmail.com">Support@gmail.com</a>
                            </li>
                        </ul><!-- /.list-unstyled topbar-one__info -->

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
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->

        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.html">
                            <img src="frontend/images/logo-light.png" alt="Wallpi HTML">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li class="dropdown megamenu">
                                <a href="index.html">Home</a>
                                <ul>
                                    <li>
                                        <section class="home-showcase">
                                            <div class="container">
                                                <div class="home-showcase__inner">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="frontend/images/home-showcase/home-showcase-1.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index.html" class="wallpi-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="index-one-page.html" class="wallpi-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index.html">Home Page 01</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="frontend/images/home-showcase/home-showcase-2.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index-2.html" class="wallpi-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="index-2-one-page.html" class="wallpi-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index-2.html">Home Page 02</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="frontend/images/home-showcase/home-showcase-3.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index-3.html" class="wallpi-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="index-3-one-page.html" class="wallpi-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index-3.html">Home Page 03</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="frontend/images/home-showcase/home-showcase-boxed.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index-boxed.html" class="wallpi-btn demo-one__btn">
                                                                            <span>View Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index-boxed.html">Home Boxed</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                    </div><!-- /.row -->

                                                </div><!-- /.home-showcase__inner -->
                                            </div><!-- /.container -->
                                        </section>
                                    </li>
                                </ul>
                            </li>



                            <li class="dropdown">
                                <a href="services.html">Services</a>
                                <ul>
                                    <li><a href="services-grid.html">Services Grid</a></li>
                                    <li><a href="services-carousel.html">Services Carousel</a></li>
                                    <li><a href="services2.html">Services 02</a></li>
                                    <li><a href="services2-carousel.html">Services Carousel 02</a></li>
                                    <li><a href="services-details.html">Services Details</a></li>
                                    <li><a href="services-room-wallpaper.html">Room Wallpaper</a></li>
                                    <li><a href="services-interior-design.html">Interior Design</a></li>
                                    <li><a href="services-wall-sheets.html">Wall Sheets</a></li>
                                    <li><a href="services-canvas-printing.html">Canvas Printing</a></li>
                                    <li> <a href="services-door-wallpaper.html">Door Wallpaper</a></li>
                                    <li><a href="services-wall-painting.html">Wall Painting</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li class="dropdown">
                                <a href="portfolio.html">Portfolio</a>
                                <ul>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="pricing-carousel.html">Pricing Carousel</a></li>
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="testimonial-carousel.html">Testimonial Carousel</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-carousel.html">Team Carousel</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-nosidebar.html">No sidebar</a></li>
                                            <li><a href="blog-grid-left.html">Blog Grit Left</a></li>
                                            <li><a href="blog-grid-right.html">Blog Grit Right</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-list.html">Blog List</a>
                                        <ul>
                                            <li><a href="blog-list-nosidebar.html">No sidebar</a></li>
                                            <li><a href="blog-list-left.html">Blog List Left</a></li>
                                            <li><a href="blog-list-right.html">Blog List Right</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                    <li><a href="blog-details.html">Blog Details</a>
                                        <ul>
                                            <li><a href="blog-details-nosidebar.html">No sidebar</a></li>
                                            <li><a href="blog-details-left.html">Blog Details Left</a></li>
                                            <li><a href="blog-details-right.html">Blog Details Right</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="products.html">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="products.html">Products</a>
                                        <ul>
                                            <li><a href="products-no-sidebar.html">No Sidebar Products</a></li>
                                            <li><a href="products-left.html">Products Left</a></li>
                                            <li><a href="products-right.html">Products Right</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="products-carousel.html">Products Carousel</a></li>
                                    <li><a href="product-details.html">Products Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <div class="main-header__search-cart-wrap d-flex align-items-center">
                            <a href="cart.html" class="main-header__cart">
                                <i class="icon-shop-bag"></i>
                                <span class="main-header__cart_count">0</span>
                                <span class="sr-only">Search</span>
                            </a><!-- /.search-toggler -->

                            <a href="#" class="search-toggler d-flex align-items-center">
                                <p class="main-header__keyword">Search</p>
                                <div class="main-header__search">
                                    <i class="icon-search-1" aria-hidden="true"></i>
                                    <span class="sr-only">Search</span>
                                </div>
                            </a><!-- /.search-toggler -->
                        </div>
                        <a href="contact.html" class="wallpi-btn main-header__btn">
                            <span>Request Book</span>
                        </a><!-- /.thm-btn main-header__btn -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
