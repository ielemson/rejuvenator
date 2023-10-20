@extends('layouts.welcome')

@section('slider_or_banner')
@include('frontend.includes.banner',['header_1'=>'About Us','header_2'=>'About Us','imgBanner'=>'assets/images/backgrounds/about-us.jpeg'])
@endsection


@section('content')
   <!--About Three Start-->
   <section class="about-three">
    <div class="about-three__shape-1 float-bob-x">
        <img src="assets/images/shapes/about-three-shape-1.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">About us</span>
                        <h2 class="section-title__title">The Rejuvenator</h2>
                    </div>
                    <p class="about-three__text"> 
                        The Rejuvenator Initiatives International is a non-governmental, nonprot, and 
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
            <div class="col-xl-6">
                <div class="about-three__right">
                    <div class="about-three__img">
                        <img src="assets/images/backgrounds/about-us.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->

@endsection