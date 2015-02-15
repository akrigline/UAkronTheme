<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package UAkronDesign
 */
?>

<div class="row">
  <h2>2015</h2>
  <div class="col-xs-12 col-md-9">
    <div class="row">

    <?php /* Get the Post from the Advanced Graphic Design Show Category within this year's loop */ ?>
    	<?php query_posts('category_name=events-adv&posts_per_page=1'); ?>
	    <?php if ( have_posts() ) : ?>
	      <?php while ( have_posts() ) : the_post(); ?>
		      <figure class="event col- xs-6">
						<?php $image = get_field('event_image'); ?>
		    		<img  size="100vw" 
									srcset="<?php echo $img_thumb; ?> 768w, 
													<?php echo $img_md; ?> 992w, 
													<?php echo $img_lg; ?> 1024w, 
													<?php echo $img_xl; ?> 1200w" 
									alt="<?php echo $img_alt; ?>" >
		      
		        <figcaption class="row">
		          <h3><?php the_title(); ?></h3>
		          <p><?php the_content(); ?></p>
		        </figcaption>
		      </figure>
	      <?php endwhile; ?>

	    <?php else : ?>

	    <?php endif; ?>
	    <?php wp_reset_query(); ?>


	    <?php /* Get the Post from the Senior Show Category within this year's loop */ ?>
      <?php query_posts('category_name=events-senior&posts_per_page=1'); ?>
	    <?php if ( have_posts() ) : ?>
	      <?php while ( have_posts() ) : the_post(); ?>
		      <figure class="event col- xs-6">
						<?php $image = get_field('event_image'); ?>
		    		<img  size="100vw" 
									srcset="<?php echo $img_thumb; ?> 768w, 
													<?php echo $img_md; ?> 992w, 
													<?php echo $img_lg; ?> 1024w, 
													<?php echo $img_xl; ?> 1200w" 
									alt="<?php echo $img_alt; ?>" >
		      
		        <figcaption class="row">
		          <h3><?php the_title(); ?></h3>
		          <p><?php the_content(); ?></p>
		        </figcaption>
		      </figure>
	      <?php endwhile; ?>

	    <?php else : ?>

	    <?php endif; ?>
      <?php wp_reset_query(); ?>

    </div>
  </div><!-- main events -->
  <div class="col-xs-12 col-md-3">
    <h3>Other Events</h3>
    <?php /* Get the Posts from the Other Events Category within this year's loop */ ?>
    <?php query_posts('category_name=events-other&posts_per_page=3'); ?>
    <?php if ( have_posts() ) : ?>
    	<dl>
	      <?php while ( have_posts() ) : the_post(); ?>
	      	<dt><?php the_title(); ?></dt>
		      <dd><?php the_field('event-date'); ?></dd>
	      <?php endwhile; ?>
      </dl>
    <?php else : ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
  </div><!-- other Events -->
</div><!-- event Row -->