@extends('layouts.teacher')
@section ('content')     
<style>
.firstimg{
width:200px; 
border-radius: 50%; 
 height:180px; 
}
  
</style>
    <div class="row " style="width:70%;">
        <div class="col-xs-12" style="width:70%;">
            <div class="box">
                <div class="box-header" style=" margin-left:30px;">
                  
                <div class="col-sm-3" style="margin-top: 4%; ">
                    <div class="box box-primary" style="margin-left:70px;">
                        <div class="box-body box-profile">
                            <img src="/assets/images/{{$user->profile_photo_path}}" class="firstimg" alt="Image" />

                            <br><br>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item " style="background-color: #FFF; width: 180px">
                                    <h3 class="profile-username text-center">{{$user->id}}</h3>
                                </li>
                                <li class="list-group-item " style="background-color: #FFF ; width: 180px">
                                    <h3 class="profile-username text-center">{{$user->name}}</h3>
                                </li>
                                <li class="list-group-item " style="background-color: #FFF ; width: 180px">
                                    @if($user->role==2)
                                    <h3 class="profile-username text-center">Student</h3>
                                    @endif
                                    @if($user->role==3)
                                    <h3 class="profile-username text-center">Parent</h3>
                                    @endif
                                    @if($user->role==4)
                                    <h3 class="profile-username text-center">Teacher</h3>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9" style="margin-top: 12%;">
                    <div class="nav-tabs-custom" style="margin-left:300px;">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab" style="font-size:23px;color: #3c4254; width: 200px; fomnt-weight: 550">Account Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table>
                                            <tr>
                                                <th style="padding: 20px;"><h3 style="color: #3c4254; font-size:27px;">Name : </h3></th>
                                                <td style="padding: 20px;"><h3>{{$user->name}}</h3></td>
                                            </tr>
                                            <tr>
                                                <th style="padding: 20px;"><h3 style="color: #3c4254; font-size:27px;">Email :</h3></th>
                                                <td style="padding: 20px;"><h3>{{$user->email}}</h3></td>
                                            </tr>
                                        
                                           
                                            <tr>
                                               
                                           
                                            </tr>
                                        
                                                <th style="padding: 20px;"><h3 style="color: #3c4254; font-size:27px;">Course:</h3></th>
                                                <td style="padding: 20px;">
                                                    @foreach($user->courses as $course)
                                                   <h3> {{$course->name}}<br></h3>
                                                    @endforeach
                                                </td>
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

<div class="container">
                <div class="row">
                <div class="col-md-6 ">
    <button class="login100-form-btn " style="margin: 5%; color:azure ; margin-left: 120px;" >
        <a href='result'
         style="color:azure ;font-size: 21px;">
         Tasks</a>
         </div>
         <div class="col-md-6 ">
    </button>
    <a href="{{route('mycourses')}}" class="login100-form-btn" style="margin: 5%; color:azure; width: 170px; margin-left:-50px;">
        Reply Comments
    </a>

</div>
</div>

</div>

@endsection