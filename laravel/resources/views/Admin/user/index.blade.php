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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/user">/لیست کارمندان</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/لیست کارمندان</span>
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
                            <h4 class="card-title mg-b-0">لیست کارمندان</h4>
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
                            @can('user-create')
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <a href="{{route('admin.user.create')}}" class="btn btn-indigo btn-with-icon btn-block"><i
                                        class='bx bxs-user-plus bx-sm'></i>افزودن کارمند</a>
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
                                        <th>نام و نام خانوادگی</th>
                                        <th>موبایل</th>
                                        <th>ایمیل</th>
                                        <th>تاریخ ایجاد</th>
                                        <th>امکانات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                    <tr class="success">
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->nf}}</td>
                                        <td>{{ $item->mobile}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ jdate($item->created_at) }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{route('admin.user.edit',$item->id)}}" data-toggle="tooltip"
                                                    data-placement="bottom" title="" data-original-title="ویرایش">
                                                    <i class="bx bx-edit bx-sm text-info"></i>
                                                </a>
                                                <form id="delete-form{{$item->id}}"
                                                    action="{{ route('admin.user.destroy' , $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a id="{{$item->id}}" href="" data-toggle="tooltip"
                                                        data-placement="bottom" title=""
                                                        data-original-title="حذف اطلاعات"
                                                        class="delete-buttom"> <i
                                                            class="bx bxs-x-square bx-sm text-danger"></i></a>
                                                </form>
                                                <a data-effect="effect-rotate-bottom" data-toggle="modal" title="" href="#modal{{$item->id}}"><i data-toggle="tooltip"
                                                    data-placement="bottom" title="" data-original-title="نقش های کاربری" class='bx bxs-user-detail bx-sm text-warning'></i></a>

                                            </div>
                                        </td>

                                    </tr>
                                    <div class="modal" id="modal{{$item->id}}">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content modal-content-demo">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">نقش های کاربری</h6><button aria-label="بستن" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    @php
                                                          $rolePermissions = $item->roles()->get();
                                                    @endphp
                                                    @if(!empty($rolePermissions))
                                                        @foreach($rolePermissions as $v)
                                                            <label class="badge badge-primary">{{ $v->name_fa }}</label>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">بستن</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </tbody>
                            </table>
                        </div><!-- bd -->
                    </div><!-- bd -->
                    <div class="card-footer">
                        {{ $user->appends([ 'search' => request('search') ])->links() }}
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