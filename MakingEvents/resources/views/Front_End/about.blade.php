@extends ('Front_End.master')
@section ('title')
    ABOUT
@endsection
@section ('body')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div class="w3ls-banner-1"> 
		<!-- banner-text --> 
	
	<!-- //banner --> 
	</div>	
<!-- about -->
<!-- about -->
	<div class="about">
		<div class="container">
		<h2 class="heading-agileinfo">About Us<span>Making Events is a professionally managed Event</span></h2>
			<div class="about-grids-1">
				<div class="col-md-5 wthree-about-left">
					<div class="wthree-about-left-info">
						<img src="{{asset('/')}}Front_End_Design/images/g3.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-7 agileits-about-right">
					
					<h4>Making Events is the one-stop solution for Event Management. We pride ourselves in our ability to deliver quality
						 products and services that match the best interests of our client base.
						 Our knowledge and experience in the hospitality and public catering industry and our 
						 relationships with clients is about complete transparency
						  and flexibility as we manage expectations on budget requirements and audience numbers.
					
					</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- offers -->
	<div class="offers">
		<div class="container">
			
			<h3 class="heading-agileinfo white-w3ls">Our Offers<span class="black-w3ls">Making Events is a professionally managed Event</span></h3>
			<div class="offers-grids">
				<div class="col-md-6 wthree-offers-left">
					<div class="offers-left-heading">
						<h4>Quisque eu ullamcorper dui. Nullam commodo ornare ipsum.</h4>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>1</p>
						</div>
						<div class="offers-text">
							<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat. Integer consequat aliquet facilisis. Phasellus ut venenatis nisi, et lobortis sem.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids offers-left-middle">
						<div class="offers-number">
							<p>2</p>
						</div>
						<div class="offers-text">
							<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat. Integer consequat aliquet facilisis.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>3</p>
						</div>
						<div class="offers-text">
							<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 wthree-offers-right">
					<h5>Cras consequat et velit quis molestie. Etiam bibendum laoreet enim, nec malesuada ex fermentum et. Donec molestie diam nec lorem accumsan bibendum.</h5>
					<p>Vivamus est sem, pellentesque vel libero sit amet, varius tempor orci. Integer egestas metus vitae ultrices tristique. Fusce lectus dui, venenatis vitae justo nec, aliquet feugiat nunc. </p>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus sem leo, interdum quis risus</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Nullam egestas nisi id malesuada aliquet </a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Donec condimentum purus urna venenatis</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Cum sociis natoque penatibus et magnis</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Suspendisse nec magna id ex pretium</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- offers -->
		<!-- about-team -->
	<div class="team">		
		<div class="container">
			<h3 class="heading-agileinfo">Our Team<span>Making Events is a professionally managed Event</span></h3>			
			<div class="team-row-agileinfo">
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="{{asset('/')}}Front_End_Design/images/Sir.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption ">
							<h4>Md Anwar</h4>
							<p>CEO</p>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="{{asset('/')}}Front_End_Design/images/T.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Toma</h4>
							<p>Developer& Designer</p>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="{{asset('/')}}Front_End_Design/images/d.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Dipta</h4>
							<p>Developer&Marketing</p>						
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->
<!-- about -->
@endsection