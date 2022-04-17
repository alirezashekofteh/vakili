<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/front/assets/images/favicon.png">

    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="/front/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/feature.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="/front/assets/css/style.css">
</head>

<body class="active-dark-mode">
    <main class="page-wrapper">
       @include('front.layouts.header')

    @yield('content')  

      @include('front.layouts.footer')
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rn-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="/front/assets/js/vendor/modernizr.min.js"></script>
    <script src="/front/assets/js/vendor/jquery.min.js"></script>
    <script src="/front/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/front/assets/js/vendor/popper.min.js"></script>
    <script src="/front/assets/js/vendor/waypoint.min.js"></script>
    <script src="/front/assets/js/vendor/wow.min.js"></script>
    <script src="/front/assets/js/vendor/counterup.min.js"></script>
    <script src="/front/assets/js/vendor/feather.min.js"></script>
    <script src="/front/assets/js/vendor/sal.min.js"></script>
    <script src="/front/assets/js/vendor/masonry.js"></script>
    <script src="/front/assets/js/vendor/imageloaded.js"></script>
    <script src="/front/assets/js/vendor/magnify.min.js"></script>
    <script src="/front/assets/js/vendor/lightbox.js"></script>
    <script src="/front/assets/js/vendor/slick.min.js"></script>
    <script src="/front/assets/js/vendor/easypie.js"></script>
    <script src="/front/assets/js/vendor/text-type.js"></script>
    <script src="/front/assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="/front/assets/js/vendor/js.cookie.js"></script>
    <!-- Main JS -->
    <script src="/front/assets/js/main.js"></script>
</body>


 </html>