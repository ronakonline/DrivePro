<!-- Header -->
<header class="header">
	<div class="container clearfix">
		<div class="logo"><a href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="Drive Pro"></a></div>
		<div class="header-contacts">
			<div class="header-contact">
				<div class="small-round-icon"><i class="fa fa-map-marker"></i></div>
				Design Street, Australia
			</div>  <!-- end .header-contact -->
			<div class="header-contact">
				<div class="small-round-icon"><i class="fa fa-envelope"></i></div>
				Info@Defatch.com
			</div>  <!-- end .header-contact -->
			<div class="header-contact">
				<div class="small-round-icon"><i class="fa fa-phone"></i></div>
				+123 456 789
			</div>  <!-- end .header-contact -->
		</div> <!-- end .header-contacts -->
		<a href="" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
	</div> <!-- end .container -->
	<div class="main-header clearfix">
		<div class="container">
			<nav class="main-nav">
				<ul class="list-unstyled">
					<li class="active"><a href="<?php echo base_url(); ?>Home">Home</a></li>
					<li><a href="<?php echo base_url(); ?>Aboutus">About</a></li>
					<li><a href="<?php echo base_url(); ?>Services">Services</a>
						<ul>
							<li><a href="#">View All</a></li>
							<li><a href="#">Teens</a></li>
							<li><a href="#">Adults</a></li>
							<li><a href="#">Road Testing</a></li>
							<li><a href="#">Defensive Driving</a></li>
						</ul>
					</li>
					<li><a href="#">Locations</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="<?php echo base_url(); ?>Contact">Contact</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</nav> <!-- end .main-nav -->
			<!-- end .search-form -->
		</div> <!-- end .container -->
	</div> <!-- end .main-header -->
</header> <!-- end .header -->
<div class="responsive-menu">
	<a href="" class="responsive-menu-close">Close <i class="fa fa-times"></i></a>
	<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
	<form class="search-form">
		<input type="search" id="responsive-menu-search" name="search" placeholder="Search Here">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form> <!-- end .search-form -->
</div> <!-- end .responsive-menu -->
