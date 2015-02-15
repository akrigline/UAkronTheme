<?php /* Template Name: Home Page */ ?>

<?php
/**
 * @package UAkronDesign
 */
get_header(); ?>

<?php
/* Declare Variables for Images via ACF */
	$image;
	$img_url = $image['url'];
	$img_alt = $image['alt'];
	$img_sm = $image['sizes'][ 'thumbnail' ];
	$img_md = $image['sizes'][ 'medium' ];
	$img_lg = $image['sizes'][ 'large' ];
	$img_xl = $image['sizes'][ 'original' ];

	?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php $image = get_field('jumbotron_image'); ?>
  	<figure class="welcome jumbotron">
  		<img  size="100vw" 
  					srcset="<?php echo $img_thumb; ?> 768w, 
  									<?php echo $img_md; ?> 992w, 
  									<?php echo $img_lg; ?> 1024w, 
  									<?php echo $img_xl; ?> 1200w" 
  					alt="<?php echo $img_alt; ?>" >
  		<image src="img/design_logo.svg" class="logo">
  		<figcaption class="blurb">
  			<h6><?php the_field('jumbotron_title'); ?></h6>
  			<p><?php the_field('jumbotron_text'); ?></p>
  		</figcaption>
  	</figure>
  <?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

	<section class="info jumbotron">

	<?php $image = get_field('home_information_image'); ?>

		<img  size="100vw" 
					srcset="<?php echo $img_thumb; ?> 768w, 
									<?php echo $img_md; ?> 992w, 
									<?php echo $img_lg; ?> 1024w, 
									<?php echo $img_xl; ?> 1200w" 
					alt="<?php echo $img_alt; ?>" >

		<a href="info.html">
			<div class="blurb info col-xs-12 col-sm-6 col-md-4">
				<h4 class="titles"><?php the_field('home_information_title'); ?></h4>
				<p><?php the_field('home_information_text'); ?></p>
			</div>
		</a>
	</section>

	<section class="events jumbotron">
	<?php $image = get_field('home_events_image'); ?>
		<img  size="100vw" 
					srcset="<?php echo $img_thumb; ?> 768w, 
									<?php echo $img_md; ?> 992w, 
									<?php echo $img_lg; ?> 1024w, 
									<?php echo $img_xl; ?> 1200w" 
					alt="<?php echo $img_alt; ?>" >
		<a href="events.html">
			<div class="blurb events col-xs-12 col-sm-6 col-md-4">
				<h4 class="titles"><?php the_field('home_events_title'); ?></h4>
				<p><?php the_field('home_events_text'); ?></p>
			</div>
		</a>
	</section>

	<section id="contact" class="contact jumbotron">
	<?php $image = get_field('home_contact_image'); ?>
		<img  size="100vw" 
					srcset="<?php echo $img_thumb; ?> 768w, 
									<?php echo $img_md; ?> 992w, 
									<?php echo $img_lg; ?> 1024w, 
									<?php echo $img_xl; ?> 1200w" 
					alt="<?php echo $img_alt; ?>" >
		<a href="contact.html">
			<div class="blurb contact col-xs-12 col-sm-6 col-md-4">
				<h4 class="titles"><?php the_field('home_contact_title'); ?></h4>
				<p><?php the_field('home_contact_text'); ?></p>
			</div>
		</a>
	</section>

<?php get_footer(); ?>
