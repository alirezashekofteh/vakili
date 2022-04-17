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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/agent">/لیست فاکتور ها</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/لیست فاکتور ها</span>
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
                            عملیات فاکتور
                        </div>
                        <form action="" method="POST">
                            @csrf
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">ازتاریخ :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text" id="date1" style="cursor: pointer;">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
										</div>
                                        <input id="time_start" class="form-control ltr text-left" name="time_start"
                                        value="{{old('time_start')}}" type="text" />
                                    <input id="date_start"  name="date_start" required="" value="{{request('date_start')}}" type="hidden" />
									</div>
                                </div>
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">تا تاریخ :</label>
                                </div>
                                <div class="col-md-3 mg-t-5 mg-md-t-0">
                                    <div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text" id="date2" style="cursor: pointer;">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
										</div>
                                        <input id="time_end" class="form-control ltr text-left" name="time_end"
                                        value="{{old('time_end')}}" type="text" />
                                    <input id="date_end" value="{{request('date_end')}}" name="date_end" required="" value="" type="hidden" />
									</div>
                                </div>

                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-success btn-with-icon btn-block"><i
                                            class='bx bxs-calendar-check bx-sm'></i>جستجو</button>
                                </div>

                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">لیست محصولات از دست رفته</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>کد محصول</th>
                                        <th>نام محصول</th>
                                        <th>خودرو</th>
                                        <th>گروه</th>
                                        <th>قیمت</th>
                                        <th>تعداد از دست رفته</th>
                                        <th>تاریخ ثبت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                    <tr class="success">
                                        <input type="hidden" name="id[]" value="{{$item->id}}">
                                        <td>{{ $item->product_id}}</td>
                                        <td>{{ $item->product->name}}</td>
                                        <td>{{ $item->product->car->name}}</td>
                                        <td>{{ $item->product->cat->name}}</td>
                                        <td>{{number_format($item->order->cost)}}</td>
                                        <td>{{ $item->tedad}}</td>
                                        <td>{{ jdate($item->created_at)}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div><!-- bd -->
                    </div><!-- bd -->
                    <div class="card-footer">
                        {{ $orders->appends([ 'date_start' => request('date_start'),'date_end' => request('date_end'),'search' => request('search') ])->links() }}
                    </div>
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
@section('js-page')
<script type="text/javascript">
    $('#date1').MdPersianDateTimePicker({
        targetTextSelector: '#time_start',
        targetDateSelector: '#date_start',
        fromDate: true,
        groupId: 'rangeSelector1',
        textFormat: 'yyyy-MM-dd HH:mm:ss',
        dateFormat: 'yyyy-MM-dd HH:mm:ss',
        enableTimePicker: true,
        englishNumber:true
    });
    $('#date2').MdPersianDateTimePicker({
        targetTextSelector: '#time_end',
        targetDateSelector: '#date_end',
        toDate: true,
        groupId: 'rangeSelector1',
        textFormat: 'yyyy-MM-dd HH:mm:ss',
        dateFormat: 'yyyy-MM-dd HH:mm:ss',
        enableTimePicker: true,
        englishNumber:true
    });
</script>
@endsection