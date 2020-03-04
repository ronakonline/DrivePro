<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>


<div class="page-title transparent" style="background-image: url('<?php echo base_url();?>assets/images/background01.jpg');">
	<div class="inner">
		<h3>Contact</h3>
	</div> <!-- end .inner -->
</div> <!-- end .page-title -->
<div class="breadcrumbs">
	<div class="container">
		<span class="breadcrumbs-page-title"></span>
		<nav class="breadcrumbs-nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li>Contact</li>
			</ul>
		</nav> <!-- end .breadcrumbs-nav -->
	</div> <!-- end .container -->
</div> <!-- end .breadcrumbs -->
		<!-- Contact -->
		<div class="full-width-map" id=""> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.566807137018!2d-96.73912728481119!3d33.04154148089288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c19ac8c6cd717%3A0x25c1813efb06e3a5!2sCyfair%20Driving%20School%20Plano!5e0!3m2!1sen!2sin!4v1583334062971!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
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
