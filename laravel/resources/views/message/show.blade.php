@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fas fa-envelope"></i> Message</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('magazine.index')}}">Message</a></li>
                        <li class="active">View Message</li>
                    </ol>
                </div>
    
               
                <div class="col-sm-12" style="margin-top: 3%;">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Message Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table >
                                        <tr>
                                        <th style="padding: 20px;">Create Time :</th>
                                        <td style="padding: 20px;">{{$message->created_at}}</td>
                                        </tr>
                                        
                                       
                                        <th style="padding: 20px;">Message Title :</th>
                                        <td style="padding: 20px;">{{$message->subject}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Message Body :</th>
                                        <td style="padding: 20px;">{{$message->message}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Email :</th>
                                        <td style="padding: 20px;">{{$message->email}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Phone :</th>
                                        <td style="padding: 20px;">{{$message->phone}}</td>
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