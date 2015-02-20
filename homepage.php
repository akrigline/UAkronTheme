<?php /* Template Name: Home Page */ ?>

<?php
/**
 * @package UAkronDesign
 */
get_header(); ?>


<?php get_template_part( 'content', 'jumbotron' ); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
          
    <section class="info jumbotron">

    	<?php $image = get_field('home_information_image');
        /* Declare Variables for Images via ACF */
        $img_url = $image['url'];
        $img_alt = $image['alt'];
        $img_sm = $image['sizes'][ 'thumbnail' ];
        $img_md = $image['sizes'][ 'medium' ];
        $img_lg = $image['sizes'][ 'large' ];
        $img_xl = $image[ 'url' ];

        $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";
      ?>
    <div class="imagePanner">
      <div class="panning">
      <div class="focuspoint"
          data-focus-x="0"
          data-focus-y="0"
          data-image-w="2000"
          data-image-h="1000">
      	<img  sizes="100vw" 
      				srcset="<?php echo $srcset; ?>" 
      				alt="<?php echo $img_alt; ?>" >
      </div>
      </div>
    </div>

    	<a href="<?php echo get_permalink( 9 ); ?>">
    		<div class="blurb info col-xs-12 col-sm-6 col-md-4">
    			<h4 class="titles"><?php the_field('home_information_title'); ?></h4>
    			<p><?php the_field('home_information_text'); ?></p>
    		</div>
    	</a>
    </section>

    <section class="events jumbotron">
    	<?php $image = get_field('home_events_image');
        /* Declare Variables for Images via ACF */
        $img_url = $image['url'];
        $img_alt = $image['alt'];
        $img_sm = $image['sizes'][ 'thumbnail' ];
        $img_md = $image['sizes'][ 'medium' ];
        $img_lg = $image['sizes'][ 'large' ];
        $img_xl = $image[ 'url' ];

        $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";
      ?>
    	<div class="imagePanner">
      <div class="panning">
      <div class="focuspoint"
          data-focus-x="0"
          data-focus-y="0"
          data-image-w="2000"
          data-image-h="1000">
        <img  sizes="100vw" 
              srcset="<?php echo $srcset; ?>" 
              alt="<?php echo $img_alt; ?>" >
      </div>
      </div>
    </div>
    	<a href="<?php echo get_permalink( 7 ); ?>">
    		<div class="blurb events col-xs-12 col-sm-6 col-md-4">
    			<h4 class="titles"><?php the_field('home_events_title'); ?></h4>
    			<p><?php the_field('home_events_text'); ?></p>
    		</div>
    	</a>
    </section>

    <section id="contact" class="contact jumbotron">
    	<?php $image = get_field('home_contact_image');
        /* Declare Variables for Images via ACF */
        $img_url = $image['url'];
        $img_alt = $image['alt'];
        $img_sm = $image['sizes'][ 'thumbnail' ];
        $img_md = $image['sizes'][ 'medium' ];
        $img_lg = $image['sizes'][ 'large' ];
        $img_xl = $image[ 'url' ];

        $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";
      ?>
  	<div class="imagePanner">
      <div class="panning">
      <div class="focuspoint"
          data-focus-x="0"
          data-focus-y="0"
          data-image-w="2000"
          data-image-h="1000">
        <img  sizes="100vw" 
              srcset="<?php echo $srcset; ?>" 
              alt="<?php echo $img_alt; ?>" >
      </div>
      </div>
    </div>
    	<a href="<?php echo get_permalink( 11 ); ?>">
    		<div class="blurb contact col-xs-12 col-sm-6 col-md-4">
    			<h4 class="titles"><?php the_field('home_contact_title'); ?></h4>
    			<p><?php the_field('home_contact_text'); ?></p>
    		</div>
    	</a>
    </section>

  <?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>
