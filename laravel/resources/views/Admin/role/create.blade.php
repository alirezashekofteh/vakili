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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/role">/لیست نمایندگان</a></span>
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
                            @if (isset($role->id))
                                @method('PUT')
                            @endif
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام نقش کاربری به فارسی :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-rtl" placeholder="" value="{{old('name_fa',$role->name_fa)}}" name="name_fa" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام نقش کاربری به انگلیسی :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" value="{{old('name',$role->name)}}" name="name" type="text">
                                </div>
                            </div>
                            @foreach($permission as $item)
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-2">
                                    <label class="form-label mg-b-0">{{$item->name_fa}}</label>
                                </div>
                                    @foreach(\Spatie\Permission\Models\Permission::where('parent',$item->id)->get() as $value)
                                    <div class="col-md-2">
                                    <label class="btn btn-success btn-block"><input type="checkbox" name="permission[]" 
                                        @if (in_array($value->id, $rolePermissions))
                                        checked=''
                                    @endif value="{{$value->id}}">
                                    {{ $value->name_fa }}</label>
                                </div>
                                @endforeach
                           
                            </div>
                            <hr>
                            @endforeach
                            <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">ثبت و ذخیره</button>
                            <a href="/admin/role" class="btn btn-dark pd-x-30 mg-t-5">بازگشت</a>
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