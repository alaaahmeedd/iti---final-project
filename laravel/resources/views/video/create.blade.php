@extends('layouts.admin') 
 @section('content')
 <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fas fa-video"></i> Video</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('videos.index')}}">Video</a></li>
                        <li class="active">Add Video</li>
                    </ol>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" role="form" method="post" action='{{route("videos.store")}}'>
                               @csrf
                              
                               <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Video Name 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="title" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                    
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                      Category
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="category" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                       Video Link 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="url" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                       Picture 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" id="title" name="photo" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>



                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" value="Add video">
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