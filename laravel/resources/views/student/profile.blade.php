@extends('layouts.student')
@section ('content')
<style>
#pro{
  width:250x; 
  height:180px;
  border-radius:50%
   
}
.over{
  margin-top:120px;
  margin-left:-440px;
}
</style>
<div class="row " style="width:70%; height:900px;>
        <div class="col-xs-12" style="width:70%;">
            <div class="box">
                <div class="box-header" >
                  
                <div class="col-sm-3" style="margin-top: 4%; ">
                    <div class="box box-primary" style="margin-left:70px;">
                        <div class="box-body box-profile">
                            <img src="/assets/images/{{$user->profile_photo_path}}" id="pro" alt="Image" />
                            <br><br>
                            <ul class="list-group list-group-unbordered"> 
                                <li class="list-group-item "style=" width:180px;">
                                    <h3 class="profile-username text-center">{{$user->id}}</h3>
                                </li>
                                <li class="list-group-item " style="background-color: #FFF; width:180px;">
                                    <h3 class="profile-username text-center">{{$user->name}}</h3>
                                </li>
                                <li class="list-group-item " style="background-color: #FFF;  width:180px;">
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
                <div class="col-sm-9" style="margin-top: 4%; ">
                    <div class="nav-tabs-custom" style="margin-left:200px; margin-top:130px;">
                        <ul class="nav nav-tabs"style="width:400px;">
                            <li class="active" style="display:inline;"><a href="#profile" data-toggle="tab" style="font-size:21px;color: #3c4254;">Account Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table>
                                            <tr>
                                                <th style="padding: 20px;"><h3 style="color: #3c4254; font-size:27px;">Name: </h3></th>
                                                <td style="padding: 20px;"><h3>{{$user->name}}</h3></td>
                                            </tr>
                                            <tr>
                                                <th style="padding: 20px;"><h3 style="color: #3c4254; font-size:27px;">Email:</h3></th>
                                                <td style="padding: 20px;"><h3>{{$user->email}}</h3></td>
                                            </tr>
                                        
                                           
                                          
                                            
                                           
                                        </table>
                                      </div>
                                 </div>
                               </div>
                             </div>
                           <div>
                         </div>
                         
                         <div style="border-bottom: 1px solid #ddd;"></div>
<div class="over">        
<div class="container" style="width:95%; ">
            <div class="row " style="margin-bottom:40px;margin-left:450px;" >
            <h1 style="color:#312c51; font-weight:550; text-align:center; ">Over all progress </h1>
              </div>
          <div class="row">
            @foreach($courses as $course)
              <div class="col-md-3" style="border:solid #ddd 1px;margin:10px;box-shadow:1px 1px 10px black;padding-bottom:10px;">
              
                <br>
                <br>
                
                            <h4 style="  font-size:25px;font-weight:500;text-align:center;"> {{$course->name}}</h4 >
       @foreach($user->task as $task)
        @if($course->name == $task->coursevideo->course->name )
   <br>
        <h4 style=" font-size:20px;border-top:1px solid grey;padding-top:5px;"><span style="font-weight:550; color:#3c4254; font-size: 16px; display:inline;letter-spacing:0.5px;">TaskName:  </span>{{$task->name}} </h4>
        <h4 style=" font-size:20px;"><span style="font-weight:550; color:#3c4254; font-size: 16px; display:inline;letter-spacing:0.5px;">Marks:  </span>{{$task->pivot->marks}} </h4>
        
        <meter  style="display:inline; width:90%;" min="0" max="100" value={{$task->pivot->marks}} low="55" high="100" optimum="60">2 out of 10</meter><br>
        @endif
    @endforeach
</div>
@endforeach
</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    @endsection
