@extends('Admin.Layouts.master')
@section('content')
<!-- main-content opened -->
<div class="main-content horizontal-content">
    <!-- container opened -->
    <div class="container">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin">داشبورد</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/agent">/لیست نمایندگان</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/اطلاعات کامل نماینده</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="mb-3 mb-xl-0">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary">{{jdate()}}</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-4">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="pl-0">
                            <div class="main-profile-overview">
                                <div class="main-img-user profile-user">
                                    <img alt="" src="/admins/assets/img/faces/6.jpg"><a class="fas fa-camera profile-edit"
                                        href="JavaScript:void(0);"></a>
                                </div>
                                <div class="d-flex justify-content-between mg-b-20">
                                    <div>
                                        <h5 class="main-profile-name">پتی کروزر</h5>
                                        <p class="main-profile-name-text">طراح وب</p>
                                    </div>
                                </div>
                                <h6>بیوگرافی</h6>
                                <div class="main-profile-bio">
                                    لذت منطقی روبرو می شود ، اما به دنبال عواقبی است که بسیار دردناک است. عواقبی که در
                                    آن زحمت و درد می تواند لذت بزرگی برای او فراهم کند .. <a href="#">بیشتر</a>
                                </div><!-- main-profile-bio -->
                                <div class="row">
                                    <div class="col-md-4 col mb20">
                                        <h5>947</h5>
                                        <h6 class="text-small text-muted mb-0">پیروان</h6>
                                    </div>
                                    <div class="col-md-4 col mb20">
                                        <h5>583</h5>
                                        <h6 class="text-small text-muted mb-0">توییت ها</h6>
                                    </div>
                                    <div class="col-md-4 col mb20">
                                        <h5>48</h5>
                                        <h6 class="text-small text-muted mb-0">نوشته ها</h6>
                                    </div>
                                </div>
                                <hr class="mg-y-30">
                                <label class="main-content-label tx-13 mg-b-20">اجتماعی</label>
                                <div class="main-profile-social-list">
                                    <div class="media">
                                        <div class="media-icon bg-primary-transparent text-primary">
                                            <i class="icon ion-logo-github"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>Github </span> <a href="#">github.com/FT</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-success-transparent text-success">
                                            <i class="icon ion-logo-twitter"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>توییتر </span> <a href="#">twitter.com/FT.me</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-info-transparent text-info">
                                            <i class="icon ion-logo-linkedin"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>لینک </span> <a href="#">linkedin.com/in/FT</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-danger-transparent text-danger">
                                            <i class="icon ion-md-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>نمونه کارها من </span> <a href="#">FT.com/</a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mg-y-30">
                                <h6>مهارت ها</h6>
                                <div class="skill-bar mb-4 clearfix mt-3">
                                    <span>HTML5 / CSS3</span>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-primary-gradient" role="progressbar"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                        </div>
                                    </div>
                                </div>
                                <!--skill bar-->
                                <div class="skill-bar mb-4 clearfix">
                                    <span>جاوا اسکریپت</span>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger-gradient" role="progressbar"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 89%">
                                        </div>
                                    </div>
                                </div>
                                <!--skill bar-->
                                <div class="skill-bar mb-4 clearfix">
                                    <span>بوت استرپ</span>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-success-gradient" role="progressbar"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                                <!--skill bar-->
                                <div class="skill-bar clearfix">
                                    <span>قهوه</span>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                    </div>
                                </div>
                                <!--skill bar-->
                            </div><!-- main-profile-overview -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row row-sm">
                    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="counter-status d-flex md-mb-0">
                                    <div class="counter-icon bg-primary-transparent">
                                        <i class="icon-layers text-primary"></i>
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="tx-13">تعداد کل سفارشات</h5>
                                        <h2 class="mb-0 tx-22 mb-1 mt-1">1،587</h2>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="counter-status d-flex md-mb-0">
                                    <div class="counter-icon bg-danger-transparent">
                                        <i class="icon-paypal text-danger"></i>
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="tx-13">سفارشات تایید شده</h5>
                                        <h2 class="mb-0 tx-22 mb-1 mt-1">46،782</h2>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="counter-status d-flex md-mb-0">
                                    <div class="counter-icon bg-success-transparent">
                                        <i class="icon-rocket text-success"></i>
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="tx-13">سفارشات منتظر تایید</h5>
                                        <h2 class="mb-0 tx-22 mb-1 mt-1">1890</h2>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                                <li class="">
                                    <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i
                                                class="las la-user-circle tx-16 mr-1"></i></span> <span
                                            class="hidden-xs">لیست سفارشات  تایید شده</span> </a>
                                </li>
                                <li class="">
                                    <a href="#profile" data-toggle="tab" aria-expanded="false"> <span
                                            class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span
                                            class="hidden-xs">لیست سفارشات منتظر تایید</span> </a>
                                </li>
                                <li class="">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span
                                            class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span
                                            class="hidden-xs">لیست سفارشات جدید</span> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                            <div class="tab-pane active" id="home">
                                <h4 class="tx-15 text-uppercase mb-3">بیو گرافی</h4>
                                <p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                    کاربردی می باشد
                                </p>
                                <div class="m-t-30">
                                    <h4 class="tx-15 text-uppercase mt-3">تجربه</h4>
                                    <div class=" p-t-10">
                                        <h5 class="text-primary m-b-5 tx-14">طراح / توسعه دهنده سرب</h5>
                                        <p class="">websitename.com</p>
                                        <p><b>1395-1399</b></p>
                                        <p class="text-muted tx-13 m-b-0">لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و
                                            حروفچینی است. لورم ایپسوم از سال 1500 به بعد ، متن ساختگی استاندارد صنعت
                                            بوده است ، زمانی که چاپگر ناشناخته یک نوع آشپزخانه را انتخاب کرد و آنرا
                                            مخلوط کرد تا یک نمونه نمونه کتاب ایجاد کند.</p>
                                    </div>
                                    <hr>
                                    <div class="">
                                        <h5 class="text-primary m-b-5 tx-14">طراح ارشد گرافیک</h5>
                                        <p class="">coderthemes.com</p>
                                        <p><b>1393-1395</b></p>
                                        <p class="text-muted tx-13 mb-0">لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و
                                            حروفچینی است. لورم ایپسوم از سال 1500 به بعد ، متن ساختگی استاندارد صنعت
                                            بوده است ، زمانی که چاپگر ناشناخته یک نوع آشپزخانه را انتخاب کرد و آنرا
                                            مخلوط کرد تا یک نمونه نمونه کتاب ایجاد کند.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="border p-1 card thumb">
                                            <a href="#" class="image-popup" title="تصویر -2"> <img
                                                    src="/admins/assets/img/photos/7.jpg" class="thumb-img"
                                                    alt="کار-تصویر کوچک"> </a>
                                            <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                            <div class="ga-border"></div>
                                            <p class="text-muted text-center"><small>عکاسی</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class=" border p-1 card thumb">
                                            <a href="#" class="image-popup" title="تصویر -2"> <img
                                                    src="/admins/assets/img/photos/8.jpg" class="thumb-img"
                                                    alt="کار-تصویر کوچک"> </a>
                                            <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                            <div class="ga-border"></div>
                                            <p class="text-muted text-center"><small>عکاسی</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class=" border p-1 card thumb">
                                            <a href="#" class="image-popup" title="تصویر -2"> <img
                                                    src="/admins/assets/img/photos/9.jpg" class="thumb-img"
                                                    alt="کار-تصویر کوچک"> </a>
                                            <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                            <div class="ga-border"></div>
                                            <p class="text-muted text-center"><small>عکاسی</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class=" border p-1 card thumb  mb-xl-0">
                                            <a href="#" class="image-popup" title="تصویر -2"> <img
                                                    src="/admins/assets/img/photos/10.jpg" class="thumb-img"
                                                    alt="کار-تصویر کوچک"> </a>
                                            <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                            <div class="ga-border"></div>
                                            <p class="text-muted text-center"><small>عکاسی</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class=" border p-1 card thumb  mb-xl-0">
                                            <a href="#" class="image-popup" title="تصویر -2"> <img
                                                    src="/admins/assets/img/photos/6.jpg" class="thumb-img"
                                                    alt="کار-تصویر کوچک"> </a>
                                            <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                            <div class="ga-border"></div>
                                            <p class="text-muted text-center"><small>عکاسی</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class=" border p-1 card thumb  mb-xl-0">
                                            <a href="#" class="image-popup" title="تصویر -2"> <img
                                                    src="/admins/assets/img/photos/5.jpg" class="thumb-img"
                                                    alt="کار-تصویر کوچک"> </a>
                                            <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                            <div class="ga-border"></div>
                                            <p class="text-muted text-center"><small>عکاسی</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="FullName">نام و نام خانوادگی</label>
                                        <input type="text" value="جان دو" id="FullName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">پست الکترونیک</label>
                                        <input type="email" value="first.last@example.com" id="Email"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Username">نام کاربری</label>
                                        <input type="text" value="جان" id="Username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">کلمه عبور</label>
                                        <input type="password" placeholder="6 - 15 " id="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="RePassword">رمز عبور مجدد</label>
                                        <input type="password" placeholder="6 - 15 " id="RePassword"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="AboutMe">درمورد من</label>
                                        <textarea id="AboutMe" class="form-control">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light w-md"
                                        type="submit">ذخیره</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection