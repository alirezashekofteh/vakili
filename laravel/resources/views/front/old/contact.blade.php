@extends('front.layouts.master')
@section('title' , 'خاور هسته')
@section('content')
<!--Page Title-->
<section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(/front/assets/images/background/pattern-16.png)"></div>
    <div class="auto-container">
        <h2>تماس با ما</h2>
        <ul class="page-breadcrumb">
            <li><a href="/">صفحه اصلی </a></li>
            <li>تماس با ما</li>
        </ul>
    </div>
</section>
<!--End Page Title-->
	<!-- Blog Page Section -->
    <section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="title-box">
				<div class="title">در تماس باشید</div>
				
			</div>
			
			<div class="row clearfix">
			
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-pin"></span></div>
							<ul>
								<li><strong>آدرس </strong></li>
								<li>{{$mainpage->adress}}</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-phone-call"></span></div>
							<ul>
								<li><strong>تلفن </strong></li>
								<li>{{$mainpage->tel}}</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-email-1"></span></div>
							<ul>
								<li><strong>ایمیل </strong></li>
								<li>{{$mainpage->email}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</section>
    <section class="contact-map-section">
		<div class="auto-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.525673176609!2d46.32542404246615!3d38.06389198146334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzUzLjgiTiA0NsKwMTknMzkuNCJF!5e0!3m2!1sen!2s!4v1545664085241" width="1348" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
    <section class="contact-map-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">پیامی ارسال کنید</div>
						<h2>پیام ارسالی شما</h2>
					</div>
					<div class="pull-right">
						<div class="text">هدف ما کمک به شرکتهای ما در حفظ یا دستیابی به بهترین کلاس است <br> موقعیت در صنایع مربوطه و تیم ما کار می کند.</div>
					</div>
				</div>
			</div>
			
			<!-- Contact Form -->
			<div class="contact-form">
					
				<!-- Contact Form -->
				<form method="post" action="https://expert-themes.com/html/globex/sendemail.php" id="">
					<div class="row clearfix">
					
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>نام شما *</label>
							<input type="text" name="username" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label> ایمیل  ما *</label>
							<input type="text" name="email" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>شماره تلفن *</label>
							<input type="text" name="phone" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label> وب سایت </label>
							<input type="text" name="subject" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<label>پیام شما *</label>
							<textarea name="message" placeholder=""></textarea>
						</div>
						
						<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
							<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">اکنون ارسال کنید </span></button>
						</div>
						
					</div>
				</form>
			</div>
			<!-- End Contact Form -->
			
		</div>
	</section>
	<!-- End Blog Page Section -->
@endsection