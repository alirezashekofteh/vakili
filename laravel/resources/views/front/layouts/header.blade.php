<header class="rn-header header-default header-left-align header-transparent header-sticky">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-6 col-4 position-static">
                <div class="header-left d-flex">
                    <div class="logo">
                        <a href="/">
                            <img class="logo-light" src="{{$mainpage->logo}}" alt="لوگوی کسب و کار">
                            <img class="logo-dark" src="{{$mainpage->logo}}" alt="لوگوی کسب و کار">
                        </a>
                    </div>
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            @foreach ($Menu as $item)
                            @php
                            $parent = $item->child()->where('view',1)->orderby('tartib')
                            ->get();
                            @endphp
                            <li @if ($parent->count())
                                class="has-droupdown has-menu-child-item"
                                @endif><a href="{{$item->link}}">{{$item->name}}</a>
                                @if($parent->count())
                                <ul class="submenu">
                                    @foreach($parent as $pp)
                                    <li><a href="{{$pp->link}}">{{$pp->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach 
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-8">
                <div class="header-right">
                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->

                    <!-- Start Switcher Area  -->
                    <div id="my_switcher" class="my_switcher">
                        <ul>
                            <li>
                                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                    <img class="sun-image" src="/front/assets/images/icons/sun-01.svg" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img class="Victor Image" src="/front/assets/images/icons/vector.svg" alt="Vector Images">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Start Switcher Area  -->

                </div>
            </div>
        </div>
    </div>
</header>

<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="/">
                    <img class="logo-light" src="{{$mainpage->logo}}" alt="لوگوی کسب و کار">
                    <img class="logo-dark" src="{{$mainpage->logo}}" alt="لوگوی کسب و کار">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="feather-x"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            @foreach ($Menu as $item)
            @php
            $parent = $item->child()->where('view',1)->orderby('tartib')
            ->get();
            @endphp
            <li @if ($parent->count())
                class="has-droupdown has-menu-child-item"
                @endif><a href="{{$item->link}}">{{$item->name}}</a>
                @if($parent->count())
                <ul class="submenu">
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
</div>