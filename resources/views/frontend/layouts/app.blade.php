<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Suman Dahal</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Classy Resume Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="{{asset('front-themes/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
		<link href="{{asset('front-themes/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
		<link href="{{asset('front-themes/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
		<!-- gallery -->
		<link type="text/css" rel="stylesheet" href="{{asset('front-themes/css/cm-overlay.css')}}" />
		<!-- //gallery -->
		<!-- font-awesome icons -->
		<link href="{{asset('front-themes/css/font-awesome.css')}}" rel="stylesheet">
		<!-- //font-awesome icons -->
		<link href="//fonts.googleapis.com/css?family=Gidugu" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	</head>
	
	<body  data-spy="scroll" data-target=".navbar" data-offset="50" >
		<div class="main" id="home">
			<!-- header -->
			<div class="w3_navigation navbar-fixed-top " data-spy="affix" data-offset-top="650">
				<div class="container">
					<nav class="navbar navbar-default" >
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<div class="logo">
								<h1><a class="navbar-brand" href="index.html"><div class="logo">Er. Suman Dahal </div></a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="cl-effect-1" id="cl-effect-1">
								<ul class="nav navbar-nav">
									<li class="active"><a class="scroll" href="#home">Home</a></li>
									<li><a href="#about" class="scroll hvr-bounce-to-bottom">About</a></li>
									<li><a href="#services" class="scroll hvr-bounce-to-bottom">Services</a></li>
									<li><a href="#education" class="scroll hvr-bounce-to-bottom">Skills</a></li>
									<li><a href="#portfolio" class="scroll hvr-bounce-to-bottom">Portfolio</a></li>
									<li><a href="#mail" class="scroll hvr-bounce-to-bottom">Contact</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<!-- banner -->
			<div class="banner">
				<!--Slider-->
				<img src="{{asset('front-themes/images/home_profile.jpg')}}" alt=" " class="img-responsive">
				<h2>I'M {{$about['name']}}</h2>
				<span>{{$about['job_title']}}</span>
				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info">
								<p>PHP Mysql. </p>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<p>html, css, javascript,Java ,jQuery</p>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<p>Laravel </p>
							</div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<!--//Slider-->
				<ul class="top-links">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
			<!-- //banner -->
		</div>
	</div>
	<!-- //header -->
	<!-- about -->
	@include('frontend.layouts.about')
	<!-- //about-bottom -->
	<!-- services -->
	<div class="service" id="services">
		<div class="container my_container">
			
			<h3 class="w3l_head two">WHAT I DO FOR YOU</h3>
			<p class="w3ls_head_para">See My Services</p>
			<div class="service-agileits">
				
				<div class="col-md-4 list-gds text-center">
					<i class="fa fa-cog" aria-hidden="true"></i>
					<h4>WHY CHOOSE Me.</h4>
					<p>I use web technologies to solve real life problems while trying to contribute to make society better.</p>
				</div>
				<div class="col-md-4 list-gds text-center">
					<i class="fa fa-laptop" aria-hidden="true"></i>
					<h4>WHAT I DO. </h4>
					<p>Frontend Design, Backend Design , Database Design, Mobile App , Software Design</p>
				</div>
				<div class="col-md-4 list-gds text-center">
					<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					<h4>My MISSION.</h4>
					<p>Develop product for all</p>
				</div>
				<div class="clearfix"></div>
				
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- education -->
	@include('frontend.layouts.education_skill_experience')
	<!-- /education -->
	<!-- Portfolio -->
	@include('frontend.layouts.portfolio')
	<!-- /Portfolio -->
	<!--counter-->
	<div id="counter" class="counter">
		<div class="container my_container">
			<!--count-down -->
			<div class="count">
				<div class="col-md-3 agile_count_grid">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					
					<h5>CLIENTS</h5>
					
					<p class="counter">468</p>
					
				</div>
				<div class="col-md-3 agile_count_grid">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					
					<h5>PROJECTS</h5>
					
					<p class="counter">168</p>
					
				</div>
				<div class="col-md-3 agile_count_grid c3">
					<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
					
					<h5>EXPERIENCE</h5>
					
					<p class="counter">12</p>
					
				</div>
				<div class="col-md-3 agile_count_grid c4">
					
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					
					<h5>LINES OF CODE</h5>
					
					<p class="counter">5008</p>
					
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--counter-->
	<!-- mail -->
	<div class="mail" id="mail">
		<div class="container my_container">
			<h3 class="w3l_head w3l_head1">Contact Me</h3>
			<p class="w3ls_head_para w3ls_head_para1">send Me a message</p>
			<div class="w3_mail_grids">
				<form action="#" method="post">
					<div class="col-md-6 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " required="">
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="">
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="">
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
							</label>
						</span>
						
					</div>
					<div class="col-md-6 w3_agile_mail_grid">
						<textarea name="Message" placeholder="Your Message" required=""></textarea>
						<input type="submit" value="Submit">
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- //mail -->
	<!-- footer -->
	<div class="w3l_footer">
		<div class="container">
			
			<div class="w3ls_footer_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Location</h4>
							<p>{{$about['address']}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Email</h4>
							<a href="mailto:info@example.com">{{$about['email']}}</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Call Me</h4>
							<p>{{$about['mobile']}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="w3l_footer_pos">
			<p>© 2016 Suman Dahal. All Rights Reserved | Design by <a href="#">Me</a></p>
		</div>
	</div>
	<!-- //footer -->
	<script src="{{asset('front-themes/js/jquery-2.2.3.min.js')}}"></script>
	<!-- skills -->
	<script src="{{asset('front-themes/js/pie-chart.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function () {
	$('#demo-pie-1').pieChart({
	barColor: '#44c7f4',
	trackColor: '#fff',
	lineCap: 'round',
	lineWidth: 8,
	onStep: function (from, to, percent) {
	$(this.element).find('.pie-value').text(Math.round(percent) + '%');
	}
	});
	$('#demo-pie-2').pieChart({
	barColor: '#44c7f4',
	trackColor: '#fff',
	lineCap: 'butt',
	lineWidth: 8,
	onStep: function (from, to, percent) {
	$(this.element).find('.pie-value').text(Math.round(percent) + '%');
	}
	});
	$('#demo-pie-3').pieChart({
	barColor: '#44c7f4',
	trackColor: '#fff',
	lineCap: 'square',
	lineWidth: 8,
	onStep: function (from, to, percent) {
	$(this.element).find('.pie-value').text(Math.round(percent) + '%');
	}
	});
				
				$('#demo-pie-4').pieChart({
	barColor: '#44c7f4',
	trackColor: '#fff',
	lineCap: 'square',
	lineWidth: 8,
	onStep: function (from, to, percent) {
	$(this.element).find('.pie-value').text(Math.round(percent) + '%');
	}
	});
	});
	</script>
	<!-- skills -->
	<script src="{{asset('front-themes/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		// Slideshow 4
		$("#slider3").responsiveSlides({
			auto: true,
			pager:true,
			nav:false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			$('.events').append("<li>after event fired.</li>");
			}
		});
	
		});
	</script>
	<!-- js -->
	<script src="{{asset('front-themes/js/jquery.tools.min.js')}}"></script>
	<script src="{{asset('front-themes/js/jquery.mobile.custom.min.js')}}"></script>
	<script src="{{asset('front-themes/js/jquery.cm-overlay.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('.cm-overlay').cmOverlay();
		});
	</script>
	<!-- js files -->
	<script src="{{asset('front-themes/js/bars.js')}}"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('front-themes/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('front-themes/js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- //js -->
	<script src="{{asset('front-themes/js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>
</html>