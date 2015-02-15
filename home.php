<?php /* Template Name: Home Page */ ?>

<?php
/**
 * @package UAkronDesign
 */
get_header(); ?>

	<figure class="welcome jumbotron">
		<img src="img/banner1.jpg" alt="">
		<image src="img/design_logo.svg" class="logo">
		<figcaption class="blurb">
			<h6>The Myers School of Art at The University of Akron</h6>
			<p></p>
		</figcaption>
	</figure>

	<section class="info jumbotron">
		<img src="img/banner3.jpg" alt="">
		<a href="info.html">
			<div class="blurb info col-xs-12 col-sm-6 col-md-4">
				<h4 class="titles">INFORMATION</h4>
				<p> With smaller class sizes and higher placement rates, come see what the Design program at the Myers School of Art has to offer.
				</p>
			</div>
		</a>
	</section>

	<section class="events jumbotron">
		<img src="img/designwall.jpg" alt="">
		<a href="events.html">
			<div class="blurb events col-xs-12 col-sm-6 col-md-4">
				<h4 class="titles">EVENTS</h4>
				<p> Every semester our award winning students show cases their design work free to the public.
				</p>
			</div>
		</a>
	</section>

	<section id="contact" class="contact jumbotron">
		<img src="img/ajheaderimg.jpg" alt="">
		<a href="contact.html">
			<div class="blurb contact col-xs-12 col-sm-6 col-md-4">
				<h4 class="titles">CONTACT</h4>
				<p> We invite you to experience the Myers School of art and set up a visitation.</p>
			</div>
		</a>
	</section>

<?php get_footer(); ?>
