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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ویرایش پروفایل</span>
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
                            ویرایش پروفایل
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
                        @if (session('status')=='profile-information-updated')

                        <div class="alert alert-success" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>موفق آمیز</strong> اطلاعات مورد نیاز شما با موفقیت ویرایش شد.
                        </div>
                        @endif
                        <form role="form" action="/user/profile-information" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="pd-30 pd-sm-40 bg-gray-200">

                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">نام :</label>
                                    </div>
                                    <div class="col-md-9 mg-t-5 mg-md-t-0">
                                        <input class="form-control" placeholder=""
                                            value="{{old('name',auth()->user()->name)}}" name="name" type="text">
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">نام خانوادگی :</label>
                                    </div>
                                    <div class="col-md-9 mg-t-5 mg-md-t-0">
                                        <input class="form-control " placeholder="" name="family"
                                            value="{{old('family',auth()->user()->family)}}" type="text">
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">موبایل :</label>
                                    </div>
                                    <div class="col-md-3 mg-t-5 mg-md-t-0">
                                        <input class="form-control dir-ltr" placeholder="" name="mobile"
                                            value="{{old('mobile',auth()->user()->mobile)}}" type="text">
                                    </div>

                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">ایمیل :</label>
                                    </div>
                                    <div class="col-md-9 mg-t-5 mg-md-t-0">
                                        <input class="form-control dir-ltr" placeholder="" name="email"
                                            value="{{old('email',auth()->user()->email)}}" type="text">
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">انتخاب تم پنل مدیریت :</label>
                                    </div>
                                    <div class="col-md-9 mg-t-5 mg-md-t-0">
                                       <select name="theme" class="form-control">
                                           <option value="" @if (auth()->user()->theme=='')
                                               selected=''
                                           @endif>تم روشن</option>
                                           <option value="dark-theme"
                                           @if (auth()->user()->theme=='dark-theme')
                                               selected=''
                                           @endif
                                           >تم تیره</option>
                                       </select>
                                    </div>
                                </div>
                                <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">ثبت و
                                    ذخیره</button>
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