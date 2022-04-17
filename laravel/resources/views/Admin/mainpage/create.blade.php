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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/post">لیست مطالب</a></span>
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
                          تغییر اطلاعات اصلی وب سایت
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
                        <form action="{{ route('admin.mainpage.index')}}" method="post">
                            @csrf
                        <div class="row my-2 py-50">
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">اینستگرام </h6>
                                <input type="text" class="form-control" value="{{old('insta',$mainpage->insta)}}" name="insta" >
                            </div>
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">توییتر </h6>
                                <input type="text" class="form-control" value="{{old('toeet',$mainpage->toeet)}}" name="toeet">
                            </div>
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">فیس بوک </h6>
                                <input type="text" class="form-control" value="{{old('face',$mainpage->face)}}" name="face">
                            </div>
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">لینک دین </h6>
                                <input type="text" class="form-control" value="{{old('linkdin',$mainpage->linkdin)}}" name="linkdin">
                            </div>
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">واتس آپ </h6>
                                <input type="text" class="form-control" value="{{old('whatsapp',$mainpage->whatsapp)}}" name="whatsapp">
                            </div>
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">تلگرام </h6>
                                <input type="text" class="form-control" value="{{old('telegram',$mainpage->telegram)}}" name="telegram">
                            </div>
                            <div class="col-sm-12 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">آدرس </h6>
                                <input type="text" class="form-control" value="{{old('adress',$mainpage->adress)}}" name="adress">
                            </div>
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">تلفن </h6>
                                <input type="text" class="form-control" value="{{old('tel',$mainpage->tel)}}" name="tel">
                            </div>
                            <div class="col-sm-6 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">ایمیل </h6>
                                <input type="text" class="form-control" value="{{old('email',$mainpage->email)}}" name="email">
                            </div>
                            <div class="col-sm-12 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">انتخاب تصویر درباره ما صفحه اصلی</h6>
                                    <fieldset class="invoice-address form-group">
                                        <div class="input-group col-sm-12" style="height: 35px">
                                            <input type="text" id="file_label" class="form-control image_label ltr" value="{{old('picabout',$mainpage->picabout)}}" name="picabout"
                                                   aria-label="File" aria-describedby="button-file">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger button-image " type="button" id="button-file">انتخاب تصویر</button>
                                            </div>
                                        </div>
                                    </fieldset>

                            </div>

                            <div class="col-sm-12 col-12 order-2 order-sm-1 justify-content-end">
                                <h6 class="text-info">انتخاب لوگو</h6>
                                    <fieldset class="invoice-address form-group">
                                        <div class="input-group col-sm-12" style="height: 35px">
                                            <input type="text" id="file_label" class="form-control image_label ltr" value="{{old('logo',$mainpage->logo)}}" name="logo"
                                                   aria-label="File" aria-describedby="button-file">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger button-image " type="button" id="button-file">انتخاب تصویر</button>
                                            </div>
                                        </div>
                                    </fieldset>

                            </div>

                            <div class="col-sm-12 col-12 order-1 order-sm-1 justify-content-end">
                                <h6 class="invoice-to">متن درباره ما صفحه اصلی</h6>
                                <textarea  class="form-control rtl" id="editor1" name="about">{{old('about',$mainpage->about)}}</textarea>
                            </div>
                            <div class="col-sm-12 col-12 order-1 order-sm-1 justify-content-end">
                                <h6 class="invoice-to">متن درباره ما فوتر</h6>
                                <textarea  class="form-control rtl" name="aboutfooter">{{old('aboutfooter',$mainpage->aboutfooter)}}</textarea>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- invoice action  -->
        <div class="col-xl-3 col-md-4 col-12">
            <div class="card invoice-action-wrapper shadow-none border">
                <div class="card-body">
                    <div class="invoice-action-btn mb-1 d-flex">
                        <div class="w-50 mr-50">
                            <button type="submit" class="btn btn-success btn-block">
                                <span class="text-nowrap">ذخیره</span>
                            </button>
                        </div>
                        <div class="w-50">
                            <a href="{{route('admin.post.index')}}" class="btn btn-warning btn-block">
                                <span class="text-nowrap">بازگشت</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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