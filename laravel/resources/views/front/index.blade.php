@extends('front.layouts.master')
 @section('content')
  <!-- Start Theme Style  -->
  <div>
    <div class="rn-gradient-circle"></div>
    <div class="rn-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->



<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Slider Area  -->
<div class="rwt-testimonial-area  slider-style-4  slider-activation slider-dot rn-slick-dot rn-slick-arrow">
    @foreach ($slideshow as $item)
    <div class="single-rn-slider slider-bg-image bg-overlay bg_image height-950 d-flex align-items-center" style="background-image: url({{$item->pic}})">
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7">
                    <div class="inner text-left">
                        <h1 class="title">{{$item->name}}</h1>
                        <p class="description">{{$item->tozih}}</p>
                        <div class="button-group mt--30"><a class="btn-default" target="_blank" href="{{$item->link}}">اطلاعات بیشتر </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- End Slider Area  -->


<!-- Start Service-7 Area  -->
<div class="rn-service-area rn-section-gap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle ">
                        <span class="theme-gradient">چه کاری میتونیم براتون انجام بدیم</span>
                    </h4>
                  
                </div>
            </div>
        </div>
        <div class="row row--15 service-wrapper">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                <div class="service gallery-style text-left">
                    <div class="inner">
                        <div class="content">
                            <h4 class="title">
                                <a href="#">طراحی جایزه </a>
                            </h4>
                            <p class="description">تنوع بسیاری دارد.</p>
                        </div>
                        <div class="image">
                            <img src="/front/assets/images/services/galery-image-01.png" alt="card Images">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                <div class="service gallery-style text-left">
                    <div class="inner">
                        <div class="content">
                            <h4 class="title">
                                <a href="#">طراحی جایزه </a>
                            </h4>
                            <p class="description">تنوع بسیاری دارد.</p>
                        </div>
                        <div class="image">
                            <img src="/front/assets/images/services/galery-image-01.png" alt="card Images">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="service gallery-style text-left">
                    <div class="inner">
                        <div class="content">
                            <h4 class="title">
                                <a href="#">طراحی خلاق</a>
                            </h4>
                            <p class="description">تنوع بسیاری دارد.</p>
                        </div>
                        <div class="image">
                            <img src="/front/assets/images/services/galery-image-02.png" alt="card Images">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="service gallery-style text-left">
                    <div class="inner">
                        <div class="content">
                            <h4 class="title">
                                <a href="#">توسعه اپ </a>
                            </h4>
                            <p class="description">تنوع بسیاری دارد.</p>
                        </div>
                        <div class="image">
                            <img src="/front/assets/images/services/galery-image-03.png" alt="card Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service-7 Area  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Portfolio Area  -->
<div class="rwt-portfolio-area rn-section-gap masonary-wrapper-activation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">چرا ما را انتخاب کنید</span></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="rwt-portfolio-filter filter-button-default messonry-button text-center mb--30">
                    <button data-filter="*" class="is-checked"><span class="filter-text">همه </span></button>
                    <button data-filter=".cat--1"><span class="filter-text">طراحی </span></button>
                    <button data-filter=".cat--2"><span class="filter-text">هنری </span></button>
                    <button data-filter=".cat--3"><span class="filter-text">دیجیتال </span></button>
                    <button data-filter=".cat--4"><span class="filter-text">توسعه وب </span></button>
                </div>

                <div class="portfolio-items grid-metro3 mesonry-list">
                    <div class="resizer"></div>
                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--1 cat--4">
                        <div class="rwt-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <div class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="/front/assets/images/portfolio/portfolio-01.jpg" alt="Portfolio-01">
                                        </a>
                                    </div>
                                    <a class="rwt-overlay" href="portfolio-details.html"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title mb--10">
                                        <a href="portfolio-details.html">توسعه اپ </a>
                                    </h5>
                                    <span class="subtitle b2">توسعه دهنده </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Portfolio  -->

                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--2 cat--3">
                        <div class="rwt-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <div class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="/front/assets/images/portfolio/portfolio-02.jpg" alt="Portfolio-01">
                                        </a>
                                    </div>
                                    <a class="rwt-overlay" href="portfolio-details.html"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title mb--10">
                                        <a href="portfolio-details.html">توسعه شرکت </a>
                                    </h5>
                                    <span class="subtitle b2">طراحی </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Portfolio  -->

                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--3 cat--4 cat--1">
                        <div class="rwt-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <div class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="/front/assets/images/portfolio/portfolio-03.jpg" alt="Portfolio-01">
                                        </a>
                                    </div>
                                    <a class="rwt-overlay" href="portfolio-details.html"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title mb--10">
                                        <a href="portfolio-details.html">طراحی فتوشاپ</a>
                                    </h5>
                                    <span class="subtitle b2">هنر </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Portfolio  -->

                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--3 cat--2">
                        <div class="rwt-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <div class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="/front/assets/images/portfolio/portfolio-04.jpg" alt="Portfolio-01">
                                        </a>
                                    </div>
                                    <a class="rwt-overlay" href="portfolio-details.html"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title mb--10">
                                        <a href="portfolio-details.html">اپلیکیشن نتیو </a>
                                    </h5>
                                    <span class="subtitle b2">توسعه دهنده </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Portfolio  -->

                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--2 cat--4">
                        <div class="rwt-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <div class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="/front/assets/images/portfolio/portfolio-05.jpg" alt="Portfolio-01">
                                        </a>
                                    </div>
                                    <a class="rwt-overlay" href="portfolio-details.html"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title mb--10">
                                        <a href="portfolio-details.html">توسعه ری اکت </a>
                                    </h5>
                                    <span class="subtitle b2">اپلیکیشن </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Portfolio  -->

                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--3 cat--2 cat--1">
                        <div class="rwt-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <div class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="/front/assets/images/portfolio/portfolio-06.jpg" alt="Portfolio-01">
                                        </a>
                                    </div>
                                    <a class="rwt-overlay" href="portfolio-details.html"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title mb--10">
                                        <a href="portfolio-details.html">نصب اپلیکیشن </a>
                                    </h5>
                                    <span class="subtitle b2">فتوشاپ </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Portfolio  -->
                </div>
            </div>
        </div>

        <!-- Start Load More Button  -->
        <div class="row row--15">
            <div class="col-lg-12">
                <div class="rwt-load-more text-center mt--60">
                    <a href="portfolio.html" class="btn btn-default btn-large btn-icon">
                        <span>مطالب بیشتر <span class="icon feather-loader"></span></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Load More Button  -->

    </div>
