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
    <!-- Favicon -->
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
    <!-- Morris.js Charts Plugin -->
    <link href="/admins/assets/plugins/morris.js/morris.css" rel="stylesheet" />
    <!---Skinmodes css-->
    <link href="/admins/assets/css-rtl/skin-modes.css" rel="stylesheet" />
    <!--- Animations css-->
    <link href="/admins/assets/css/animate.css" rel="stylesheet">
    <link href="/admins/assets/css/jquery.md.bootstrap.datetimepicker.style.css" rel="stylesheet" />
    @yield('css-page')
    <!---Switcher css-->
</head>

<body class="main-body {{auth()->user()->theme}} ">

    <!-- Start Switcher -->
    <!-- End Switcher -->

    <!-- Loader -->
    <div id="global-loader">
        <img src="/admins/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->
    <!-- main-header opened -->
    @include('Admin.Layouts.header')
    <!-- /main-header -->
    <!--Horizontal-main -->
    @include('Admin.Layouts.sidebar')
    <!--Horizontal-main -->
    <!-- main-content opened -->
    @yield('content')
    <!-- Container closed -->
    <!-- Footer opened -->
    <div class="main-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>کپی رایت © 2020 . طراحی شده توسط <a href="#">طراحان وب ایران (09128538521)</a> کلیه حقوق محفوظ
                است.</span>
        </div>
    </div>
    <!-- Footer closed -->
    <!-- JQuery min js -->
    <script src="/admins/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/admins/assets/plugins/sweet-alert/sweetalert2.min.js"></script>
    <!-- Bootstrap Bundle js -->
    <script src="/admins/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ionicons js -->
    <script src="/admins/assets/plugins/ionicons/ionicons.js"></script>
    <!-- Moment js -->
    <script src="/admins/assets/plugins/raphael/raphael.min.js"></script>
    <!-- Internal Piety js -->
    <script src="/admins/assets/plugins/peity/jquery.peity.min.js"></script>
    <!--Internal  Flot js-->
    <script src="/admins/assets/plugins/jquery.flot/jquery.flot.js"></script>
    <script src="/admins/assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
    <script src="/admins/assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/admins/assets/plugins/jquery.flot/jquery.flot.categories.js"></script>
    <script src="/admins/assets/js/dashboard.sampledata.js"></script>
    <script src="/admins/assets/js/chart.flot.sampledata.js"></script>
    <!--Internal Apexchart js-->
    <script src="/admins/assets/js/apexcharts.js"></script>
    <!-- Internal Map -->
    {{-- <script src="/admins/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admins/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
    <!-- Internal Chart js -->
    <script src="/admins/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!--Internal  index js -->
    <script src="/admins/assets/js/index.js"></script>
    <script src="/admins/assets/js/jquery.vmap.sampledata.js"></script>
    <!-- Moment js -->
    <script src="/admins/assets/plugins/moment/moment.js"></script>
    <!--Internal Sparkline js -->
    <script src="/admins/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Sticky js -->
    <script src="/admins/assets/js/sticky.js"></script>
    <!-- Rating js-->
    {{-- <script src="/admins/assets/plugins/rating/jquery.rating-stars.js"></script> --}}
    <script src="/admins/assets/plugins/rating/jquery.barrating.js"></script>
    <!-- P-scroll js -->
    <script src="/admins/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/admins/assets/plugins/perfect-scrollbar/p-scroll.js"></script>
    <!-- Horizontalmenu js-->
    <script src="/admins/assets/plugins/sidebar/sidebar-rtl.js"></script>
    <script src="/admins/assets/plugins/sidebar/sidebar-custom.js"></script>
    <!-- Eva-icons js -->
    <script src="/admins/assets/js/eva-icons.min.js"></script>
    <!-- Horizontalmenu js-->
    <script src="/admins/assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>
    <!-- custom js -->
    <script src="/admins/assets/js/custom.js"></script>
    <script src="/admins/assets/js/jquery.chainedTo.min.js"></script>
    <script src="/admins/assets/js/jquery.md.bootstrap.datetimepicker.js"></script>
    <!-- Switcher js -->

    @include('sweetalert::alert')
    @yield('js-page')

</body>

</html>