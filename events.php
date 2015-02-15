<?php /* Template Name: Information */ ?>

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

  <section class="container-fluid">

  <?php query_posts( 'category_name=events&year=2015' ); ?>

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'events' ); ?>

      <?php endwhile; ?>
    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

  <?php wp_reset_query(); ?>

  </section><!-- container -->

<?php get_footer(); ?>
