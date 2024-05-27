<footer class="main-footer background-black-3">
    <div class="main-footer__bg background-black-3"
        style="background-image: url({{ url('frontend/images/backgrounds/footer-bg1-1.jpg') }});"></div>
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="footer-widget__col footer-widget__col--about">
                    <div class="footer-widget__col__content">
                        <a href="#" class="footer-widget__col__content__logo">
                            <img src="{{ url('frontend/images/logo-light.png') }}" width="170" alt="Book for Fix">
                        </a>
                        <p class="footer-widget__col__content__text">Book for Fix is your go-to destination for all your home maintenance needs.</p>
                        <ul class="list-unstyled footer-widget__col__content__links">
                            <li><a href="{{ url('/contact') }}">Get a Quote</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-widget__col footer-widget__col--links">
                    <div class="footer-widget__col__content">
                        <h5 class="footer-widget__col__content__title">About Company</h5>
                        <ul class="list-unstyled footer-widget__col__content__links">
                            <li><a href="#">About us</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            <li><a href="#">Company History</a></li>
                            <li><a href="#">Vision and Mission</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Company Partners</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-widget__col footer-widget__col--post">
                    <div class="footer-widget__col__content">
                        <h5 class="footer-widget__col__content__title">Instant Services</h5>
                        <ul class="list-unstyled footer-widget__col__content__links">
                            <li><a href="#">AC Repair & Service</a></li>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">Plumbing</a></li>
                            <li><a href="#">Carpentry</a></li>
                            <li><a href="#">Painting</a></li>
                            <li><a href="#">Handyman</a></li>
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Cleaning</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-widget__col footer-widget__col--news">
                    <div class="footer-widget__col__content">
                        <h5 class="footer-widget__col__content__title">Newsletter</h5>
                    </div>
                    <form action="#" data-url="#"
                        class="footer-widget__col__content__newsletter mc-form">
                        <div class="footer-widget__col__content__inpfield">
                            <input type="email" name="email" placeholder="Email Address">
                        </div>
                        <button type="submit">Subscribe</button>
                    </form>
                    <div class="mc-form__response"></div>
                    <p class="footer-widget__col__subscribe">
                        Subscribe to our newsletter for the latest updates and news. We send newsletter only once in a month.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner d-flex align-items-center justify-content-between">
                <p class="main-footer__copyright"> &copy; <span class="dynamic-year"></span> All Rights Reserved | Developed by Muhammad Jamil</p>
                <div class="main-footer__social">
                    <span class="main-footer__socialtext">Social</span>
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
            </div>
        </div>
    </div>
</footer>
</div>
<!-- Mobile Nav Wrapper Start -->
<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
    <div class="logo-box">
        <a href="#" aria-label="logo image"><img src="{{ url('frontend/images/logo-light.png') }}" width="155" alt="Book for Fix" /></a>
    </div>
    <div class="mobile-nav__container"></div>
    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fas fa-phone-alt"></i>
            <a href="mailto:info@bookforfix.com">info@bookforfix.com</a>
        </li>
        <li>
            <i class="icon-chat"></i>
            <a href="tel:+971585861272">+971 58 586 1272</a>
        </li>
    </ul>
    <div class="mobile-nav__social">
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
</div>
</div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
<span class="scroll-to-top__text">back top</span>
<span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span></a>

<script src="{{ url('frontend/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ url('frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('frontend/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ url('frontend/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ url('frontend/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ url('frontend/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ url('frontend/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ url('frontend/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('frontend/vendors/wow/wow.js') }}"></script>
<script src="{{ url('frontend/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ url('frontend/vendors/isotope/isotope.js') }}"></script>
<script src="{{ url('frontend/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ url('frontend/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ url('frontend/js/wallpi.js') }}"></script>

</body>

</html>
