@extends('layouts.welcome')

@section('slider_or_banner')
    @include('frontend.includes.banner',['header_1'=>'Contact','header_2'=>'Contact','imgBanner'=>'assets/images/backgrounds/contact-us.jpeg'])
@endsection

@section('content')
       <!--Google Map Start-->
       <section class="google-map-two">
        <div class="container-fluid">
            <div class="google-map-two__box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.480959759234!2d7.435303065647842!3d9.066738431343733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b2b04b38daf%3A0x95497a76106074bd!2sb11%2C%2026%20A.E.%20Ekukinam%20St%2C%20Utako%20900108%2C%20Abuja%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1697760519665!5m2!1sen!2sng"
                    class="google-map-two__map" allowfullscreen></iframe>

                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.480959759234!2d7.435303065647842!3d9.066738431343733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b2b04b38daf%3A0x95497a76106074bd!2sb11%2C%2026%20A.E.%20Ekukinam%20St%2C%20Utako%20900108%2C%20Abuja%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1697760519665!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
            <div class="google-map-two__bottom">
                <ul class="google-map-two__bottom-list list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="fas fa-envelope-open"></span>
                        </div>
                        <div class="content">
                            <p><a href="mailto:needhelp@company.com">rejuvenator08@gmail.com</a></p>
                            <p><a href="mailto:info@company.com">info@rejuvenator.org</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-phone"></span>
                        </div>
                        <div class="content">
                            <p><a href="tel:08035082149">08035082149</a></p>
                            <p><a href="tel:07062990717">07062990717</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-map"></span>
                        </div>
                        <div class="content">
                            <p>Real Tower Center, No. 26 A E Ekukinam Street, <br> Utako Abuja, Suit b11 (4)</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Google Map End-->

    <!--Contact One Start-->
    <section class="contact-page-form">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Contact With us</span>
                <h2 class="section-title__title">Leave a Message</h2>
            </div>
            <form action="#" class="contact-page-form__form-box contact-form-validated"
                novalidate="novalidate">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-page-form__input-box">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-page-form__input-box">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-page-form__input-box">
                            <input type="text" placeholder="Phone" name="Phone">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-page-form__input-box">
                            <input type="text" placeholder="Subject" name="Subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page-form__input-box text-message-box">
                            <textarea name="message" placeholder="Write a Message"></textarea>
                        </div>
                        <div class="contact-page-form__btn-box">
                            <button type="button" class="thm-btn contact-page-form__btn">Send a message</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </section>
    <!--Contact One End-->
@endsection