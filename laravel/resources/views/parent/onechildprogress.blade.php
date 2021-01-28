@extends('layouts.parent')
@section('content')


<section class="team-content">
        <div class="container">
          <div class="head-contain">
            <span class="learn"> Learn </span>
            <h6 class="our-h6"> Guaranteed Success <h6>
            <h2 class="our-h2" > Our Team </h2>
            <p class="head-text"> Look through our school staff profiles and get to know the<br> passionate educators and administrators<br> who make our school a place of learning and growth..</p>
          </div>
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-6">
                </div>
            </div>
            </div>
            </section>





<div class="over">        
<div class="container" style="width:95%; ">
            <div class="row " style="margin-bottom:40px;" >
            <h1> <span style="font-weight:600px;color:#312c51"> Name:</span> {{$child->name}}</h1><br>
<h3><span style="font-weight:600px;color:#312c51">Grade:</span> {{$child->grade}}</h3><br><br>
            <h1 style="color:#312c51; font-weight:550; text-align:center; ">Over all progress </h1>
              </div>
          <div class="row">
            @foreach($courses as $course)
              <div class="col-md-3" style="border:solid #ddd 1px;margin:10px;box-shadow:1px 1px 10px black;padding-bottom:10px;">
              
                <br>
                <br>
                
                            <h4 style="  font-size:25px;font-weight:500;text-align:center;"> {{$course->name}}</h4 >
       @foreach($child->task as $task)
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

@endsection