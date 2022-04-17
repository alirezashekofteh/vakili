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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/agent">/لیست فاکتور ها</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ویرایش اطلاعات فاکتور</span>
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
                      مشخصات فاکتور
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
                            <div class="pd-30 pd-sm-40 bg-gray-200">
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-2">
                                        <label class="form-label mg-b-0">نام و نام خانوادگی :</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label mg-b-0 btn btn-dark">{{$factor->agent->nf}}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="form-label mg-b-0">نام حقوقی :</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label mg-b-0 btn btn-dark">{{$factor->agent->MetaUser->co_name}}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="form-label mg-b-0 ">شماره موبایل:</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label mg-b-0 btn btn-dark">{{$factor->agent->mobile}}</label>
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-2">
                                        <label class="form-label mg-b-0">تاریخ ایجاد فاکتور:</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label mg-b-0 btn btn-dark">{{jdate($factor->created_at)}}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="form-label mg-b-0">وضعیت :</label>
                                    </div>
                                    <div class="col-md-2 mg-t-5 mg-md-t-0">
                                        <label class="form-label mg-b-0 btn btn-dark">{{config('value.factorstatus')[$factor->status]}}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="form-label mg-b-0">کارشناس:</label>
                                    </div>
                                    <div class="col-md-2 mg-t-5 mg-md-t-0">
                                        <label class="form-label mg-b-0 btn btn-dark">{{$factor->agent->expert->nf}}</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <form action="{{route('admin.factor.store')}}" method="POST">
            @csrf
            <input type="hidden" name="factor" value="{{$factor->id}}">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                          افزودن محصول جدید به فاکتور
                        </div>
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-2">
                                    <label class="form-label mg-b-0">محصول :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <select id="datacenter" class="form-control select2" name="product">
                                        @foreach(\App\Models\Product::Orderby('id')->get();
                                        as $item)
                                        <option value="{{$item->id}}" {{ old('product') == $item->id ? 'selected' : '' }}>{{ $item->name.'-'.$item->id}}</option>
    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">تعداد :</label>
                                </div>
                                <div class="col-md-2 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" required name="tedad2" value="{{old('tedad2',$factor->tedad2)}}"  type="text">
                                </div>
                               
                                <div class="col-md-2">
                                 <button type="submit" class="btn btn-info btn-with-icon btn-block"><i class='bx bxs-calendar-check bx-sm'></i>ثبت محصول جدید</button>
                                </div>
                               
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </form>
        <form action="{{route('admin.factor.update',$factor)}}" method="Post">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                       
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>کد محصول</th>
                                        <th>نام محصول</th>
                                        <th>خودرو</th>
                                        <th>گروه</th>
                                        <th>قیمت</th>
                                        <th>تعداد مشتری</th>
                                        <th>تعداد کارشناس</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($factor->orders as $item)
                                    <tr class="success">
                                        <input type="hidden" name="id[]" value="{{$item->id}}">
                                        <td>{{ $item->product_id}}</td>
                                        <td>{{ $item->product->name}}</td>
                                        <td>{{ $item->product->car->name}}</td>
                                        <td>{{ $item->product->cat->name}}</td>
                                        <td>{{ number_format($item->cost)}}</td>
                                        <td><input type="text" name="tedad[]" disabled value="{{ $item->tedad}}" class="form-control dir-ltr"></td>
                                        <td><input type="text"  name="tedad2[]" value="{{ $item->tedad2}}"  class="form-control dir-ltr"></td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div><!-- bd -->
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                          عملیات فاکتور
                        </div>
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-2">
                                    <label class="form-label mg-b-0">تغییر وضعیت :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="status">
                                        @foreach(config('value.factorstatus') as $key => $name)
                                        <option value="{{ $key }}" {{ $factor->status==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label mg-b-0">شماره درخواست :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" name="havaleh" value="{{old('havaleh',$factor->havaleh)}}"  type="text">
                                </div>
                               
                                <div class="col-md-2">
                                 <button type="submit" class="btn btn-success btn-with-icon btn-block"><i class='bx bxs-calendar-check bx-sm'></i>ثبت تغییرات</button>
                                </div>
                               
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </form>
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