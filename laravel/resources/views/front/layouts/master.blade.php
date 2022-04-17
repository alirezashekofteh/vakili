<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="/front/assets/css/bootstrap.css" rel="stylesheet">
<link href="/front/assets/css/style.css" rel="stylesheet">
<link href="/front/assets/css/responsive.css" rel="stylesheet">
<!-- Color Switcher Mockup -->
<link href="/front/assets/css/color-switcher-design.css" rel="stylesheet">
<!-- Color Themes -->
<link id="theme-color-file" href="/front/assets/css/color-themes/default-theme.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/front/assets/js/respond.js"></script><![endif]-->
</head>
<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
  @include('front.layouts.header')
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
@include('front.layouts.sidebar')
	<!-- END sidebar widget item -->
	
@yield('content')
	<!-- Main Footer -->
  
@include('front.layouts.footer')


	
</div>
<!--End pagewrapper-->



<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
	<form method="post" action="https://expert-themes.com/html/globex/blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="اینجا جستجو کنید" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="/front/assets/js/jquery.js"></script>
<script src="/front/assets/js/popper.min.js"></script>
<script src="/front/assets/js/bootstrap.min.js"></script>
<script src="/front/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/front/assets/js/jquery.fancybox.js"></script>
<script src="/front/assets/js/appear.js"></script>
<script src="/front/assets/js/parallax.min.js"></script>
<script src="/front/assets/js/tilt.jquery.min.js"></script>
<script src="/front/assets/js/jquery.paroller.min.js"></script>
<script src="/front/assets/js/owl.js"></script>
<script src="/front/assets/js/wow.js"></script>
<script src="/front/assets/js/nav-tool.js"></script>
<script src="/front/assets/js/jquery-ui.js"></script>
<script src="/front/assets/js/script.js"></script>
<script src="/front/assets/js/color-settings.js"></script>

</body>

</html>