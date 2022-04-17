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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/agent">/لیست نمایندگان</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/افزودن - ویرایش نماینده</span>
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
                        {{$title}}
                        </div>
                        <p class="mg-b-20"></p>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form role="form" action="{{$action}}" method="POST">
                            @csrf
                            @if (isset($agent->id))
                                @method('PUT')
                            @endif
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">کد مشتری :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" value="{{old('code',$agent->code)}}" name="code" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" value="{{old('name',$agent->name)}}" name="name" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام خانوادگی :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control " placeholder="" name="family" value="{{old('family',$agent->family)}}" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">موبایل :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="mobile" value="{{old('mobile',$agent->mobile)}}"  type="text">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">تلفن :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="tel" value="{{old('tel',$metauser->tel)}}"  type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">ایمیل :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="email" value="{{old('email',$agent->email)}}" type="text">
                                </div>
                            </div>
                          
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">فعال بودن نماینده :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="status">
                                        @foreach(config('value.truefalse') as $key => $name)
                                        <option value="{{ $key }}" {{ $agent->status==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">کد پستی :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="code_posti" value="{{old('code_posti',$metauser->code_posti)}}"  type="text">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">کد ملی :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="code_meli" value="{{old('code_meli',$metauser->code_meli)}}"  type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">انتخاب استان - شهر :</label>
                                </div>
                                <div class="col-md-5 mg-t-5 mg-md-t-0">
                                    <select id="datacenter" class="form-control" name="ostan">
                                        @foreach(\App\Models\Ostan::Orderby('name')->get();
                                        as $item)
                                        <option value="{{$item->name}}" {{ old('ostan') == $item->id || $metauser->ostan==$item->name  ? 'selected' : '' }}>{{ $item->name}}</option>
    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mg-t-5 mg-md-t-0">
                                    <select id="desktoptype" class="form-control select2" name="shahr">
                                        @foreach(\App\Models\Shahr::Orderby('name')->get();
                                        as $item)
                                        <option value="{{ $item->name }}" {{ old('shahr') == $item->name || $metauser->shahr==$item->name  ? 'selected' : '' }} data-available-with="{{$item->ostan_name}}">{{ $item->name}}</option>
                                      
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">آدرس:</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-rtl" placeholder="" name="address" value="{{old('address',$metauser->address)}}"  type="text">
                                </div>
                    
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نوع شخصیت :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="company">
                                        @foreach(config('value.company') as $key => $name)
                                        <option value="{{ $key }}" {{ $metauser->company==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام شخصیت حقوقی :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-rtl" placeholder="" name="co_name" value="{{old('co_name',$metauser->co_name)}}"  type="text">
                                </div>
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">کد اقتصادی:</label>
                                </div>
                                <div class="col-md-2 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="code_company" value="{{old('code_company',$metauser->code_company)}}"  type="text">
                                </div>
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">کد ثبت :</label>
                                </div>
                                <div class="col-md-2 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="code_sabt" value="{{old('code_sabt',$metauser->code_sabt)}}"  type="text">
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">کارشناس فروش مربوطه :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <select id="datacenter" class="form-control" name="expert_id">
                                        @foreach(\App\Models\User::role('expert')->get();
                                        as $item)
                                        <option value="{{$item->id}}" {{ old('expert_id') == $item->id || $agent->expert_id==$item->id  ? 'selected' : '' }}>{{ $item->nf}}</option>
    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نوع نمایندگی :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="type">
                                        @foreach(config('value.type') as $key => $name)
                                        <option value="{{ $key }}" {{ $metauser->type==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">ثبت و ذخیره</button>
                            <a href="/admin/agent" class="btn btn-dark pd-x-30 mg-t-5">بازگشت</a>
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
    $("#desktoptype").chainedTo("#datacenter");
    $(document).ready(function() {
		$('.select2').select2({
			placeholder: 'انتخاب',
			searchInputPlaceholder: 'جستجو'
		});
		$('.select2-no-search').select2({
			minimumResultsForSearch: Infinity,
			placeholder: 'انتخاب'
		});
	});
</script>

@endsection