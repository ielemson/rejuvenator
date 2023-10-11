@extends('layouts.welcome')

@section('content')
  <!--About Three Start-->
  <section class="about-three">
    <div class="about-three__shape-1 float-bob-x">
        {{-- <img src="assets/images/shapes/about-three-shape-1.png" alt=""> --}}
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">About Us</span>
                        <h2 class="section-title__title">The Rejuvenator Initiative Int'l</h2>
                    </div>
                    <p class="about-three__text">
                        The Rejuvenator Initiatives International is a non-governmental, nonprofit, and 
                        nonpolitical organization dedicated to discovering, developing, and mentoring 
                        the potential of young people for peak performance and professional 
                        development. We were established in 2008 and initially registered with the 
                        Municipal Council of Owerri. In 2020, we expanded our reach and obtained 
                        national registration with the Corporate Affairs Commission.
                        Our focus areas include promoting transformational education, talent discovery 
                        and development, leadership formation, counseling, and skill acquisition. Our 
                        primary beneciaries are young people, while teachers and parents are 
                        secondary beneciaries of our programs.
                        
                    </p>
                    
                   
                </div>
            </div>
            <div class="col-xl-4">
                <div class="about-three__right">
                    <div class="about-three__img">
                        <img src="assets/images/resources/about-three-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->

 <!--Vision & Mission Start-->
 <section class="faq-one">
    <div class="faq-one__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="faq-one__left">
                    <div class="faq-one__img-box">
                        <div class="faq-one__img">
                            <img src="assets/images/resources/faq-one-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="faq-one__right">
                    <div class="section-title text-left">
                        {{-- <span class="section-title__tagline">Frequently Asked Questions</span> --}}
                        <h2 class="section-title__title">Our Vission &amp; Mission</h2>
                    </div>
                    <div class="faq-one__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Our Vission</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Our vision is to become a global force in the formation and empowerment of young people, 
                                            enabling them to realize their full potential and become excellent citizens and leaders in their 
                                            societies.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Our Mission</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                     
                                            Our mission is threefold:
                                            <ul class="list-unstyled become-volunteer__points">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Educate, mentor, and nancially empower young people to fully realize their potential and 
                                                            become positive contributors to society.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Build and enhance the capacity of teachers, parents, and guardians to positively and 
                                                            effectively inuence the formation of young people.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Assist governments and communities in developing pragmatic, suitable, and effective 
                                                            policies for youth education and empowerment.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                       
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Vision & Mission One End-->

  

    <!--Fundraising One Start-->
    <section class="fundraising-one">
        <div class="fundraising-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/fundraising-one-bg-img.jpg);"></div>
        <div class="container">
            <div class="fundraising-one__inner">
                <p class="fundraising-one__sub-title">We’re here to support poor people</p>
                <h3 class="fundraising-one__title">Fundraising for the People and
                    <br> Causes you <span>Care</span> About
                </h3>
                <div class="fundraising-one__btn-box">
                    <a href="cause-details.html" class="fundraising-one__btn thm-btn">Start donating them</a>
                </div>
            </div>
        </div>
    </section>
    <!--Fundraising One End-->

 

  

    <!--Donate One Start-->
    <section class="donate-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="donate-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Help us Donate</span>
                            <h2 class="section-title__title">Start Donating</h2>
                        </div>
                        <div class="donate-one__shape-1 float-bob-x">
                            {{-- <img src="assets/images/shapes/donate-one-shape-1.png" alt=""> --}}
                        </div>
                        <form
                            class="contact-form-box__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-form-box__input-box">
                                        <input type="text" placeholder="Value" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-form-box__input-box">
                                        <input type="email" placeholder="Your Name" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="contact-form-box__input-box">
                                        <input type="text" placeholder="Email Address" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="contact-form-box__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                    </div>
                                    <div class="contact-form-box__btn-box">
                                        <button type="submit" class="thm-btn contact-form-box__btn">Send a
                                            message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="donate-one__right">
                        <div class="donate-one__img">
                            <img src="assets/images/resources/donate-one-img-1.jpg" alt="">
                        </div>
                        <ul class="donate-one__contact list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-envelope-open"></span>
                                </div>
                                <div class="content">
                                    <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    <p><a href="tel:8800761610">(+88) 00 76 16
                                            10</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-map"></span>
                                </div>
                                <div class="content">
                                    <p>Suite 80 Golden Street Line
                                        <br> New York, USA
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donate One End-->


@endsection