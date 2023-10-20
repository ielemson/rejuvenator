  <!--Page Header Start-->
  <section class="page-header">
    <div class="page-header-bg" style="background-image: url({{$imgBanner ?? ''}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>/</span></li>
                <li>{{$header_1  ?? ''}}</li>
            </ul>
            <h2>{{$header_2 ?? ''}}</h2>
        </div>
    </div>
</section>
<!--Page Header End-->