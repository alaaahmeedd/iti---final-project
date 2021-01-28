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
                        <li class="active">View Post</li>
                    </ol>
                </div>
                <div class="col-sm-3" style="margin-top: 3%;">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <img src="{{url('/assets/images/'.$magazine->picpath)}}" alt="Image" style="width:250px;height:200px">
                            <!-- <img src="public/assests/images/{{$magazine->picpath}}" -->
                             <!-- class="profile-user-img img-responsive img-circle" alt=""> -->
                          <br><br>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item " style="background-color: #FFF">
                                <h3 class="profile-username text-center">{{$magazine->title}}</h3>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9" style="margin-top: 3%;">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Post Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table >
                                        <tr>
                                        <th style="padding: 20px;">Create Time :</th>
                                        <td style="padding: 20px;">{{$magazine->created_at}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Update Time :</th>
                                        <td style="padding: 20px;">{{$magazine->updated_at}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Post Title :</th>
                                        <td style="padding: 20px;">{{$magazine->title}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Post Body :</th>
                                        <td style="padding: 20px;">{{$magazine->body}}</td>
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