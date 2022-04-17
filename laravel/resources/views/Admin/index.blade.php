@extends('Admin.Layouts.master')
@section('content')
<div class="main-content horizontal-content">
    <!-- container opened -->
    <div class="container">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">سلام ، خوش آمدید!</h2>
                    <p class="mg-b-0">الگوی داشبورد نظارت بر فروش.</p>
                </div>
            </div>
            <div class="main-dashboard-header-right">
                <div>
                    <label class="tx-13">رتبه بندی مشتری</label>
                    <div class="main-star">
                        <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
                            class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
                            class="typcn typcn-star"></i> <span>(14،873)</span>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- /breadcrumb -->
        <!-- row -->
        <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">تعداد سفارشات جدید</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">500000 تومان</h4>
                                    <p class="mb-0 tx-12 text-white op-7">در مقایسه با هفته گذشته</p>
                                </div>
                                <span class="float-right my-auto mr-auto">
                                    <i class="fas fa-arrow-circle-up text-white"></i>
                                    <span class="text-white op-7"> +427</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">منتشر تایید مشتری</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">100000تومان</h4>
                                    <p class="mb-0 tx-12 text-white op-7">در مقایسه با هفته گذشته</p>
                                </div>
                                <span class="float-right my-auto mr-auto">
                                    <i class="fas fa-arrow-circle-down text-white"></i>
                                    <span class="text-white op-7"> -23.09٪</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">منتظر ثبت حواله</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">71000 تومان</h4>
                                    <p class="mb-0 tx-12 text-white op-7">در مقایسه با هفته گذشته</p>
                                </div>
                                <span class="float-right my-auto mr-auto">
                                    <i class="fas fa-arrow-circle-up text-white"></i>
                                    <span class="text-white op-7"> 52.09٪</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline3"
                        class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">کل سفارشات</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">480000 تومان</h4>
                                    <p class="mb-0 tx-12 text-white op-7">در مقایسه با هفته گذشته</p>
                                </div>
                                <span class="float-right my-auto mr-auto">
                                    <i class="fas fa-arrow-circle-down text-white"></i>
                                    <span class="text-white op-7"> -152.3</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
        </div>
       
       
      
    </div>
</div>
@endsection
