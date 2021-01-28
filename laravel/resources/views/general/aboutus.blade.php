<!-- @extends ('layouts.guest')
@extends ('layouts.parent')
@extends ('layouts.teacher')
@extends ('layouts.student') -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

@section('content')
 	<header id="head" class="secondary">
            <div class="container">
                    <h1 style="margin-top: 40px;">About Us</h1>
                   
                </div>
    </header>


    <!-- container -->
    <div class="section-one">

      <div class="container">
        
        <div class="head-contain">
          <span class="learn"> Learn </span>
          <h6 class="our-h6"> Guaranteed Success <h6>
          <h2 class="our-h2" > Our Services </h2>
          <p class="head-text">As a full service agency, our work covers everything from market research, to brand and identity, advertising and communications, digital, web and content creation, to social media and film.</p>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 d-flex justify-content-center">
            <div class="card">
              <img class="card-img-top imgs" src="../assets/images/h1-custom-icon-7.png" width="130" height="101" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Notification & Emails</h5>
                <p class="card-text">We not only build websites  <br> microsites and e-learning platforms <br>we can also help tie your online.</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 d-flex justify-content-center">
            <div class="card">
              <img class="card-img-top imgs" src="../assets/images/h1-custom-icon-8.png" width="130" height="101" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Certification</h5>
                <p class="card-text">Gain the in-demand skills <br> you need to break into a new career field <br>like information technology or data science.</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 d-flex justify-content-center">
            <div class="card">
              <img class="card-img-top imgs" src="../assets/images/h1-custom-icon-9.png" width="130" height="101" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> WorkShop </h5>
                <p class="card-text">We offer educative workshops for children, <br> parents and teachers. Children’s workshops target  <br> different dimensions of the child’y.s personalit</p>
                
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- section l video-->
    <div class="section-two">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-12">
              <div class="video-content">
                <img src="../assets/images/imgv.jpg" width="550" height="400" style="border-radius: 3px;">
                <a href="https://vimeo.com/38495846"> <button class="play-video-btn"><i class="fas fa-play"></i></button></a> 
               </div>
              </div>
              <div class="col-sm-12 col-lg-6 col-md-12">
                <div class="parg-content">
                  <h3>Our Activities and Work Shops </h3>
                  <p> We offer educative workshops for children,parents and teachers. Children’s workshops target different  </p>
                </div>

                <div class="row text-center count">
                  <div class="col">
                  <div class="counter">
                     <span class="play"> 89 </span>
                     <h4 class="count-text">Scheduled Events</h4>
               </div>
              </div>
              <br>
               
              <div class="col">
                  <div class="counter">
                    <span class="play"> 56 </span>
                    <h4 class="count-text">Available Courses</h4>
                    </div>
              
            </div>
          
          
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

    <!-- /container -->
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
                    <!-- Team Member -->
                    <div class="team-member">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="../assets/images/photo-1.jpg" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>John Doe</h4>
                        <!-- Designation -->
                        <span class="pos">CEO</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="../assets/images/photo-2.jpg" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Larry Doe</h4>
                        <!-- Designation -->
                        <span class="pos">Director</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="../assets/images/photo-3.jpg" alt=""> 
                        </div>
                        <!-- Member Details -->
                        <h4>Ranith Kays</h4>
                        <!-- Designation -->
                        <span class="pos">Manager</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="../assets/images/photo-4.jpg" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Joan Ray</h4>
                        <!-- Designation -->
                        <span class="pos">Creative</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.cslider.js"></script>
	<script src="../assets/js/jquery.isotope.min.js"></script>
	<script src="../assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>

  
    @endsection

