@extends('front.layouts.master')
@section('title' , 'خاور هسته')
@section('content')
<section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(/front/assets/images/background/pattern-16.png)"></div>
    <div class="auto-container">
        <h2>خدمات شرکت خاور هسته </h2>
        <ul class="page-breadcrumb">
            <li><a href="/">صفحه اصلی </a></li>
            <li>خدمات </li>
        </ul>
    </div>
</section>
<!--End Page Title-->
	<!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
			<div class="row clearfix">
                @foreach ($services as $item)
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
				<!-- News Block -->
			</div>
			
			<!-- Post Share Options -->
			<div class="styled-pagination text-center">
                {{ $services->links() }}
			</div>
			
		</div>
	</section>
	<!-- End Blog Page Section -->
@endsection