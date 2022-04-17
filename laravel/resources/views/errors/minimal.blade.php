<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>@yield('title') </title>
<!-- Favicon -->
<link rel="icon" href="/admins/assets/img/brand/favicon.png" type="image/x-icon"/>
<!--- Style css -->
<link href="/admins/assets/css-rtl/style.css" rel="stylesheet">

	
<body class="main-body bg-primary-transparent">
	<!-- Loader -->
	<!-- /Loader -->
			<!-- Main-error-wrapper -->
	<div class="main-error-wrapper  page page-h ">
        <img src="/admins/assets/img/media/@yield('code').png" class="error-page" alt="خطا">
		<h2>@yield('message')</h2>
		<h6></h6><a class="btn btn-outline-danger" href="/admin">بازگشت به خانه</a>
	</div>

</body>
</html>