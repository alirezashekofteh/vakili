@extends('front.layouts.master')
@section('title' , 'خاور هسته')
@section('content')
<!--Page Title-->
<section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(/front/assets/images/background/pattern-16.png)"></div>
    <div class="auto-container">
        <h2>{{$product->name}} </h2>
        <ul class="page-breadcrumb">
            <li><a href="/">صفحه اصلی </a></li>
            <li>محصولات </li>
        </ul>
    </div>
</section>
	<!--Shop Single Section-->
    <section class="shop-single-section">
    	<div class="auto-container">
        	
            <!--Shop Single-->
            <div class="shop-page product-details">
                
                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                    
                        <div class="image-column col-lg-6 col-md-12 col-sm-12 align-self-center">
                            <div class="carousel-outer">
        
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="{{$product->pic}}" class="lightbox-image" title="{{$product->name}}"><img src="{{$product->pic}}" alt=""></a></li>
                                    
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{$product->pic}}" alt=""></li>
                                   
                                </ul>
                                
                            </div>
                        </div>
                        
                        <!--Info Column-->
                        {{-- <div class="info-column col-lg-5 col-md-12 col-sm-12">
                            <div class="details-header">
                                <h2>{{$product->name}} </h2>
                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                
                            </div>

                            <div class="text">
                            
                            </div>

                            <div class="other-options">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div>
                                    </div>
                                    <div class="pull-left">
                                        <!--Btns Box-->
                                        <div class="btns-box">
                                            <button type="button" class="theme-btn btn-style-three"><span class="txt">افزودن به سبد</span></button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <ul class="shop-list">
                            	<li><strong>کد </strong><span class="theme_color">.</span>25087900</li>
                                <li><strong>دسته </strong><span class="theme_color">.</span>برندینگ / طراحی وب</li>
                                <li><strong>اشتراک </strong><span class="theme_color">.</span></li>
                                <li><a href="#">افزودن به علاقه مندیها .</a></li>
                            </ul>
                            
                        </div> --}}
                        
                    </div>
                </div>
                <!--Basic Details-->
                
                <!--Product Info Tabs-->
                <div class="product-info-tabs">
                    <!--Product Tabs-->
                    <div class="prod-tabs tabs-box">
                    
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-details" class="tab-btn active-btn">توضیحات </li>
                            <li data-tab="#prod-info" class="tab-btn">اطلاعات تکمیلی</li>
                            <li data-tab="#prod-reviews" class="tab-btn">نظرات  ({{$product->comments->count()}})</li>
                        </ul>
                        
                        <!--Tabs Container-->
                        <div class="tabs-content">
                            
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="prod-details">
                                <div class="content">
                                    {{$product->content}}
                                </div>
                            </div>
                            
                            <!--Tab / Active Tab-->
                            <div class="tab" id="prod-info">
                                <div class="content">
                                    {!!$product->fullcontent!!}
                                </div>
                            </div>
                            
                            <!--Tab-->
                            <div class="tab" id="prod-reviews">
                                <!--Reviews Container-->
                                <div class="reviews-container">
                                    
                                    <div class="comments-area">
                                        
                                        @foreach ($product->comments()->where('approved','1')->latest()->get() as $comment)
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
                                    @if($product->comment)
                                    <div class="comment-form">
                                        <div class="group-title"><h3>ارسال یک پیام </h3></div>
                                        <!--Comment Form-->
                                        <form method="post" action="{{route('send.comment')}}">
                                            @csrf
                                            <input type="hidden" name="commentable_id" value="{{ $product->id }}">
                                            <input type="hidden" name="commentable_type" value="{{ get_class($product) }}">
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
                            <!--End Tab-->
                            
                        </div>
                    </div>
                    
                </div>
                <!--End Product Info Tabs-->
                
            </div>
            
        </div>
    </section>
@endsection