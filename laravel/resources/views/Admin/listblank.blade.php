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
                    <h4 class="content-title mb-0 my-auto">صفحات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                        خالی</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-info btn-icon ml-2"><i
                            class="mdi mdi-filter-variant"></i></button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-warning  btn-icon ml-2"><i
                            class="mdi mdi-refresh"></i></button>
                </div>
                <div class="mb-3 mb-xl-0">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary">20 مهر 1399</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">انتخاب کنید</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                            data-x-placement="bottom-end">
                            <a class="dropdown-item" href="#">1396</a>
                            <a class="dropdown-item" href="#">1397</a>
                            <a class="dropdown-item" href="#">1398</a>
                            <a class="dropdown-item" href="#">1399</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">ردیف های خط دار</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 tx-gray-500 mb-2">نمونه ای از ردیف های راه راه والکس .. <a href="#">بیشتر
                                بدانید</a></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>نام</th>
                                        <th>موقعیت</th>
                                        <th>حقوق</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>جوآن پاول</td>
                                        <td>همیار توسعه دهنده</td>
                                        <td>450،870 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>گاوین گیبسون</td>
                                        <td>مدیر حساب</td>
                                        <td>230540 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>جولیان کر</td>
                                        <td>توسعه دهنده ارشد Javascript</td>
                                        <td>55300 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>سدریک کلی</td>
                                        <td>حسابدار</td>
                                        <td>234100 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>سامانتا می</td>
                                        <td>نویسنده فنی جوان</td>
                                        <td>43198 تومان</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- bd -->
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->

        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection