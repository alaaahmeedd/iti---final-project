@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-video-camera"></i> Course</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('course.index')}}">Course</a></li>
                        <li class="active">Edit Course</li>
                    </ol>
                </div>
                <div class="col-sm-3" style="margin-top: 3%;">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                       
                            <ul class="list-group list-group-unbordered">
                                <h3 class="profile-username text-center">Course Name:</h3>
                                <li class="list-group-item " style="background-color: #FFF;text-align:center">
                               <h4> {{$course->name}}</h4>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9" style="margin-top: 3%;">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Course Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table >
                                        <tr>
                                        <th style="padding: 20px;">Course Name :</th>
                                        <td style="padding: 20px;">{{$course->name}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Year :</th>
                                        <td style="padding: 20px;">{{$course->grade}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Teacher :</th>
                                        <td style="padding: 20px;">{{$course->teacher->name}}</td>
                                        </tr>
                                        
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>              
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection