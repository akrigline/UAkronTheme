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

  $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";
	?>


<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
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
  <?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<section>
<div class="container">
  <div class="col-xs-12 col-sm-6 col-md-7 content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</div><!-- content -->

	<div class="col-xs-12 col-sm-6 col-md-5 pull-right quickStats">
		<div class="row">
  		<div class="col-xs-12 col-lg-6">
	  		<h1><span class="rate">00</span>%</h1>
	  		<h3>Placement Rate</h3>
  		</div>
  		<div class="col-xs-12 col-lg-6">
	  		<h1><span class="ratio1">0</span><small>:</small><span class="ratio2">0</span></h1>
	  		<h3>Student Teacher Ratio</h3>
  		</div>
		</div>
		<div class="row">
  		<div class="col-xs-12 col-lg-6">
	  		<h1><span class="size">0</span></h1>
	  		<h3>Program Size</h3>
  		</div>
  		<div class="col-xs-12 col-lg-6">
	  		<h1><span class="majors">0</span></h1>
	  		<h3>Majors</h3>
  		</div>
		</div>
		<div class="row">
  		<div class="col-xs-12 col-lg-6">
	  		<h1><span class="awards">000</span><small>+</small></h1>
	  		<h3>Design Awards in <br>National Competitions</h3>
  		</div>
  		<div class="col-xs-12 col-lg-6">
	  		<h1><span class="found">000</span></h1>
	  		<h3>Year Established</h3>
  		</div>
		</div>
  </div><!-- quickStats -->
  
<?php get_footer(); ?>
