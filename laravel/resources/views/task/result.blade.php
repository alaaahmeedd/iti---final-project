@extends('layouts.admin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    <i class="fal fa-book"></i> Task
                    </h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="dash"><i class="fa fa-laptop"></i> Dashboard</a>
                        </li>
                        <li class="active">Task Result</li>
                    </ol>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="page-header">
                                <a href="{{route('task.create')}}">
                                    <i class="fa fa-plus"></i>
                                    Add Task
                                </a>
                            </h5>

                            <div id="hide-table">
                                <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="col-sm-1">#</th>
                                            <th class="col-sm-3">Student Name</th>
                                            <th class="col-sm-1">Grade</th>
                                            <th class="col-sm-1">Task</th>
                                            <th class="col-sm-3">Marks</th>
                                            <th class="col-sm-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                    

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection