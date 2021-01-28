@extends('layouts.teacher')
@section('content')



<style>
.cname{
	font-family: 'Raleway', sans-serif;
	padding-bottom:30px;
    font-weight: 800;
    font-size: 30px;
	color: #312c51;
	margin-left: 36px; 
	
   
}
</style>


@foreach($courses as $course)
<br>
<h1 class="cname">{{$course->name}}</h1>
       <div class="row" style="margin-right:0px">
        @foreach($course->coursevideos as $video)
        
            <div class="col-sm-6 col-md-2 ">
                <div class="thumbnail" style="width:200px">
                <img src="/assets/images/{{$video->image}}" style="width:200px">
                <div class="caption">
                <a href='/result/{{$video->id}}' style="font-size:20px;font-weight:550">{{$video->name}}</a>
                
                </div>
                </div>
            </div>
        @endforeach
        </div>

@endforeach
@endsection