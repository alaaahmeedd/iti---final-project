@extends('layouts.admin')
@section('content')
<section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-users"></i> User</h3>
                                <ol class="breadcrumb">
                                    <li><a href="dash"><i
                                                class="fa fa-laptop"></i> Dashboard</a></li>
                                    <li class="active">User</li>
                                </ol>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5 class="page-header">
                                            <a href="{{route('user.create')}}">
                                                <i class="fa fa-plus"></i>
                                                Add a user </a>
                                        </h5>

                                        <div id="hide-table">
                                            <table id="example1"
                                                class="table table-striped table-bordered table-hover dataTable no-footer">
                                                <thead>
                                                    <tr>
                                                        <th class="col-lg-1">#</th>
                                                        <th class="col-lg-2">Photo</th>
                                                        <th class="col-lg-2">Name</th>
                                                        <th class="col-lg-2">Email</th>
                                                        <th class="col-lg-2">Role</th>
                                                     
                                                        <th class="col-lg-2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user as $u)
                                                    <tr>
                                                        <td data-title="#">
                                                          {{$u -> id}}</td>
                                                        <td data-title="Photo">
                                                            <img src="assets/images/{{$u -> profile_photo_path}}"
                                                                width="35px" height="35px" class="img-rounded" alt="" />
                                                        </td>
                                                        <td data-title="Name">
                                                            {{$u -> name}} </td>
                                                        <td data-title="Email">
                                                           {{$u -> email}} </td>
                                                        <td data-title="Role">
                                                            {{$u -> role}} </td>
                                                       
                                                        <td data-title="Action">
                                                            <a href="{{route('user.show',$u)}}"
                                                                class='btn btn-success btn-xs mrg' data-placement='top'
                                                                data-toggle='tooltip' data-original-title='View'><i class="fas fa-eye"></i></a> <a
                                                                href="edit-user"
                                                                class='btn btn-warning btn-xs mrg' data-placement='top'
                                                                data-toggle='tooltip' data-original-title='Edit'><i
                                                                    class='fa fa-edit'></i></a> <a
                                                                href="https://demo.inilabs.net/school/v4.7/user/delete/1"
                                                                onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')"
                                                                class="btn btn-danger btn-xs mrg" data-placement="top"
                                                                data-toggle="tooltip" data-original-title="Delete"><i
                                                                    class='fa fa-trash-o'></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>


                                    </div> <!-- col-sm-12 -->
                                </div><!-- row -->
                            </div><!-- Body -->
                        </div><!-- /.box -->

                        <script>
                            var status = '';
                            var id = 0;
                            $('.onoffswitch-small-checkbox').click(function () {
                                if ($(this).prop('checked')) {
                                    status = 'chacked';
                                    id = $(this).parent().attr("id");
                                } else {
                                    status = 'unchacked';
                                    id = $(this).parent().attr("id");
                                }

                                if ((status != '' || status != null) && (id != '')) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "https://demo.inilabs.net/school/v4.7/user/active",
                                        data: "id=" + id + "&status=" + status,
                                        dataType: "html",
                                        success: function (data) {
                                            if (data == 'Success') {
                                                toastr["success"]("Success")
                                                toastr.options = {
                                                    "closeButton": true,
                                                    "debug": false,
                                                    "newestOnTop": false,
                                                    "progressBar": false,
                                                    "positionClass": "toast-top-right",
                                                    "preventDuplicates": false,
                                                    "onclick": null,
                                                    "showDuration": "500",
                                                    "hideDuration": "500",
                                                    "timeOut": "5000",
                                                    "extendedTimeOut": "1000",
                                                    "showEasing": "swing",
                                                    "hideEasing": "linear",
                                                    "showMethod": "fadeIn",
                                                    "hideMethod": "fadeOut"
                                                }
                                            } else {
                                                toastr["error"]("Error")
                                                toastr.options = {
                                                    "closeButton": true,
                                                    "debug": false,
                                                    "newestOnTop": false,
                                                    "progressBar": false,
                                                    "positionClass": "toast-top-right",
                                                    "preventDuplicates": false,
                                                    "onclick": null,
                                                    "showDuration": "500",
                                                    "hideDuration": "500",
                                                    "timeOut": "5000",
                                                    "extendedTimeOut": "1000",
                                                    "showEasing": "swing",
                                                    "hideEasing": "linear",
                                                    "showMethod": "fadeIn",
                                                    "hideMethod": "fadeOut"
                                                }
                                            }
                                        }
                                    });
                                }
                            }); 
                        </script>
                    </div>
                </div>
            </section>
@endsection