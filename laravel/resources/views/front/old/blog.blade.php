@extends('front.layouts.master')
@section('title' , 'خاور هسته')
@section('content')
<!--Page Title-->
<section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(/front/assets/images/background/pattern-16.png)"></div>
    <div class="auto-container">
        <h2>وبلاگ شرکت خاور هسته </h2>
        <ul class="page-breadcrumb">
            <li><a href="/">صفحه اصلی </a></li>
            <li>وبلاگ </li>
        </ul>
    </div>
</section>
<!--End Page Title-->
	<!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
			<div class="row clearfix">
                @foreach ($posts as $item)
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{route('blog',$item->slug)}}"><img src="{{$item->pic}}" alt="" /></a>
                        </div>
						<div class="lower-content">
                            <div class="post-date"> {{jdate($item->created_at)->format('%d')}}<span>{{jdate($item->created_at)->format('%B')}}</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-comment"></span>{{$item->comments->count()}} نظر</li>
                                <li><span class="icon flaticon-user"></span>{{$item->user->nf}} </li>
                            </ul>
                            <h4><a href="{{route('blog',$item->slug)}}">{{$item->name}}</a></h4>
                            <div class="text">{{$item->content}}</div>
							<a class="read-more" href="{{route('blog',$item->slug)}}">ادامه مطلب <span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
						</div>
					</div>
				</div>
                @endforeach
				<!-- News Block -->
			</div>
			
			<!-- Post Share Options -->
			<div class="styled-pagination text-center">
                {{ $posts->links() }}
			</div>
			
		</div>
	</section>
	<!-- End Blog Page Section -->
@endsection