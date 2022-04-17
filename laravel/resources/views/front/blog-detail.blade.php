@extends('front.layouts.master')
@section('title' , 'خاور هسته')
@section('content')
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(/front/assets/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2> {{$post->name}}</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">صفحه اصلی </a></li>
				<li>وبلاگ </li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                	<div class="news-detail">
						<div class="inner-box">
							<div class="upper-box">
								<h3>{{$post->name}}</h3>
								<ul class="post-meta">
									<li><span class="icon flaticon-comment"></span>تعداد {{$post->comments->count()}} نظر </li>
									<li><span class="icon flaticon-user"></span>{{$post->user->nf}} </li>
								</ul>
							</div>
							<div class="image">
								<img src="images/resource/news-17.jpg" alt="" />
								<div class="post-date">{{jdate($post->created_at)->format('%d')}}<span>{{jdate($post->created_at)->format('%B')}}</span></div>
							</div>
								
							<div class="lower-content">
								{!!$post->fullcontent!!}
								<!-- Post Share Options-->
								<div class="post-share-options">
									<div class="post-share-inner clearfix">
										<ul class="social-box pull-right">
											<li class="share">این اعلان را به اشتراک گذارید :</li>
											<li><a href="http://www.facebook.com/sharer.php?u={{url()->full()}}"><span class="fa fa-facebook-f"></span></a></li>
											<li><a href="http://www.twitter.com/share?url={{url()->full()}}"><span class="fa fa-twitter"></span></a></li>
											<li><a href="whatsapp://send?text={{url()->full()}}"><span class="fa fa-whatsapp"></span></a></li>
											<li><a href="https://telegram.me/share/url?{{url()->full()}}"><span class="fa fa-paper-plane"></span></a></li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="comments-area">
							<div class="group-title">
								<h3>{{$post->comments->count()}} نظرات </h3>
							</div>
							@foreach ($post->comments()->where('approved','1')->latest()->get() as $comment)
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
									<div class="comment-info clearfix"><strong>{{$comment->name}} </strong><div class="comment-time"> {{jdate($comment->created_at)->format('%A ,%d %B %Y ساعت  %H:i دقیقه')}}</div></div>
									<div class="text">{{$comment->comment}}</div>
									
								</div>
							</div>
							@endforeach
						</div>
						
						<!-- Comment Form -->
                        @if($post->comment)
						<div class="comment-form">
							<div class="group-title"><h3>ارسال یک پیام </h3></div>
							<!--Comment Form-->
							<form method="post" action="{{route('send.comment')}}">
                                @csrf
                                <input type="hidden" name="commentable_id" value="{{ $post->id }}">
                                <input type="hidden" name="commentable_type" value="{{ get_class($post) }}">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="name" placeholder="نام کامل" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="ایمیل" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="darma" name="comment" placeholder="پیام شما"></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">ارسال نظر </span></button>
									</div>
									
								</div>
							</form>
								
						</div>
						@endif
						
						
					</div>
				</div>
				

			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->
	
	<!-- News More Section -->
	<section class="news-more-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- New Post -->
				<div class="new-post col-lg-6 col-md-12 col-sm-12">
                    @if ($post->previous())
					<div class="post-inner">
						<div class="content">
							<div class="post-image">
								<img src="{{$post->previous()->pic}}" alt="" />
							</div>
							<h4><a href="{{route('blog',$post->previous()->slug)}}">{{$post->previous()->name}} </a></h4>
							<a href="{{route('blog',$post->previous()->slug)}}" class="more">قبلی </a>
						</div>
					</div>
                    @endif
				</div>
				<!-- New Post -->
				<div class="new-post style-two col-lg-6 col-md-12 col-sm-12">
                    @if ($post->next())
					<div class="post-inner">
						<div class="content">
							<div class="post-image">
								<img src="{{$post->next()->pic}}" alt="" />
							</div>
							<h4><a href="{{route('blog',$post->next()->slug)}}">{{$post->next()->name}}</a></h4>
							<a href="{{route('blog',$post->next()->slug)}}" class="more">بعدی </a>
						</div>
					</div>
                    @endif
				</div>
			</div>
		</div>
	</section>
	<!-- End News More Section -->
@endsection