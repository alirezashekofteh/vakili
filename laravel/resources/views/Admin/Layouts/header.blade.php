<div class="main-header nav nav-item hor-header">
    <div class="container">
        <div class="main-header-left ">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="/admin">
                <img src="/admins/assets/img/brand/logo-white.png" class="desktop-dark">
                <img src="/admins/assets/img/brand/logo.png" class="desktop-logo">
                <img src="/admins/assets/img/brand/favicon.png" class="desktop-logo-1">
                <img src="/admins/assets/img/brand/favicon-white.png" class="desktop-logo-dark">
            </a>
        </div><!-- search -->
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
               
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
                </div>
                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="#"><img alt="" src="/admins/assets/img/faces/6.jpg"></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile bg-primary p-3">
                            <div class="d-flex wd-100p">
                                <div class="main-img-user"><img alt="" src="/admins/assets/img/faces/6.jpg" class=""></div>
                                <div class="mr-3 my-auto">
                                    <h6>{{auth()->user()->nf}}</h6><span></span>
                                </div>
                            </div>
                        </div>
                       
                        <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="bx bx-cog"></i> ویرایش پروفایل</a>
                        <a class="dropdown-item" href="{{route('admin.twofactor')}}"><i class="bx bxs-inbox"></i>فعال سازی ورود 2 مرحله ای</a>
                        <a class="dropdown-item" href="{{route('admin.changepassword')}}"><i class="bx bx-slider-alt"></i> تغییر کلمه عبور</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="bx bx-log-out"></i> خروج از سیستم</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
