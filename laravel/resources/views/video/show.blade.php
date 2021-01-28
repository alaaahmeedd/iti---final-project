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
                        <li class="active">View Video </li>
                    </ol>
                </div>
                <div class="col-sm-3" style="margin-top: 3%;">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <img src="{{url('/assets/images/'.$videos->picpath)}}" alt="Image"/>
                          
                          <br><br>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item " style="background-color: #FFF">
                                <h3 class="profile-username text-center">{{$videos->title}}</h3>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9" style="margin-top: 3%;">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Video Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table >
                                        <tr>
                                        <th style="padding: 20px;">Upload Time :</th>
                                        <td style="padding: 20px;">{{$videos->created_at}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Update Time :</th>
                                        <td style="padding: 20px;">{{$videos->updated_at}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Video Title :</th>
                                        <td style="padding: 20px;">{{$videos->title}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Video Category :</th>
                                        <td style="padding: 20px;">{{$videos->category}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Video Picture :</th>
                                        <td style="padding: 20px;">{{$videos->picpath}}</td>
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