@extends('layouts.student')
@section('content')
<style>
body{
    background-color:#18191A;
}

.cname{
	font-family: 'Raleway', sans-serif;
	padding-bottom:30px;
    font-weight: 800;
    font-size: 30px;
	color: #797B7E;
	margin-left: 10px; 
	display:inline-block ;
   
}

</style>
<div class="container text-center"style="width:400px; margin-top:10px">
<h1 class="cname" style="padding:10px; color:white">{{$coursevideo->name}}</h1>
</div>

<div class='youtube  d-flex justify-content-center' align='center' >
<iframe width='700' height='400' src={{$coursevideo->url}} frameborder='0'  allowfullscreen ></iframe>  
</div>
<div class="container-fluid" style="background-color:#18191A;">
    <br>
    <div class="container">
    <h1 class="cname" style="color:white">Comments</h1><br>
        @foreach($coursevideo->comments as $comment)
        <img src= "../assets/images/{{$comment->user->profile_photo_path}}" style="width:50px;border-radius:50%;"> 

        <h5 class="cname" style="display:inline;"> {{$comment->user->name}}</h5>
        <div class="container" style="width:50%; background-color:#242526; border-radius:0px 30px 30px 30px; height:90px;padding:15px;margin-left:50px;">
    
            <h4 style="color:white; padding:20px">{{$comment->comment}}</h4>
            
            </div>
                    @foreach($comment->reply as $reply)
                    <br>
                    <div class="container" style="width:50%; background-color:#242526; border-radius:30px 0px 30px 30px; height:90px;padding:15px;margin-left:10%; display:inline-block">
                        <h3 style="color:white">{{$reply->reply}}</h3>
                      </div>
                        <br>
                     
                    @endforeach
                    <br>
        
        @endforeach
    
    <br>
    <form action="{{route('comment.store')}}" method="post" style="margin-left:30px">
    @csrf 
    <input type="hidden" name="videoid" value={{$coursevideo->id}}>
    <input type="hidden" name="studentid" value={{Auth::user()->id}}>
    <textarea class="form-control" name="comment" placeholder=" enter your question" style="border:solid grey 1px; width:50%"></textarea><br>
    <button type="submit" style="background-color:#797B7E; width:20% ; border-radius:30px">Comment</button>
    </form>
</div>
</div>

@endsection