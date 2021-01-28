@extends('layouts.admin') 
 @section('content')
 <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fal fa-book"></i></i> Task</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('task.index')}}">Task</a></li>
                        <li class="active">Edit Post</li>
                    </ol>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" role="form" method="post" action='{{route("task.update",$task)}}'>
                               @csrf
                               @method('put')
                               <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        task Name 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="name" value="{{$task->name}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                       Task Link 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="url" value="{{$task->url}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                       Result Link 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="result" value="{{$task->result}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                       Video ID
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="video_id" value="{{$task->video_id}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" value="Update Task">
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