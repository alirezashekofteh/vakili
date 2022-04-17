@extends('Admin.Layouts.master')
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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/menuadmin">/منو های مدیریت</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/افزودن منو</span>
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
                            افزودن منو
                        </div>
                        <p class="mg-b-20">شما از این قسمت میتوانید منو جدید به مدیریت اضافه کنید</p>
                        <form role="form" action="{{$action}}" method="POST">
                            @csrf
                            @if (isset($menuadmin->id))
                                @method('PUT')
                            @endif
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام منو</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" value="{{old('name',$menuadmin->name)}}" name="name" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام روت</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" name="route" value="{{old('route',$menuadmin->route)}}" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">لینک مورد نظر</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" name="link" value="{{old('link',$menuadmin->link)}}"  type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نام دسترسی</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" name="gate" value="{{old('gate',$menuadmin->gate)}}" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">ترتیب منو</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" name="tartib" value="{{old('tartib',$menuadmin->tartib)}}" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">آیکون منو</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <textarea class="form-control" placeholder="" name="pic"  rows="3">{{old('pic',$menuadmin->pic)}}</textarea>
                                </div>
                            </div>

                           
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نمایش منو</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="view">
                                        @foreach(config('value.truefalse') as $key => $name)
                                        <option value="{{ $key }}" {{ $menuadmin->view==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">نوع کاربری</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="panel">
                                        @foreach(config('value.panel') as $key => $name)
                                        <option value="{{ $key }}" {{ old('panel') == $key || $menuadmin->panel==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">زیر شاخه</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="parent">
                                        <option value="0">شاخه اصلی</option>
                                        @foreach(\App\Models\MenuAdmin::where('panel','admin')->where('parent','0')->where('view','1')->get()
                                        as $item)
                                        <option value="{{ $item->id }}" {{ old('parent') == $item->id || $menuadmin->parent==$item->id  ? 'selected' : '' }}>{{ $item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">ثبت و ذخیره</button>
                            <a href="/admin/menuadmin" class="btn btn-dark pd-x-30 mg-t-5">بازگشت</a>
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