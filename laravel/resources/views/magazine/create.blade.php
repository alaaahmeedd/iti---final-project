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
                        <li class="active">Add Post</li>
                    </ol>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" role="form" method="post" action='{{route("magazine.store")}}' enctype="multipart/form-data">
                               @csrf
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Post Title 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="title" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Post Body 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="body" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                                <div class='form-group'>
                                    <label for="photo" class="col-sm-2 control-label">
                                        Photo </label>
                                        <div class="col-sm-6">
                                        <input type="file" class="form-control" id="title" name="picpath" value="">
                                    </div>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                    <br>
                                        <input type="submit" class="btn btn-success" value="Add Post">
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