@extends('layouts.admin') 
 @section('content')
 <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="far fa-newspaper"></i> Magazine</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('magazine.index')}}">Magazine</a></li>
                        <li class="active">Edit Post</li>
                    </ol>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" role="form" method="post" action='{{route("magazine.update",$magazine)}}'>
                               @csrf
                               @method('put')
                               <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Post Title 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$magazine->title}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Post Body 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="body" value="{{$magazine->body}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>



                             

                                <div class='form-group'>
                                    <label for="photo" class="col-sm-2 control-label">
                                        Photo </label>
                                        <div class="col-sm-6">
                                        <input type="file" class="form-control" id="title" name="picpath" value="{{$magazine->picpath}}">
                                   <br>
                                    </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" value="Update Post">
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