<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield ('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('/')}}Front_End_Design/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('/')}}Front_End_Design/css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="{{asset('/')}}Front_End_Design/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="{{asset('/')}}Front_End_Design/js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  

			<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Events</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="nevbar-brand" href="{{asset('/')}}"><img src="{{asset('/')}}Front_End_Design/images/logo.png" style="max-width:60px; margin-top: -7px;"></a>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a class="hvr-sweep-to-right" href="{{asset('/')}}">Home</a></li>
							<li><a class="hvr-sweep-to-right" href="{{asset('/about')}}">About</a></li>
							<li><a class="hvr-sweep-to-right" href="{{asset('/service')}}">Services</a></li>
							<li><a class="hvr-sweep-to-right" href="{{asset('/contract')}}">Contact</a></li>
							<li><a class="hvr-sweep-to-right" href="{{asset('/login')}}">Login</a></li>
							<li><a class="hvr-sweep-to-right" href="{{asset('/MakingEvents/login')}}">Sign Up</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
        @yield ('body')
<!-- footer-top -->	
<div class="footer-top">
		<div class="container">
			<div class="col-md-3 foot-left">
				<h3>About Us</h3>
			
				<p>Making Events is an exclusive organization for Event Management, 
					Wadding Planning,Holiday Parties, Stage Decoration and other related facilities.</p>
			</div>
			<div class="col-md-3 foot-left">
					<h3>Get In Touch</h3>
					<p></p>
				
						<div class="contact-btm">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p>Shukrabad, Dhanmondi 32, Dhaka</p>
						</div>
						<div class="contact-btm">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<p>+880179 717 4800</p>
						<div class="contact-btm">
						</div>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<p><a href="mailto:example@email.com">ME@gmail.com</a></p>
						</div>
						<div class="clearfix"></div>

			</div>
			<div class="col-md-3 foot-left">
				<h3>Latest Events</h3>
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('/')}}Front_End_Design/images/g1.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('/')}}Front_End_Design/images/g2.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('/')}}Front_End_Design/images/g3.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('/')}}Front_End_Design/images/g4.jpg" alt="" class="img-responsive"></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 foot-left">
			<h3>Subscribe</h3>
			<p></p>
			<form action="#" method="post">	
					<input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
				<input type="submit" value="Subscribe">
			</form>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- /footer-top -->							

<!-- footer -->
			<div class="copy-right">
				<div class="container">
				<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
						<div class="copy-left">
						<p>&copy; 2020 All rights reserved | Making Events</p>
						</div>
					</div>
				<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					</div>
			</div>
			
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Making Events
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="{{asset('/')}}Front_End_Design/images/g8.jpg" alt=" " class="img-responsive" />
						<p>Making Events is the one-stop solution for Event Management. We pride ourselves in our ability to
							  deliver quality products and services that match the best interests of our client base.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{asset('/')}}Front_End_Design/js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->

						<script src="{{asset('/')}}Front_End_Design/js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
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
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
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

<!-- start-smoth-scrolling -->
<!-- OnScroll-Number-Increase-JavaScript -->
	<script type="text/javascript" src="{{asset('/')}}Front_End_Design/js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--flexiselDemo1 -->
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:991,
											visibleItems: 1
										}
									}
								});
								
							});
			</script>
			<script type="text/javascript" src="{{asset('/')}}Front_End_Design/js/jquery.flexisel.js"></script>
<!--//flexiselDemo1 -->

<script type="text/javascript" src="{{asset('/')}}Front_End_Design/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('/')}}Front_End_Design/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script src="{{asset('/')}}Front_End_Design/js/bootstrap.js"></script>
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