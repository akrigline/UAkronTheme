<?php /* Template Name: Contact */ ?>

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
  	<figure class="pageHeader jumbotron">
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

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'contact' ); ?>

      <?php endwhile; ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>
  </div><!-- container -->
</section>


  
  <section>
  <div class="embed-responsive">

    <div class="overlay" onClick="style.pointerEvents='none'"></div>
    <iframe class="embed-responsive-item" src='https://www.google.com/maps/embed/v1/place?key=AIzaSyCFZQmZgdQRBefx_vYB7OdpurZcAw4PkSw&q=Folk+Hall,Akron+Ohio'></iframe>
  </div>
  </section>
  
<?php get_footer(); ?>