</div>
<!-- End Portfolio Area  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start progress style-large  -->
<div class="rwt-progressbar-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle ">
                        <span class="theme-gradient">تخصص ما.</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mt--40">
            <div class="col-lg-12">
                <div class="row row--30 mt_dec--30">
                    <!-- Start Single Progress Bar  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="radial-progress-single">
                            <div class="radial-progress" data-percent="80" data-bar-color="#059DFF" data-track-color="#0f0f11">
                                <div class="circle-text">
                                    <span class="count">80</span>
                                </div>
                            </div>
                            <div class="circle-info">
                                <h4 class="title">طراحی </h4>
                                <h6 class="subtitle">ارائه مهارت </h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Progress Bar  -->

                    <!-- Start Single Progress Bar  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="radial-progress-single">
                            <div class="radial-progress" data-percent="60" data-bar-color="#059DFF" data-track-color="#0f0f11">
                                <div class="circle-text">
                                    <span class="count">60</span>
                                </div>
                            </div>
                            <div class="circle-info">
                                <h4 class="title">فتوشاپ </h4>
                                <h6 class="subtitle">ارائه مهارت </h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Progress Bar  -->

                    <!-- Start Single Progress Bar  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="radial-progress-single">
                            <div class="radial-progress" data-percent="70" data-bar-color="#059DFF" data-track-color="#0f0f11">
                                <div class="circle-text">
                                    <span class="count">70</span>
                                </div>
                            </div>
                            <div class="circle-info">
                                <h4 class="title">اپلیکیشن </h4>
                                <h6 class="subtitle">ارائه مهارت </h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Progress Bar  -->

                    <!-- Start Single Progress Bar  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="radial-progress-single">
                            <div class="radial-progress" data-percent="95" data-bar-color="#059DFF" data-track-color="#0f0f11">
                                <div class="circle-text">
                                    <span class="count">95</span>
                                </div>
                            </div>
                            <div class="circle-info">
                                <h4 class="title">توسعه </h4>
                                <h6 class="subtitle">ارائه مهارت </h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Progress Bar  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End progress style-large  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Testimonial Style Two  -->
<div class="rwt-testimonial-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">نظرات مشتریان</span></h4>
                </div>
            </div>
        </div>
        <div class="row row--15">

            <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
                <div class="rn-box-card card-style-default testimonial-style-one style-two">
                    <div class="inner">
                        <div class="thumbnail"><img src="/front/assets/images/testimonial/testimonial-01.jpg" alt="Corporate React Template"></div>
                        <div class="content">
                            <p class="description">“لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است  .„</p>
                            <h2 class="title">سر جانن سارا </h2>
                            <h6 class="subtitle theme-gradient">مدیر محصول جینر</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="rn-box-card card-style-default testimonial-style-one style-two">
                    <div class="inner">
                        <div class="thumbnail"><img src="/front/assets/images/testimonial/testimonial-02.jpg" alt="Corporate React Template"></div>
                        <div class="content">
                            <p class="description">“لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است  .„</p>
                            <h2 class="title">افسانه نیلا</h2>
                            <h6 class="subtitle theme-gradient">توسعه وب </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="rn-box-card card-style-default testimonial-style-one style-two">
                    <div class="inner">
                        <div class="thumbnail"><img src="/front/assets/images/testimonial/testimonial-03.jpg" alt="Corporate React Template"></div>
                        <div class="content">
                            <p class="description">“لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است  .„</p>
                            <h2 class="title">ناهید نوری</h2>
                            <h6 class="subtitle theme-gradient">مدیر حسابها</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Testimonial Style Two  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Blog Area  -->
<div class="blog-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">اخبار اخیر </span></h4>
                </div>
            </div>
        </div>
        <div class="row row--15">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
                <div class="rn-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail"><a class="image" href="blog-details.html"><img src="/front/assets/images/blog/blog-01.jpg" alt="Blog Image"></a></div>
                        <div class="content">
                            <ul class="rn-meta-list">
                                <li><a href="#"> ایرین پروین </a></li>
                                <li class="separator">/</li>
                                <li>1400-8-9</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">بهترین نکات شرکتی که امسال درباره دوب.</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="rn-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail"><a class="image" href="blog-details.html"><img src="/front/assets/images/blog/blog-02.jpg" alt="Blog Image"></a></div>
                        <div class="content">
                            <ul class="rn-meta-list">
                                <li><a href="#">جعفر عباسی</a></li>
                                <li class="separator">/</li>
                                <li>1400-8-9</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">آیا تعمیر شرکت باید 100 گام بردارد.</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="rn-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail">
                            <a class="image" href="blog-details.html"><img src="/front/assets/images/blog/blog-03.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="rn-meta-list">
                                <li><a href="#">جعفر خان عباسی </a></li>
                                <li class="separator">/</li>
                                <li>1400-8-9</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">100 کاری که باید فوراً درباره آنها انجام دهید.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area  -->
@endsection