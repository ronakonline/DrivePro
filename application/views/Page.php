<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>

<div class="page-title transparent" style="background-image: url('<?php echo base_url();?>assets/images/background01.jpg');">
	<div class="inner">
		<h3><?php echo $title; ?></h3>
	</div> <!-- end .inner -->
</div> <!-- end .page-title -->
<div class="breadcrumbs">
	<div class="container">
		<span class="breadcrumbs-page-title"></span>
		<nav class="breadcrumbs-nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><?php echo $title; ?></li>
			</ul>
		</nav> <!-- end .breadcrumbs-nav -->
	</div> <!-- end .container -->
</div> <!-- end .breadcrumbs -->

<section class="section white">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<!-- Blog -->
					<div class="blog-post text-center">
						<div class="blog-post-image">
							<a href="single-page.html"><img src="<?php echo base_url();?>assets/images/<?php echo $img; ?>" alt="alt text" class="img-responsive"></a>
						</div> <!-- end .blog-post-image -->

						<div class="blog-post-title">
							<h4><a href="single-page.html"><?php echo $title; ?></a></h4>
						</div> <!-- end .blog-post-title -->
						<div class="blog-post-content">
							<p><?php echo $content; ?></p>
						</div> <!-- end .blog-post-content -->


					</div> <!-- end .blog-post -->



				</div> <!-- end .col-sm-8 -->

			</div> <!-- end .row -->
		</div> <!-- end .container -->
	</div> <!-- end .inner -->
</section>

<?php $this->load->view('footer'); ?>

<?php $this->load->view('js-links'); ?>
