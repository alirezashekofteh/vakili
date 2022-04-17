@extends('front.layouts.master')
@section('title' , 'خاور هسته')
@section('content')
	<!-- Banner Section Three -->
    <section class="banner-section-three">
		<div class="main-slider-carousel owl-carousel owl-theme">
            
            @foreach ($slideshow as $item)
            <div class="slide" style="background-image: url({{$item->pic}})">
				<div class="color-layer"></div>
				<div class="pattern-layer-one" style="background-image: url({{$item->pic2}})"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column clearfix">
						<div class="inner-column">
							<h1>{{$item->name}}</h1>
							<div class="text">{{$item->tozih}}</div>
							<div class="button-box">
								<a href="{{$item->link}}" class="theme-btn btn-style-one"><span class="txt">مطالعه بیشتر</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach
           
			
			
			
		</div>
	</section>
	<!-- End Banner Section Two -->
	
	<!-- Services Section Three -->
	<section class="services-section-three margin-top">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					@foreach ($service as $item)
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="service-number">{{$loop->iteration}}</div>
								<h4><a href="{{route('service',$item->slug)}}">{{$item->name}}</a></h4>
								<div class="text">{{$item->content}}</div>
								<a href="{{route('service',$item->slug)}}" class="more-detail">جزئیات بیشتر</a>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Three -->
	
	
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">
        	
            <!-- Content Column -->
            <div class="content-column" style="background-image:url(/front/assets/images/background/pattern-13.png)">
            	<div class="inner-column">
					<!-- Sec Title -->
					<div class="sec-title light">
					
						<h2>درباره ما</h2>
						<div class="text">{!!$mainpage->about!!}</div>
					</div>
					<div class="row clearfix">
						
						<!-- Feature Block Three -->
						<div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon flaticon-web-1"></span>
								</div>
								<div class="number">478</div>
								<div class="feature-text">مشتریان خوشحال</div>
							</div>
						</div>
						
						<!-- Feature Block Three -->
						<div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon flaticon-designer"></span>
								</div>
								<div class="number">642</div>
								<div class="feature-text">پروژه تکمیلی</div>
							</div>
						</div>
						
						<!-- Feature Block Three -->
						<div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon flaticon-planet-earth"></span>
								</div>
								<div class="number">578</div>
								<div class="feature-text">طراح ابری</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Image Column -->
            <div class="image-column" style="background-image:url({{$mainpage->picabout}})">
            	<figure class="image-box"><img src="{{$mainpage->picabout}}" alt=""></figure>
            </div>
			
		</div>
	</section>
	
	<!-- News Section Three -->

	<!-- End News Section Three -->
	<!-- Cases Section Two -->
	<section class="cases-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>آخرین محصولات ما</h2>
			</div>
		</div>
		
		<div class="outer-container">
			
			<div class="five-item-carousel owl-carousel owl-theme">
			
				@foreach ($products as $item)
                <div class="case-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="{{$item->pic}}" alt="" />
							<div class="overlay-box">
								<a href="{{$item->pic}}" data-fancybox="case-2" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
								<a href="{{route('product',$item->slug)}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
							</div>
						</div>
						<div class="lower-content">
							<h5><a href="{{route('product',$item->slug)}}">{{$item->name}}</a></h5>
							
						</div>
					</div>
				</div>   
                @endforeach

			</div>
			
		</div>
		
	</section>
	<!-- End Cases Section Two -->

	<!-- News Section Four -->
	<section class="news-section-four">
		<div class="image-layer" style="background-image: url(/front/assets/images/background/pattern-19.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>آخرین خبر های سایت </h2>
			</div>
			
			<div class="row clearfix">
				
			@foreach ($posts as $item)
            <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="{{route('blog',$item->slug)}}"><img src="{{$item->pic}}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date"> {{jdate($item->created_at)->format('%d')}}<span>{{jdate($item->created_at)->format('%B')}}</span></div>
                        <h4><a href="{{route('blog',$item->slug)}}">{{$item->name}}</a></h4>
                        <div class="text">{{$item->content}}</div>
                        <ul class="post-meta">
                            <li><span class="icon flaticon-comment"></span>{{$item->comments->count()}} نظر</li>
                            <li><span class="icon flaticon-user"></span>{{$item->user->nf}} </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
				
				
			
				
			</div>
			
		</div>
	</section>
	<!-- End News Section Four -->
	<!--Sponsors Section-->
	<section class="sponsors-section style-three">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">ما تجارت را تغییر می دهیم</div>
						<h2>ما در حال ایجاد راه حل هستیم <br> برای سازمان شما</h2>
					</div>
					<div class="pull-right">
						<div class="text">توسعه راه حل های نرم افزاری قابل اعتماد و مقیاس پذیر برای هر سیستم عامل ، مرورگر و دستگاه. <br> ما تخصص عمیق صنعت و آخرین پیشرفت های فناوری اطلاعات را برای ارائه سفارشی گرد هم آورده ایم <br> راه حل ها و محصولاتی که کاملاً متناسب با نیازها و رفتار کاربرانشان است.</div>
					</div>
				</div>
			</div>
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach ($company as $item)
                    <li><div class="image-box"><a href="{{$item->link}}"><img src="{{$item->pic}}" alt=""></a></div></li>
                    @endforeach
                   
                    
                </ul>
            </div>
			
		</div>
	</section>
	<!--End Sponsors Section-->
	<!-- Info Section -->
	<section class="info-section" style="background-image: url(/front/assets/images/background/6.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Logo Column -->
				<div class="logo-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="logo">
							<a href="/"><img src="{{$mainpage->logo}}" alt="" /></a>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-pin"></span></div>
						<ul>
							<li><strong>آدرس </strong></li>
							<li>{{$mainpage->adress}}</li>
						</ul>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-phone-call"></span></div>
						<ul>
							<li><strong>تلفن </strong></li>
							<li>{{$mainpage->tel}}</li>
						</ul>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-email-1"></span></div>
						<ul>
							<li><strong>ایمیل </strong></li>
							<li>{{$mainpage->email}}</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Info Section -->
	

@endsection