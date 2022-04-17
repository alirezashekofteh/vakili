<footer class="main-footer style-three">
    <div class="pattern-layer-three" style="background-image: url(images/background/pattern-14.png)"></div>
    <div class="pattern-layer-four" style="background-image: url(images/background/pattern-15.png)"></div>
    <!--Waves end-->
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                
                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <h5>خاور هسته</h5>
                        <div class="text">{{$mainpage->aboutfooter}}</div>
                    </div>
                </div>
                
                <!-- Footer Column -->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h5>لینک های کمکی </h5>
                        <ul class="list-link">
                            @foreach ($Menu as $item)
                            <li><a href="{{$item->link}}">{{$item->name}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <!-- Footer Column -->
                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-widget subscribe-widget">
                        <h5>مشترک شدن در خبرنامه</h5>
                        <div class="text">برای دریافت آخرین اخبار عضو خبرنامه پیامکی ما شوید</div>
                        <!--Emailed Form-->
                        <div class="emailed-form">
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="ایمیل خود را وارد کنید" required>
                                    <button type="submit" class="theme-btn">اکنون مشترک شوید</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright">طراحی شده توسط تیم برنامه نویسی طراحان وب ایران</div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <ul class="footer-nav">
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</footer>