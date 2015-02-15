<?php /* Template Name: Events */ ?>

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

  $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";
	?>

<?php $image = get_field('jumbotron_image'); ?>
	<figure class="welcome jumbotron">
		<img  size="100vw" 
					srcset="<?php echo $srcset; ?>" 
					alt="<?php echo $img_alt; ?>" >
		<image src="img/design_logo.svg" class="logo">
		<figcaption class="blurb">
			<h6><?php the_field('jumbotron_title'); ?></h6>
			<p><?php the_field('jumbotron_text'); ?></p>
		</figcaption>
	</figure>

  <section class="container-fluid">

  <?php $year = date('Y');
    while ($year >= 2012) : ?>

        <?php get_template_part( 'content', 'events' ); ?>

        $year--;

  <?php endwhile; ?>

  </section><!-- container -->

<?php get_footer(); ?>
