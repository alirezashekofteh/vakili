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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/تغییر کلمه عبور</span>
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
                            تغییر کلمه عبور
                        </div>
                        <p class="mg-b-20"></p>
                        @if ($errors->updatePassword->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->updatePassword->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('status') === 'password-updated')
                        <div class="alert alert-success" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>موفق آمیز</strong>کلمه عبور شما با موفقیت آپدیت شد.
                        </div>
                        @endif
                        <form action="/user/password" method="post">
                            @csrf
                            @method('put')
                            <div class="pd-30 pd-sm-40 bg-gray-200">

                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">کلمه عبور فعلی :</label>
                                    </div>
                                    <div class="col-md-3 mg-t-5 mg-md-t-0">
                                        <input class="form-control dir-ltr " type="password" name="current_password" id="current_password">
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">کلمه عبور جدید :</label>
                                    </div>
                                    <div class="col-md-3 mg-t-5 mg-md-t-0">
                                        <input type="password" class="form-control dir-ltr " name="password" id="password">
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">تکرار کلمه عبور جدید :</label>
                                    </div>
                                    <div class="col-md-3 mg-t-5 mg-md-t-0">
                                        <input type="password" class="form-control dir-ltr " name="password_confirmation" id="password_confirmation">
                                    </div>

                                </div>
                               
                               
                                <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">تغییر کلمه عبور</button>
                            </div>
                        </form>
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