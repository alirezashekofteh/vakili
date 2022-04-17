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
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/agent">/لیست نقش های کاربری</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/لیست نقش های کاربری</span>
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
                            <h4 class="card-title mg-b-0">لیست نقش های کاربری</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <div class="row">
                            @can('role-create')
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <a href="{{route('admin.role.create')}}" class="btn btn-indigo btn-with-icon btn-block"><i
                                        class='bx bxs-user-plus bx-sm'></i>افزودن نقش جدید</a>
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
                                        <th>نام </th>
                                        <th>نام به انگلیسی</th>
                                        <th>دسترسی ها</th>
                                        <th>امکانات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $item)
                                    <tr class="success">
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name_fa}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ jdate($item->created_at) }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{route('admin.role.edit',$item->id)}}" data-toggle="tooltip"
                                                    data-placement="bottom" title="" data-original-title="ویرایش">
                                                    <i class="bx bx-edit bx-sm text-info"></i>
                                                </a>
                                                <a data-effect="effect-rotate-bottom" data-toggle="modal" title="دسترسی" href="#modal{{$item->id}}"><i data-toggle="tooltip"
                                                    data-placement="bottom" title="" data-original-title="دسترسی ها" class='bx bxs-user-detail bx-sm text-warning'></i></a>
                                                

                                            </div>
                                        </td>

                                    </tr>
                                    <div class="modal" id="modal{{$item->id}}">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content modal-content-demo">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">دسترسی ها</h6><button aria-label="بستن" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    @php
                                                          $rolePermissions = \Spatie\Permission\Models\Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $item->id)
            ->get();
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
                        {{ $roles->appends([ 'search' => request('search') ])->links() }}
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