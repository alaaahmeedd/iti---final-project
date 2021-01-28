@extends('layouts.teacher')

@section('content')
@foreach($video->comments as $comment)
@if(count($comment->reply)==0)
<br><br>
<div class="container" style="border:solid grey 1px;background-color:white;box-shadow:1px 1px 10px black;"><br>
<div class="container-fluid" style="">
<img src="/assets/images/{{$comment->user->profile_photo_path}}" style="width:50px;border-radius:50%;" >
<h3 style="display:inline;">{{$comment->user->name}}</h3><br>


<p class="lead" style="color:black;background-color:#a2b9bc;padding: 20px; border-radius: 0px 30px 30px 30px; width:50%; margin-left:50px">{{$comment->comment}}</p>


</div>
<br><br>
<div class="container">
    <form action="{{route('reply.store')}}" method="post">
    @csrf 
    <input type="hidden" name="commentid" value={{$comment->id}}>
    <input type="hidden" name="videoid" value={{$comment->video->id}}>
    <textarea name="reply" class="form-control" placeholder="enter your reply" style="border:solid grey 1px; width:50%"></textarea>
    <br>
    <button type="submit" style="background-color: #312c51; width: 200px; border-radius: 30px">reply</button>
    </form>
<br>
</div>
</div>
@endif
@endforeach
@endsection