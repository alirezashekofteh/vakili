@extends('front.layouts.master')
@section('title' , 'خاور هسته')
@section('content')
<!--Page Title-->
<section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(/front/assets/images/background/pattern-16.png)"></div>
    <div class="auto-container">
        <h2>محصولات شرکت خاور هسته </h2>
        <ul class="page-breadcrumb">
            <li><a href="/">صفحه اصلی </a></li>
            <li>محصولات </li>
        </ul>
    </div>
</section>
<!--End Page Title-->
	<!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
			<div class="row clearfix">
                @foreach ($products as $item)
                <div class="case-block-two col-md-3">
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
				<!-- News Block -->
			</div>
			
			<!-- Post Share Options -->
			<div class="styled-pagination text-center">
                {{ $products->links() }}
			</div>
			
		</div>
	</section>
	<!-- End Blog Page Section -->
@endsection