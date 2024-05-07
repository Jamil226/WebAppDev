@extends('frontend.layouts.main')
@section('title', 'Contact Us')
@section('main-container')

<section class="page-header contact-page">
    <div class="page-header__bg" style="background-image: url('{{url('frontend/images/contact/contact-banner.jpeg')}}');"></div>
    <div class="container">
        <ul class="wallpi-breadcrumb list-unstyled">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><span>Contact Us</span></li>
        </ul>
        <h2 class="page-header__title">Contact</h2>
    </div>
</section>
<section class="address-one">
    <div class="container">
        <div class="row">
            <div class="sec-title">
                <h2 class="sec-title__title">Please Don't Hesitate To Contact <br> Us With Any Inquiries</h2>
                <p class="sec-title__text">You can also reach out to us by phone or email are many variations</p>
            </div>
            <div class="address-one__wrap text-center"style="background-color: rgb(39, 39, 39);">
                <div class="row gutter-y-20" style="color:white">
                    <div class="col-md-4 address-one__colwrap">
                        <div class="address-one__col">
                            <span class="address-one__icon icon-map"></span>
                            <h4 class="address-one__title" style="color:white">Our Office</h4>
                            <p class="address-one__location" style="color:white">Iridium Building, Al Barsha 1,<br> Dubai, UAE</p>
                        </div>
                    </div>
                    <div class="col-md-4 address-one__colwrap">
                        <div class="address-one__col">
                            <span class="address-one__icon icon-phoned"></span>
                            <h4 class="address-one__title" style="color:white">Get In Touch</h4>
                            <ul class="list-unstyled address-one__list">
                                <li><a href="tel:+971585861272" style="color:white">+971 58 586 1272</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 address-one__colwrap">
                        <div class="address-one__col">
                            <span class="address-one__icon icon-email1"></span>
                            <h4 class="address-one__title" style="color:white">Email Address</h4>
                            <ul class="list-unstyled address-one__list">
                                <li><a href="mailto:info@bookforfix.com" style="color:white">info@bookforfix.com</a></li>
                                <li><a href="mailto:support@bookforfix.com" style="color:white">support@bookforfix.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-one">
    <div class="container">
        <div class="contact-one__inner">
            <div class="row">
                <div class="col-sm-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                            <strong>
                                <h1 style="color:#ffffff">{{$message}}</h1>
                            </strong>
                        </div>
                    @endif
                    <form class="contact-one__form form-one fadeInUp" method="post" action="{{ url('/contact') }}">
                        @csrf
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" placeholder="Your name" name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{$errors->first('name')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        {{$errors->first('email')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-one__control">
                                <input type="text" name="phone" placeholder="Phone" value="{{old('phone')}}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">
                                        {{$errors->first('phone')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-one__control">
                                <input type="text" name="subject" placeholder="Subject" value="{{old('subject')}}">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">
                                        {{$errors->first('subject')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Your Message here" value="{{old('message')}}"></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">
                                        {{$errors->first('message')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="wallpi-btn wallpi-btn--submit" name="submit"><span>Send A Message</span></button>
                            </div>
                        </div>

                    </form>

                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-map">
    <div class="container-fluid">
        <div class="google-map google-map__contact">
            <iframe title="Find us on Google Map" class="map__contact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14450.017466603133!2d55.2072461!3d25.1186337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6bc1af8e1daf%3A0x6388c09f82918589!2sThe%20Iridium%20Building!5e0!3m2!1sen!2s!4v1710735731751!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection
