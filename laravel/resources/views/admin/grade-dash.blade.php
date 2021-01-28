@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-signal"></i> Grade</h3>


                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li class="active">Grade</li>
                    </ol>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <h5 class="page-header">
                                <a href="add-grade">
                                    <i class="fa fa-plus"></i>
                                    Add a grade </a>
                            </h5>

                            <div id="hide-table">
                                <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1">#</th>
                                            <th class="col-lg-2">Grade Name</th>
                                            <th class="col-lg-2">Grade Point</th>
                                            <th class="col-lg-2">Mark From</th>
                                            <th class="col-lg-2">Mark Upto</th>
                                            <th class="col-lg-1">Note</th>
                                            <th class="col-lg-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title="#">
                                                1 </td>
                                            <td data-title="Grade Name">
                                                A+ </td>
                                            <td data-title="Grade Point">
                                                5.00 </td>
                                            <td data-title="Mark From">
                                                80 </td>
                                            <td data-title="Mark Upto">
                                                100 </td>
                                            <td data-title="Note">
                                                Excellent </td>

                                            <td data-title="Action">
                                                <a href="edit-grade" class='btn btn-warning btn-xs mrg' data-placement='top' data-toggle='tooltip' data-original-title='Edit'><i class='fa fa-edit'></i></a> 
                                                <a href="https://demo.inilabs.net/school/v4.7/grade/delete/1" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class='fa fa-trash-o'></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div> <!-- col-sm-12 -->
                    </div><!-- row -->
                </div><!-- Body -->
            </div><!-- /.box -->
        </div>
    </div>
</section>
@endsection