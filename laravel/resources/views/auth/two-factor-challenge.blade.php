<!DOCTYPE html>
<html lang="fa">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Keywords" content="" />
    <!-- Title -->
    <title>@yield('title')</title>
    <link rel="icon" href="/admins/assets/img/brand/favicon.png" type="image/x-icon" />
    <!-- Icons css -->
    <link href="/admins/assets/css/icons.css" rel="stylesheet">
    <!--  Right-sidemenu css -->
    <link href="/admins/assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="/admins/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
    <!--- Style css-->
    <link href="/admins/assets/css-rtl/style.css" rel="stylesheet">
    <link href="/admins/assets/css-rtl/style-dark.css" rel="stylesheet">
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="/admins/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="/admins/assets/css-rtl/skin-modes.css" rel="stylesheet" />
    <!--- Animations css-->
    <link href="/admins/assets/css/animate.css" rel="stylesheet">

    <!---Switcher css-->
    <link href="/admins/assets/switcher/css/switcher-rtl.css" rel="stylesheet">
    <link href="/admins/assets/switcher/demo.css" rel="stylesheet">
</head>
<!---Switcher css-->
</head>

<body class="main-body">
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="/admins/assets/img/media/login.png"
                            class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="index.html"><img
                                                src="/admins/assets/img/brand/favicon.png" class="sign-favicon ht-40"
                                                alt="logo"></a>
                                        <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">خاور هسته</h1>
                                    </div>
                                    <div class="card-sigin">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                        <div class="main-signup-header">
                                            <h2>خوش آمدید!</h2>
                                            <h5 class="font-weight-semibold mb-4">لطفا کد مورد نظر را وارد نمایید
                                            </h5>
                                            <form action="/two-factor-challenge" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>کد فعال سازی</label>
 <input class="form-control dir-ltr" placeholder="کد مورد نظر را وارد نمایید" name="code" type="text">
                                                </div>
                                                <button class="btn btn-main-primary btn-block" type="submit">ورود به پنل</button>
                                            </form>
                                            <div class="main-signin-footer mt-5">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>