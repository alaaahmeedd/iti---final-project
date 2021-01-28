@extends('layouts.admin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    <i class="fas fa-book-reader"></i> Course
                    </h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="dash"><i class="fa fa-laptop"></i> Dashboard</a>
                        </li>
                        <li class="active">Courses</li>
                    </ol>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="page-header">
                                <a href="{{route('course.create')}}">
                                    <i class="fa fa-plus"></i>
                                    Add a Course
                                </a>
                            </h5>

                            <div id="hide-table">
                                <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="col-sm-1"style="vertical-align: middle;text-align:center">#</th>
                                            <th class="col-sm-3"style="vertical-align: middle;text-align:center">Name</th>
                                            <th class="col-sm-3"style="vertical-align: middle;text-align:center">Teacher</th>
                                            <th class="col-sm-1"style="vertical-align: middle;text-align:center">Grade</th>
                                            <th class="col-sm-2"style="vertical-align: middle;text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($course as $course)
                                        <tr>
                                            <td data-title="#"style="vertical-align: middle;text-align:center">{{$course->id}}</td>
                                            <td data-title="name"style="vertical-align: middle;text-align:center">{{$course->name}}</td>
                                            <td data-title="name"style="vertical-align: middle;text-align:center">{{$course->teacher->name}}</td>
                                            <td data-title="grade"style="vertical-align: middle;text-align:center">{{$course->grade}}</td>

                                            <td data-title="Action"style="vertical-align: middle;text-align:center">
                                                <a href="{{route('course.show',$course)}}" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fas fa-eye"></i></a>

                                                <a href="{{route('course.edit',$course)}}"  class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title=><i class="fa fa-edit"></i></a>
                                                <form action='{{route("course.destroy",$course)}}' method="Post" style="display:inline-block">
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