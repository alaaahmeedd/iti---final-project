@extends ('layouts.guest')
@extends ('layouts.parent')
@extends ('layouts.teacher')
@extends ('layouts.student')
@section('content')
   
<style>

.magazin{
	background-image: url('../assets/images/ma2.jpg');
	background-repeat: no-repeat;
	background-size: cover;
}
.imgcard{
	border-radius:50px 50px 50px 0px;
	background-color: whitesmoke;
	width: 370px;
	height: 380px;
    margin-top:30px;	
}

.im{
	width: 400px;
	height: 350px;
	margin-top: 45px;
   
}

.hmag{
	margin-top: -40px;
}

.bttn{
    
    text-align: center;
    font-size: 20px;
    color: #ffffff;
    font-family: 'Open Sans', sans-serif;
    
  }
  .bttn:hover{
	  color: white;
  }


</style>   






@foreach($magazines as $magazine)
<div class="magazin"> 
        
		<div class="container flex justify-content-between">
			<div class="row">
				<div class="col-md-6  imgcard">
                  
				  <h2 class="hmag">{{$magazine->title}} </h2>
				  <p class="pmag"> {{$magazine->body}}</p>
				  
				  <button  type="submit" style=" background-color: #04d2c8;
                          
                          height: 55px;
                          border-radius: 37px;
                          width : 260px;
                          font-weight: 550;
						  
						  margin-bottom:-20px;">
						  @if(Auth::user())
                          <a href="contactus" class="bttn"> Contact Us</a>
						  @else
						  <a href="/contactus" class="bttn"> Contact Us</a>
@endif
						   </button>
		        </div>
				
		
				<div class="col-md-offset-6">
				  <img class="im" src="../assets/images/{{$magazine->picpath}}"> 
					
				</div>


			</div>
		</div>
	</div>
	@endforeach
 
@endsection
