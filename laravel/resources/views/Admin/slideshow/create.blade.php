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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/post">لیست اسلایدشو</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">افزودن -ویرایش</span>
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
                            @if (isset($slideshow->id))
                                @method('PUT')
                            @endif
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">عنوان اسلایدشو :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" value="{{old('name',$slideshow->name)}}" name="name" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">آدرس لینک صفحه :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control dir-ltr" placeholder="" value="{{old('link',$slideshow->link)}}" name="link" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">توضیحات :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <textarea  class="form-control " name="tozih">{{old('tozih',$slideshow->tozih)}}</textarea>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">فعال بودن اسلایدشو :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control" name="active">
                                        @foreach(config('value.truefalse') as $key => $name)
                                        <option value="{{ $key }}" {{ $slideshow->active==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">تصویر شاخص :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <fieldset class="invoice-address form-group">
                                        <div class="input-group col-sm-12" style="height: 35px">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger button-image " type="button" id="button-file">انتخاب تصویر</button>
                                            </div>
                                            <input type="text" id="file_label" class="form-control image_label dir-ltr" value="{{old('pic',$slideshow->pic)}}" name="pic"
                                                   aria-label="File" aria-describedby="button-file">
                                           
                                        </div>
                                    </fieldset> 
                                </div>
                               
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">تصویر زمینه :</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <fieldset class="invoice-address form-group">
                                        <div class="input-group col-sm-12" style="height: 35px">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger button-image " type="button" id="button-file">انتخاب تصویر</button>
                                            </div>
                                            <input type="text" id="file_label" class="form-control image_label dir-ltr" value="{{old('pic2',$slideshow->pic2)}}" name="pic2"
                                                   aria-label="File" aria-describedby="button-file">
                                           
                                        </div>
                                    </fieldset> 
                                </div>
                               
                            </div>
                           
                            <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">ثبت و ذخیره</button>
                            <a href="/admin/slideshow" class="btn btn-dark pd-x-30 mg-t-5">بازگشت</a>
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
<script src="/admins/assets/ckeditor/ckeditor.js"></script>
<script>
    var image;
            $('body').on('click','.button-image' , (event) => {
                event.preventDefault();

                image = $(event.target).closest('.form-group');

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });

            // set file link
            function fmSetLink($url) {
                image.find('.image_label').first().val($url);
            }
            CKEDITOR.replace('editor1', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
</script>
@endsection