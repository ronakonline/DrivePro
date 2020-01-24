<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header1'); ?>



		<!-- Contact -->
		<div class="full-width-map" id="full-width-map"></div>
		<section class="section yellow text-center">
			<div class="inner">
				<div class="container-fluid">
					<div class="contacts">
						<h5 class="text-center">Come Let's Talk Together</h5>
						<hr class="small-line" />
						<div class="row">
							<div class="col-sm-4">
								<div class="contact">
									<div class="icon"><i class="fa fa-map-marker"></i></div>
									<div class="inner">Detach Driving Design Street Australia</div>
								</div> <!-- end .contact -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="contact">
									<div class="icon"><i class="fa fa-phone"></i></div>
									<div class="inner">+123 456 789 001</div>
								</div> <!-- end .contact -->
								<div class="contact">
									<div class="icon"><i class="fa fa-fax"></i></div>
									<div class="inner">987 654 3210</div>
								</div> <!-- end .contact -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="contact">
									<div class="icon"><i class="fa fa-envelope"></i></div>
									<div class="inner">driving@test.com</div>
								</div> <!-- end .contact -->
							</div> <!-- end .col-sm-4 -->
						</div> <!-- end .row -->
						<a href=""><i class="fa fa-chevron-right"></i> Route</a>
					</div> <!-- end .contacts -->
					<h2 class="contact-heading">Send Us A Message</h2>
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
