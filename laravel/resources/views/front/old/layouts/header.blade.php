<header class="main-header header-style-three">
    	
    <!-- Header Top Two -->
    <div class="header-top-two">
        <div class="outer-container">
            <div class="clearfix">
                
                <!-- Top Left -->
                <div class="top-left clearfix">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li>ما خلاق ، بلند پرواز و آماده چالش ها هستیم!<strong><a href=""> ما را استخدام کنید </a></strong></li>
                       
                    </ul>
                </div>
                
                <!-- Top Right -->
                <div class="top-right pull-right clearfix">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="mailto:{{$mainpage->email}}"><span class="icon flaticon-email"></span> {{$mainpage->email}}</a></li>
                        <li><a href="tel:{{$mainpage->tel}}"><span class="icon flaticon-telephone"></span> {{$mainpage->tel}}</a></li>
                    </ul>
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="{{$mainpage->face}}" class="fa fa-facebook-f"></a></li>
                        <li><a href="{{$mainpage->toeet}}" class="fa fa-twitter"></a></li>
                        <li><a href="{{$mainpage->insta}}" class="fa fa-instagram"></a></li>
                        <li><a href="{{$mainpage->linkdin}}" class="fa fa-linkdin"></a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                
                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="{{$mainpage->logo}}" alt="" title=""></a></div>
                </div>
                
                <div class="pull-right upper-right clearfix">
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-pin"></span></div>
                        <ul>
                            <li><strong>آدرس </strong></li>
                            <li>{{$mainpage->adress}}</li>
                        </ul>
                    </div>
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-email-1"></span></div>
                        <ul>
                            <li><strong>ایمیل </strong></li>
                            <li>{{$mainpage->email}}</li>
                        </ul>
                    </div>
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <!-- Quote Btn -->
                        <div class="btn-box">
                            <a href="/login" class="theme-btn btn-style-one"><span class="txt">ورود به پنل </span></a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!--End Header Upper-->
    
    <!--Header Lower-->
    <div class="header-lower">
        
        <div class="auto-container clearfix">
            <div class="nav-outer clearfix">
                
                <!-- Grid Box -->
                <div class="grid-box navSidebar-button">
                    <a href="#" class="icon flaticon-menu-2"></a>
                </div>
                <!-- End Grid Box -->
                
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu show navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تغییر ناوبری ">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            @foreach ($Menu as $item)
                            @php
                            $parent = $item->child()->where('view',1)->orderby('tartib')
                            ->get();
                            @endphp
                            <li @if ($parent->count())
                                class="dropdown"
                                @endif><a href="{{$item->link}}">{{$item->name}}</a>
                                @if($parent->count())
                                <ul>
                                    @foreach($parent as $pp)
                                    <li><a href="{{$pp->link}}">{{$pp->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Cart Box -->
                 
                    
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="search-box-btn"><span class="fa fa-search"></span></div>
                    </div>
                    
                </nav>
                <!-- Main Menu End-->
                
                <!-- Options Box -->
                <div class="options-box clearfix">
                    <div class="option-inner">
                        <span class="icon flaticon-24-hours-2"></span>
                        <div class="number"><span>تماس فوری با ما</span><a href="tel:{{$mainpage->tel}}">{{$mainpage->tel}}</a></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Header Lower -->
    
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
                
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>