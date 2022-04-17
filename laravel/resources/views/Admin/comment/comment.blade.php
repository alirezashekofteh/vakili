@extends('Admin.Layouts.master')
@section('css-page')
@endsection

@section('content')
<div class="main-content horizontal-content">
    <!-- container opened -->
    <div class="container">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin">داشبورد</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="/admin/user">/لیست نظرات</a></span>
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/لیست نظرات</span>
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
                            <h4 class="card-title mg-b-0">لیست نظرات</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>متن نظر</th>
                                        <th>کاربر</th>
                                        <th>ایمیل</th>
                                        <th>وب سایت</th>
                                        <th>نوع کامنت</th>
                                        <th>مربوط</th>
                                        <th>تاریخ ثبت</th>
                                        <th>امکانات</th>
                                        <th>تایید نمایش </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comment as $item)
                                    <tr class="success">
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->comment}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->website}}</td>
                                        <td>{{ $item->commentable_type}}</td>
                                        <td>{{ $item->commentable->name}}</td>
                        
                                        <td>{{jdate($item->created_at)}}</td>
                                        <td>
                                            <div class="row">
                                                <form id="delete-form{{$item->id}}"
                                                    action="{{ route('admin.comments.destroy' , $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a id="{{$item->id}}" data-toggle="tooltip"
                                                        data-placement="bottom" title=""
                                                        data-original-title="حذف اطلاعات"
                                                        class="delete-buttom cursor-pointer"> <i
                                                            class="bx bxs-x-square bx-sm text-danger"></i></a>
                                                </form>
                        
                        
                        
                                            </div>
                                        </td>
                                        <td>
                                            <fieldset>
                                                <div class="checkbox checkbox-info">
                                                    <input data-id="{{$item->id}}" type="checkbox"
                                                        {{ $item->approved ? 'checked' : '' }}
                                                        class="toggle-class checkbox__input"
                                                        id="checkbox{{$item->id}}">
                                                    <label for="checkbox{{$item->id}}"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                        
                                    </tr>
                                    @endforeach
                        
                        
                                </tbody>
                            </table>
                        </div>
                    </div><!-- bd -->
                    <div class="card-footer">
                        {{ $comment->appends([ 'search' => request('search') ])->links() }}
                    </div>
                </div><!-- bd -->
            </div>
            <!--/div-->

        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
</div>
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
<script>
    $(function() {

      $('.toggle-class').change(function() {

          var status = $(this).prop('checked') == true ? 1 : 0;

          var comment_id = $(this).data('id');



          $.ajax({

              type: "GET",

              dataType: "json",

              url: '/admin/changeStatuscomment',

              data: {'status': status, 'comment_id': comment_id},

              success: function(data){

              alert(data.success);

              }

          });

      })

    })

</script>
@endsection