
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>On School</title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">   
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="../assets/css/style2.css">
    <link rel='stylesheet' id='camera-css'  href='../assets/css/camera.css' type='text/css' media='all'> 

</head>
<body>  
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<a class="navbar-brand" href="/home"><img src="\assets\images\logooo.PNG"></a>
        <!-- <a class="navbar-brand" href="home"><img src="..\assets\images\logo3.PNG" style="margin:-40%; top:0"></a> -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1 "><a href="/home">Home</a></li>
					<li class="c2"><a href="/aboutus">About Us</a></li>
          <li class="c5"><a href="/video">Videos</a></li>
          <li class="c7"><a href="/contactus">Contact Us</a></li>
          <li class="c6"><a href="/login">Log in</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

<div class="content">
@yield ('content')
</div>

     

      <!-- start footer -->
      
    	 
    <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-4 col-sm-12">
      <div class="footerwidget">
        <h4 >
          Our online services
        </h4>
        <div class="menu-course">
          <ul class="menu">
            
            <li><a href="/contactus">
                Contact your teacher
              </a>
            </li>
            <li><a href="/parent">
                Parental view
              </a>
            </li>
            
            <li><a href="/guest/magazine">
               Online Magazine
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    
    <div class="col-md-4 col-sm-12"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> <br>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Kerniles 416  - United Kingdom<br><br>
            <i class="fa fa-phone"></i>+00 123 156 711 <br><br>
             <i class="fa fa-envelope-o"></i> youremail@email.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>

  <div class="col-md-4 col-sm-12">
      <div class="footerwidget"> 
        <a href="/home"><img src="/assets/images/map2.png" width="300" height="175" class="im-info"></a>
      </div>
    </div>
    </div>


			<div class="social text-center">
				<a href="#" class="s1"><i class="fa fa-twitter"></i></a>
				<a href="#" class="s2"><i class="fa fa-facebook"></i></a>
        <a href="#" class="s3"><i class="fa fa-instagram"></i></a>
        <a href="#" class="s4"><i class="fa fa-linkedin"></i></a>

			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="/home">Home</a> | 
								<a href="/aboutus">About</a> |
								<a href="/video">Videos</a> |
								<a href="/contactus">Contact</a> |
								<a href="/login">Login</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right"><span> &copy; School 2020 All right reserved. </span></p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="../assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='../assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='../assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='../assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../assets/js/camera.min.js'></script> 
    <script src="../assets/js/bootstrap.min.js"></script> 
	<script src="../assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				        height: '600',
				        loader: 'false',
				        pagination: true,
				        thumbnails: false,
				        hover: false,
                playPause: false,
                navigation: false,
				        opacityOnGrid: false,
				        imagePath: '../assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
