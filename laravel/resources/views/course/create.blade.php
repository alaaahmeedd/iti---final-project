@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fas fa-book-reader"></i> Course</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('course.index')}}">Course</a></li>
                        <li class="active">Add Course</li>
                    </ol>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" role="form" method="post" action='{{route("course.store")}}'>
                               @csrf
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Course Name 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="name" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Teacher ID 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="teacher_id" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                              


                                <div class='form-group'> <label for="classesId" class="col-sm-2 control-label">
                                        Year 
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="grade" id='classesId' class='form-control select2'>
                                            <option value="0">Select Class</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                            <option value="6">Six</option>
                                        </select>
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                                <div class='form-group'>

                                </div>

                                <!-- <div class='form-group'> <label for="subjectId" class="col-sm-2 control-label">
                                        Teacher </label>
                                    <div class="col-sm-6">
                                        <select name="subjectId" id='subjectId' class='form-control select2'>
                                            <option value="0">Select Subject</option>
                                        </select>
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div> -->

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" value="Add Course">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection