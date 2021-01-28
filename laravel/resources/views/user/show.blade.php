@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-video-camera"></i> User</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        @if($user->role ==2)
                        <li><a href="{{url('admin/student')}}">Student</a></li>
                        <li class="active">View Student</li>
                        @endif
                        @if($user->role ==3)
                        <li><a href="{{url('admin/parent')}}">Parent</a></li>
                        <li class="active">View Parent</li>
                        @endif
                        @if($user->role ==4)
                        <li><a href="{{url('admin/user')}}">Teacher</a></li>
                        <li class="active">View Teacher</li>
                        @endif
                    </ol>
                </div>
                <div class="col-sm-3" style="margin-top: 3%;">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                                    @if($user->role==2)
                            <img src="/assets/images/{{$user->profile_photo_path}}"name="photo" alt="Image" />

                            <br><br>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item " style="background-color: #FFF">
                                    <h3 class="profile-username text-center"> Role|Student</h3>
                                    @endif
                                    @if($user->role==3)
     
<ul class="list-group list-group-unbordered">
    <li class="list-group-item " style="background-color: #FFF">
                                    <h3 class="profile-username text-center">Role|Parent</h3>
                                    @endif
                                    @if($user->role==4)
                                    <img src="/assets/images/{{$user->profile_photo_path}}"name="photo" alt="Image" />

<br><br>
<ul class="list-group list-group-unbordered">
    <li class="list-group-item " style="background-color: #FFF">
                                    <h3 class="profile-username text-center">Role|Teacher</h3>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9" style="margin-top: 3%;">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Account Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table>
                                            <tr>
                                                <th style="padding: 20px;">Name :</th>
                                                <td style="padding: 20px;">{{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th style="padding: 20px;">Email :</th>
                                                <td style="padding: 20px;">{{$user->email}}</td>
                                            </tr>
                                        
                                            @if($user->role==2)
                                            <tr>
                                                <th style="padding: 20px;">Grade :</th>
                                                <td style="padding: 20px;">{{$user->grade}}</td>
                                            </tr>
                                            <tr>
                                                <th style="padding: 20px;">Parent Name :</th>
                                                @if($user->parent)
                                                <td style="padding: 20px;">{{$user->parent->name}}</td>
                                                @endif
                                            </tr>
                                            @endif
                                            @if($user->role==3)
                                            <tr>
                                                <th style="padding: 20px;">Child Name :</th>
                                                <td style="padding: 20px;">
                                                    @foreach($user->children as $child)
                                                    {{$child->name}}<br>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @endif
                                            @if($user->role==4)
                                            <tr>
                                                <th style="padding: 20px;">Course :</th>
                                                <td style="padding: 20px;">
                                                    @foreach($user->courses as $course)
                                                    {{$course->name}}<br>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @endif
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



