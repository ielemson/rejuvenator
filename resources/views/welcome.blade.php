@extends('layouts.welcome')


@section('slider_or_banner')
    @include('frontend.includes.slider')
@endsection

@section('content')
  <!--About Three Start-->
  <section class="about-three">
    <div class="about-three__shape-1 float-bob-x">
        {{-- <img src="assets/images/shapes/about-three-shape-1.png" alt=""> --}}
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">About Us</span>
                        <h2 class="section-title__title">The Rejuvenator</h2>
                    </div>
                    <p class="about-three__text">
                        The Rejuvenator Initiatives International is a non-governmental, nonprofit, and 
                        nonpolitical organization dedicated to discovering, developing, and mentoring 
                        the potential of young people for peak performance and professional 
                        development. We were established in 2008 and initially registered with the 
                        Municipal Council of Owerri. In 2020, we expanded our reach and obtained 
                        national registration with the Corporate Affairs Commission. <br>
                        Our focus areas include promoting transformational education, talent discovery 
                        and development, leadership formation, counseling, and skill acquisition. Our 
                        primary beneficiaries are young people, while teachers and parents are 
                        secondary beneficiaries of our programs.
                        
                    </p>
                    
                   
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-three__right">
                    <div class="about-three__img">
                        <img src="assets/images/resources/who-we-are.jpeg" alt="who we are">
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
                            <img src="assets/images/resources/our-values.jpeg" alt="">
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

   <!--Project undertaken -->
   <section class="about-four">
    <div class="about-three__shape-1 float-bob-x">
        {{-- <img src="assets/images/shapes/about-three-shape-1.png" alt=""> --}}
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        {{-- <span class="section-title__tagline">Project Undertaken</span> --}}
                        <h2 class="section-title__title">Project Undertaken</h2>
                    </div>
                    <ul class="about-two__points-list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="content">
                                <h3>The Future Map</h3>
                                <p>
                                    This conference prototype orientation and mentoring program targets 
                                    secondary school graduates, students, undergraduates, job seekers, and unemployed 
                                    graduates. Through this initiative, we guide, plan, and harness the visions of our beneciaries 
                                    using technology and modern information dissemination methods. We organize workshops, 
                                    trainings, and impact-driven programs to steer young people towards their educational goals. 
                                    For those not pursuing higher education, we equip them with vocational skills to become valuable 
                                    members of society. To date, we have impacted over 780 youths and reached out to 23 schools 
                                    and youth organizations.

                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="content">
                                <h3>Loving the Real Me</h3>
                                <p>This interactive program for teenagers addresses the relationship 
                                    between love and self-development. It aims to expose teenagers in secondary schools to the 
                                    proper meaning of love, helping them avoid emotional distractions that can hinder the pursuit of
                                    their life dreams. The program has had ve editions and has impacted over 2000 students</p>
                            </div>
                        </li>
                    </ul>
                    
                   
                </div>
            </div>
            {{-- <div class="col-xl-4">
                <div class="about-three__right">
                    <div class="about-three__img">
                        <img src="assets/images/resources/who-we-are.jpeg" alt="who we are">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--Project UnderTaken Ends-->


  <!--About Three Start-->
  <section class="about-three">
    <div class="about-three__shape-1 float-bob-x">
        {{-- <img src="assets/images/shapes/about-three-shape-1.png" alt=""> --}}
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        {{-- <span class="section-title__tagline">Our Corperate Partners</span> --}}
                        <h2 class="section-title__title">Our Corperate Partners</h2>
                    </div>
                    <div class="about-one__text-box">
                        <p class="about-one__text-2">
                            To enhance our efficiency and value in delivering our mandate, we have formed alliances 
                                with organizations such as
                        </p>
                    </div>
                    <ul class="about-one__points list-unstyled">
                        <li>
                            <div class="about-one__points-icon-box">
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Think Counseling Network and Human Development Initiatives Abuja.</p>
                                </div>
                            </div>
                        
                        </li>
                        <li>
                            <div class="about-one__points-icon-box">
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Gregory University Uturu Abia State.</p>
                                </div>
                            </div>
                           
                        </li>
                      
                    </ul>
                    <br>
                    <ul class="about-one__points list-unstyled">
                        <li>
                            <div class="about-one__points-icon-box">
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>The Futuremap Media Concepts Limited Abuja.</p>
                                </div>
                            </div>
                         
                        </li>
                        <li>
                            <div class="about-one__points-icon-box">
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>The Federal Ministry of Education, and others.</p>
                                </div>
                            </div>
                         
                        </li>
                      
                    </ul>
                    
                   
                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-three__right">
                    <div class="about-three__img">
                        <img src="assets/images/resources/partners.jpeg" alt="our partner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->






@endsection