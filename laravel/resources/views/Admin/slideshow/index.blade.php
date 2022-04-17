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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/post">/لیست اسلایدشو</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/لیست اسلایدشو</span>
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
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">لیست اسلایدشو</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <div class="row">
                           
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <form action="" method="GET">
                                  
                                <div class="input-group">
                                    <input class="form-control" placeholder="جستجو برای ..." value="{{request('search')}}" name="search" type="text"> <span
                                        class="input-group-btn"><button class="btn btn-primary" type="submit"><span
                                                class="input-group-btn"><i
                                                    class="fa fa-search"></i></span></button></span>
                                </div><!-- input-group -->
                            </form>
                            </div>
                       
                            @can('slideshow-create')
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <a href="{{route('admin.slideshow.create')}}" class="btn btn-indigo btn-with-icon btn-block"><i
                                        class='bx bxs-user-plus bx-sm'></i>افزودن اسلایدشو </a>
                            </div>
                            @endcan
                         
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>عنوان</th>
                                        <th>لینک</th>
                                        <th>نمایش در سایت</th>
                                       
                                        <th>تاریخ ایجاد</th>
                                        <th>آخرین ویرایش</th>
                                        <th>امکانات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slideshow as $item)
                                    <tr class="success">
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->link}}</td>
                                        <td>{{config('value.truefalse.'.$item->active)}}</td>
                                        <td>{{jdate($item->created_at)}}</td>
                                        <td>{{jdate($item->updated_at)->ago()}}</td>

                                        <td>
                                            <div class="row">
                                                <a href="{{route('admin.slideshow.edit',$item->id)}}"
                                                    data-toggle="tooltip" data-placement="bottom" title=""
                                                    data-original-title="ویرایش">
                                                    <i class="bx bx-edit bx-sm text-info"></i>
                                                </a>
                                                <form id="delete-form{{$item->id}}"
                                                    action="{{ route('admin.slideshow.destroy' , $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a id="{{$item->id}}" data-toggle="tooltip"
                                                        data-placement="bottom" title=""
                                                        data-original-title="حذف اطلاعات"
                                                        class="delete-buttom" style="cursor: pointer"> <i
                                                            class="bx bxs-x-square bx-sm text-danger"></i></a>
                                                </form>


                                            </div>
                                        </td>


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div><!-- bd -->
                    </div><!-- bd -->
                    <div class="card-footer">
                        {{ $slideshow->appends([ 'search' => request('search') ])->links() }}
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
<script>
    $('.delete-buttom').on('click', function (e) {
            e.preventDefault();
            var $this = $(this);
            var id =$(this).attr("id");
            Swal.fire({
                title: 'آیا اطمینان دارید؟',
                text: "این عملیات برگشت پذیر نیست...",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله ،حذف شود!',
                cancelButtonText:'لغو عملیات'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-form'+id).submit();
                }
            })
        });
</script>
@endsection