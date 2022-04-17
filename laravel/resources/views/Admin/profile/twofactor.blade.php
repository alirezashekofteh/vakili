@extends('Admin.Layouts.master')
@section('css-page')
<link href="/admins/assets/plugins/select2/css/select2.min.css" rel="stylesheet">
@endsection
@section('content')
<!-- main-content opened -->
<div class="main-content horizontal-content">
    <!-- container opened -->
    <div class="container">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin">داشبورد</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/user">/لیست کارمندان</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/فعال سازی ورود 2 مرحله ای</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="mb-3 mb-xl-0">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary">{{jdate()}}</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                           فعال سازی ورود 2 مرحله ای
                        </div>
                        <p class="mg-b-20"></p>
                        @if ($errors->updateProfileInformation->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->updateProfileInformation->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (session('status')=='two-factor-authentication-enabled')

                        <div class="alert alert-success" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                           ورود 2 مرحله ای برای شما فعال شد
                        </div>
                        @endif
                        <div class="alert alert-info" role="alert">
                            زمانی که احرازهویت دو مرحله ای را فعال می کنید،  در زمان ورود  به سایت یک عدد تصادفی با نرم افزار google authenticator ساخته میشه که شما باید آن را مورد استفاده قرار دهید.
                        </div>
                            @csrf
                            @method('PUT')
                            <div class="pd-30 pd-sm-40" style="background-color: #dde2ef;">

                                @if(empty(auth()->user()->two_factor_secret))

                                <form action="/user/two-factor-authentication" method="post">
                                    @csrf
                                    <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">فعال سازی</button>
                                </form>
                            
                            @else
                            <div class="alert alert-danger" role="alert">
                          جهت استفاده از ورود 2 مرحله ای  توسط نرم افزار  google authenticator کد زیر را اسکن کنید
                            </div>    
                            <div class="d-flex justify-content-center">
                                    <h3 class="text-info">کلید QR ورود به سایت</h3>
                            </div>
                                    <div class="d-flex justify-content-center">
                                        {!! auth()->user()->twoFactorQrCodeSvg()  !!}</div>
                                        {{-- <div class="col-md-6 text-left dir-ltr"><h3>Recovery Codes</h3>
                                            <ul>
                                            @foreach(auth()->user()->recoveryCodes() as $code)
                                                <li>{{ $code }}</li>
                                            @endforeach
                                        </ul>
                                        </div> --}}
                                    
                                        <div class="d-flex justify-content-center">
                                <form action="/user/two-factor-authentication" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">غیر فعال سازی</button>
                                </form>
                                        </div>
                            @endif
                              
                              
        
                                
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js-page')
<script src="/admins/assets/plugins/select2/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
		$('.select2').select2({
			placeholder: 'انتخاب',
			searchInputPlaceholder: 'جستجو'
		});
		
	});
</script>

@endsection