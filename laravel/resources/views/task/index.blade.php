@extends('layouts.admin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    <i class="fas fa-tasks"></i> Task
                    </h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="dash"><i class="fa fa-laptop"></i> Dashboard</a>
                        </li>
                        <li class="active">Task</li>
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
                                            <th class="col-sm-1"style="vertical-align: middle;text-align:center">#</th>
                                            <th class="col-sm-3"style="vertical-align: middle;text-align:center">Task Name</th>
                                            <th class="col-sm-1"style="vertical-align: middle;text-align:center">Grade</th>
                                            <th class="col-sm-3"style="vertical-align: middle;text-align:center">Course</th>
                                            <th class="col-sm-2"style="vertical-align: middle;text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($task as $task)
                                        <tr>
                                            <td data-title="#"style="vertical-align: middle;text-align:center">{{$task->id}}</td>
                                            <td data-title="name"style="vertical-align: middle;text-align:center">{{$task->name}}</td>
                                            
                                           

                                            <td data-title="Action"style="vertical-align: middle;text-align:center">
                                                <a href="{{route('task.edit',$task)}}"  class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title=><i class="fa fa-edit"></i></a>
                                                <form action='{{route("task.destroy",$task)}}' method="Post" style="display:inline-block">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-danger btn-xs mrg"><i class="fa fa-trash-o"> </i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
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