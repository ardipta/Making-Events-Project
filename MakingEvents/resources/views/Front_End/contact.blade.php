@extends ('Front_End.master')
@section ('title')
    CONTACT
@endsection
@section ('body')
    <!-- banner -->
	<div class="w3ls-banner-1"> 
		<!-- banner-text --> 
	
	<!-- //banner --> 
	</div>	
<!-- contact -->	
	<div class="w3ls_address_mail_footer_grids">
	<div class="container">
	<h2 class="heading-agileinfo">Contact<span>Making Events is a professionally managed Event</span></h2>
		<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.422848480505!2d90.3754218532845!3d23.752402259752422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada23c51a3%3A0x570775c794ae5540!2sShukrabad%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1585597981359!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="col-md-6 contact-form">
				<h4 class="white-w3ls">Contact Form</h4>
				<form action="#" method="post">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="Name" required="">
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="Email" required=""> 
						<label>Email</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="text" name="Subject" required="">
						<label>Subject</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="Message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="SEND">
				</form>
			</div>
			<div class="col-md-6 contactright">
				<h3>Contact Address</h3>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>Shukrabad, Dhanmondi32, Dhaka<span>Bangladesh</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+8801797174800 <span>+8801841174800</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">ME@gmail.com</a> 
						<span><a href="mailto:info@example.com">makingevents@gmail.com</a></span></p>
				</div>
			</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!-- //contact -->	
@endsection