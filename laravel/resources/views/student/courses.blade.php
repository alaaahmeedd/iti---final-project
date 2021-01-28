@extends('layouts.student')
@section ('content')
<style>

.cname{
	font-family: 'Raleway', sans-serif;
	padding: 10px;
    font-weight: 800;
    font-size: 27px;
	color:#323267;
	margin-left: 10px; 
	display:inline-block ;
}
</style>
<header id="head" class="secondary">
            <div class="container" id="page">
                    <h1 class="head" style="margin-top: 40px;">Courses</h1>
                    
                </div>
				<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	</header>
	
	<!-- ----------------------------------------------------------------------------------- -->

	<!-- ----------------------------------------------------------------------------------- -->


<!-- ---------------------------------------------------------------------------------------------------------------- -->

<!-- ---------------------------------------------------------------------------------------------------------------- -->

	
	<div class="container">
		@foreach($courses as $course)	
				<div class="row">	
							
							<h2 class="cname">{{$course->name}}</h2>
							<br>
							<br>
							@foreach ($course->coursevideos as $coursevideo )
							<div class='col-lg-3'>
										<a href="{{route('coursevideo.show',$coursevideo)}}"><img src= "../assets/images/{{$coursevideo->image}}" alt="Barca" class="img-responsive " style="width:200px;height:150px; max-width:100% border-raduis:50%;" id={{ asset($coursevideo->url) }} /></a>
										<br>
										<h3 style="color:grey;">{{$coursevideo->name}}</h3>
										<form style="display:none">

											<input  type="hidden" name="videoid" value={{ $coursevideo->id}}>
											<textarea name="comment"  cols="100" rows="5"></textarea>
											<input class="btn btn-success" type="submit" value="comment">
										</form>
										@if(count($coursevideo->task)>0)

										<a href="{{$coursevideo->task[0]->url}}" class="btn btn-dark"> Task
										 {{$coursevideo->name}} </a> 
										 @endif

								
								
				</div>
						@endforeach
			</div>
		@endforeach
	
	</div>
	
	
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.cslider.js"></script>
	<script src="../assets/js/jquery.isotope.min.js"></script>
	<script src="../assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>

	</div>
	</div>
@endsection