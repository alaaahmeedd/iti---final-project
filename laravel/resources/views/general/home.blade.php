@extends ('layouts.guest')
@extends ('layouts.parent')
@extends ('layouts.teacher')
@extends ('layouts.student')
@section('content')
<!-- Header -->
<link rel="stylesheet" href="../assets/css/style2.css">
<header id="head">
		<div class="container" id="page">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">Start Online Education</h1> <br/>
							<p>Free Online education template for elearning and online education institute.</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="../assets/images/slides/thumbs/img1.jpg" data-src="../assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="../assets/images/slides/thumbs/img2.jpg" data-src="../assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="../assets/images/slides/thumbs/img3.jpg" data-src="../assets/images/slides/img3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->
<section class="features">
  <div class="container-fluid">
    <div class="row" >

      <div class=" col-md-3">
        <div class="grey-box-icon b2" style="color:#fff; background:#04d2c8">
          <i class="fa fa-star text-center" style="font-size: 40px;"></i> 
          <h4>Parental View</h4>
          <p class="meetpar">As the parent of an Online School student, you’ll notice the benefits of our online model immediately.</p>
             <p><a href="/parent" class="read"><em>Read More</em></a></p>
             <div class="cycle" style="background-color:#312c51;"> “ </div>
        </div><!--grey box -->
      </div>
				
					<div class="col-xs-6 col-md-3">
						<div class="grey-box-icon b1" style="color:#fff; background:#312c51;">
              <i class="fa fa-book text-center" style="font-size: 40px;"></i> 
							<h4>Meet our Staff</h4>
							<p class="meetpar">Look through our school staff profiles and get to know the passionate educators and administrators who make our school a place of learning and growth.</p>
                 <p><a href="/aboutus/#sttaf" class="read"><em>Read More</em></a></p>
                 <div class="cycle" style="background-color:#04d2c8"> “ </div>
						</div><!--grey box -->
          </div><!--/span3-->
          
         <!--/span3-->
          
					<div class="col-xs-6 col-md-3">
						<div class="grey-box-icon b3" style="color:#fff; background:#04d2c8"> 
              <i class="fa fa-star text-center" style="font-size: 40px;"></i>
							<h4>OnlineMagazine</h4>
							<p class="meetpar">An online magazine shares some features with a blog and also with online newspapers, but can usually be distinguished by its approach .</p>
                 <p>
@if(Auth::user())
                 <a x href="magazine" class="read"><em>Read More</em></a>
@else 
                  <a x href="/guest/magazine" class="read"><em>Read More</em></a>
@endif   

                 </p>
                 <div class="cycle" style="background-color: #312c51"> “ </div> 
                 
            </div><!--grey box -->
            <br><br>
          </div>
          
          <div class="col-xs-6 col-md-3">
						<div class="grey-box-icon b4" style="color:#fff; background:#312c51;">
              <i class="fa fa-book text-center" style="font-size: 40px;"></i> 
							<h4>Demo Videos</h4>
							<p class="meetpar">A product demonstration video illustrates how our school works by showing it in action. .</p>
                 <p><a href="/videos" class="read"><em>Read More</em></a></p>
                 <div class="cycle" style="background-color:#04d2c8"> “ </div>
						</div><!--grey box -->
          </div><!--/span3-->
          <!--/span3-->
          <!-- <div class="limg">
            <br><br>
            <img src="assets/images/h3-img-2.png" style="background-color: transparent;"></div>
				
				</div> -->
    </div>
    <!-- start collap-->
    <section class="collap">
      <div class="container" >

        <div class="head-contain">
                            <span class="learn"> videos </span>
                            <h6 class="our-h6"> Guaranteed Success <h6>
                            <h2 class="our-h2"style="font-style: italic" > New videos </h2>

        @foreach($videos as $video)
                            <div class="col-sm-12 col-md-6 col-lg-4 carimg ">
                                <div class="card popular-courses" style="width:30rem;height:27;">
                                    <div class="card-img">
                                        <img src="../assets/images/{{$video->picpath}}" class="card-img-top photo" style="height:300px;width:300px;" id={{asset($video->url)}} >
                                    </div> 
                                  </div>
                              </div>
                          
        @endforeach
                </div>

        </div>
        </section>

         

        <div class="row align-items-center justify-content-center text-center">
          <div class="col-12" >
          @if(Auth::User())
            @if(Auth::User()->role==2)
            <a href="/student/video"><button class="viewbtn">view all videos</button></a>
            @elseif(Auth::User()->role==3)
            <a href="/parent/video"><button class="viewbtn">view all videos</button></a>
            @else
            <a href="/teacher/video"><button class="viewbtn">view all videos</button></a>
            @endif
@else
<a href="/video"><button class="viewbtn">view all videos</button></a>
@endif
          </div>
          
        </div>
      </div>

    </section>
    <!-- start section word-class -->
  
    <div class="section-one word-class" style="background-image: url(../assets/images/map.png);">

      <div class="container">
        
        
        <div class="row">
          
            <div class="col-6 col-md-4 d-flex justify-content-center">
        
            <div class="our-add">
            <ul>
            @if(Auth::user())
              <li><a  style="font-size:27px;font-weight: 800;color: #04d2c8;">Our Additional Activities </a></li><hr>
              <li><a href="video">Handmade Activitiesِِ</a></li><hr>
              <li><a href="video">Sport Activities</a></li><hr>
              <li><a href="video">Competitions</a></li><hr>
              <li><a href="video"> All Videos </a></li><hr>
              @else
              <li><a  style="font-size:27px;font-weight: 800;color: #04d2c8;">Our Additional Activities </a></li><hr>
              <li><a href="/video">Handmade Activitiesِِ</a></li><hr>
              <li><a href="/video">Sport Activities</a></li><hr>
              <li><a href="/video">Competitions</a></li><hr>
              <li><a href="/video"> All Videos </a></li><hr>
              @endif
            </ul>
            </div>
            </div>
          
            <div class="col-12 col-md-8 justify-content-center wedo">
            <div class="head-contain our-about">
                <span class="learn sabout"> about </span>
                <h6 class="our-h6"> Our Difference <h6>
                <h4 class="our-h2 sword"> What We Do </h4><br><br>
                <p class="head-text"> Dedicated to giving the support you need to pursue your degree.</p>
                <div class="icon-pra">

                  <p> <i class="fa fa-check" style="color:#04d2c8;"></i> Effective and Appropriate Communication Skills</p> <br>
                  
                  <p> <i class="fa fa-check" style="color:#04d2c8;"></i> A reliable computer and internet access </p> <br> 
                 
                  <p> <i class="fa fa-check" style="color:#04d2c8;"></i> Motivation and Independence </p> <br>
                  
                  <p> <i class="fa fa-check" style="color:#04d2c8;"></i> Reading and Writing Skills </p> <br>

                </div>
              </div>
              </div>
            </div> 
    

      </div>
    </div>
@endsection