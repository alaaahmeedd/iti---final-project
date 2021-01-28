@extends ('layouts.guest')
@extends ('layouts.parent')
@extends ('layouts.teacher')
@extends ('layouts.student')
@section('content')



	<!-- /.navbar -->
 <div class="video">

         
		<header id="head" class="secondary">
            <div class="container"  id="page">
                    <h1 style="margin-top: 40px;">Online Videos</h1>
                   
                </div>
				<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </header>
  

	<!-- container -->
	<section class="container " >
		<div class="row">
			<div class="col-md-12">
				<section id="portfolio" class="page-section section appear clearfix">
					<br />
					<br />
			
					<div class="row">
						<nav id="filter" class="col-md-12 text-center">
							<ul>
								<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".webdesign" >Handmade</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".photography">Sports</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".print">Competitions</a></li>
							</ul>
						</nav>
						<div class="col-md-12">
							<div class="row">
								<div class="portfolio-items isotopeWrapper clearfix" id="3">

								@foreach($videos as $video)
								
									<article class="col-sm-4 isotopeItem ` {{$video->category}} `" id="cat">
										<div class="portfolio-item">
									      <br>
											<img src="../assets/images/{{$video->picpath}}" class="photo"  id={{asset($video->url)}}  />
											
										</div>
									</article>
									
								@endforeach	

								

									

									
								</div>

							</div>


						</div>
					</div>

				</section>
			</div>
		</div>

	</section>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.cslider.js"></script>
	<script src="../assets/js/jquery.isotope.min.js"></script>
	<script src="../assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
@yield('videos')
@endsection
   </div>