<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>

<style>
	#myVideo {
		right: 0;
		bottom: 0;
		min-width: 100%;
		min-height: 100%;
		height: 50%;
		width: 100%;
		float: left;
		margin-right: -100%;
		object-fit: fill;
	}
</style>
		<!-- Home Slider -->
		<div id="homeslider" class="flexslider homeslider">
			<div class="slides">
				<div >
					<video autoplay muted loop id="myVideo">
						<source src="<?php echo base_url();?>assets/images/bkg.webm" type="video/mp4">
					</video>
					<div class="caption blue">
						<h4>WHY WAIT FOR MONTH FOR A  ROAD TEST?</h4>
						<p>REGISTER TODAY. ROAD TESTING TEEN AND ADULTS TODAY.</p>
						<p><a href="">Find Out More <i class="fa fa-angle-double-right"></i></a></p>
					</div> <!-- end .caption -->
				</div>

			</div> <!-- end .slides -->
		</div> <!-- end homeslider -->

<section class="section white" id="blogs">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 blog-main-content">
					<!-- ************* POST FORMAT IMAGE ************** -->

					<div class="blog-post text-center" data-animated="0">
						<div class="blogInner post-format-standard post-26 post type-post status-publish format-standard has-post-thumbnail hentry category-animal category-beauty category-entertainment category-featured" data-animated="0">
							<div class="blog-post-image featureImg">
								<a href="https://premiumlayers.net/demo/wp/drivepro/2015/04/28/i-am-able/">
									<img width="1488" height="800" src="<?php echo base_url();?>assets/images/post1.jpeg" class="img-responsive wp-post-image" alt="" srcset="<?php echo base_url();?>assets/images/post1.jpeg 1488w, <?php echo base_url();?>assets/images/post1.jpeg 300w, https://premiumlayers.net/demo/wp/drivepro/wp-content/uploads/2015/04/blog-post-image05-768x413.jpg 768w, https://premiumlayers.net/demo/wp/drivepro/wp-content/uploads/2015/04/blog-post-image05-1024x551.jpg 1024w" sizes="(max-width: 1488px) 100vw, 1488px">				</a>
							</div>
							<div class="blog-post-title ">
								<h6><a href="https://premiumlayers.net/demo/wp/drivepro/2015/04/28/i-am-able/">WHY CHOOSE CY FAIR DRIVING SCHOOL?</a></h6>
							</div>
							<div class="blog-post-excerpt text-left">
								<p>All nine of our state-certified driving schools are conveniently located in the Greater Houston and Dallas area!
									Our team consists of two PHD degree-holders in education & eight certified K-12 teachers, so you know you're in the right hands!
									We guarantee the cheapest price for drivers ed!
									Road tests are offered 7 days a week!</p>
							</div>
						</div>
					</div>

				</div>
				<div class="col-sm-6 blog-main-content">
					<!-- ************* POST FORMAT IMAGE ************** -->

					<div class="blog-post text-center" data-animated="0">
						<div class="blogInner post-format-standard post-26 post type-post status-publish format-standard has-post-thumbnail hentry category-animal category-beauty category-entertainment category-featured" data-animated="0">
							<div class="blog-post-image featureImg">
								<a href="https://premiumlayers.net/demo/wp/drivepro/2015/04/28/i-am-able/">
									<img width="1488" height="800" src="<?php echo base_url();?>assets/images/post2.jpeg" class="img-responsive wp-post-image" alt="" srcset="<?php echo base_url();?>assets/images/post2.jpeg 1488w, <?php echo base_url();?>assets/images/post2.jpeg 300w, ">				</a>
							</div>

							<div class="blog-post-title ">
								<h6><a href="https://premiumlayers.net/demo/wp/drivepro/2015/04/28/i-am-able/">OUR MISSION</a></h6>
							</div>
							<div class="blog-post-excerpt text-left">
								<p>Our mission is to create safe and courteous drivers on the road!<br><br><br><br><br></p>
							</div>
						</div>
					</div>

				</div>

		</div>
	</div>
</section>


<section class="section yellow text-center">
	<div class="inner">
		<div class="container-fluid">

			<h2 class="contact-heading" style="
    margin-top: 0px;
">Send Us A Message</h2>
		</div> <!-- end .container -->
	</div> <!-- end .inner -->
</section> <!-- end .section -->
<section class="section white">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<form action="scripts/contact.php" method="post" id="contact-form">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="contact-name">Name</label>
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="text" id="contact-name" name="contact-name" class="form-with-icon" />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="contact-email">Email</label>
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="contact-email" name="contact-email" class="form-with-icon" />
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="contact-subject">Subject</label>
									<span class="form-icon"><i class="fa fa-tag"></i></span>
									<input type="text" id="contact-subject" name="contact-subject" class="form-with-icon" />
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="contact-message">Message</label>
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<textarea name="contact-message" id="contact-message" class="form-with-icon" rows="7"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="button yellow">Send Message</button>
						</div>
						<div id="contact-loading" class="alert alert-info form-alert">
							<span class="icon"><i class="fa fa-info"></i></span>
							<span class="message">Loading...</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div id="contact-success" class="alert alert-success form-alert">
							<span class="icon"><i class="fa fa-check"></i></span>
							<span class="message">Success!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div id="contact-error" class="alert alert-danger form-alert">
							<span class="icon"><i class="fa fa-times"></i></span>
							<span class="message">Error!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end .inner -->
</section> <!-- end .section -->

<?php $this->load->view('footer'); ?>

<?php $this->load->view('js-links'); ?>
