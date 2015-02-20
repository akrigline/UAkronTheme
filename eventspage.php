<?php /* Template Name: Events Page */  ?>

<?php
/**
 * @package UAkronDesign
 */
get_header(); ?>

<?php get_template_part( 'content', 'jumbotron' ); ?>

  <section class="container-fluid">

  <?php $year = date('Y');
    while ($year >= 2012) : ?>

        
<div class="row">
  <h2><?php echo $year; ?></h2>
  <div class="col-xs-12 col-md-9">
    <div class="row">

      <?php /* Get the Post from the Advanced Graphic Design Show Category within this year's loop */ ?>
      <?php query_posts( array(
        'category_name' => 'events-adv',
        'posts_per_page' => 1,
        'year' => $year ) ); ?>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <figure class="event col-xs-6">
            <?php $image = get_field('event_image'); 
            /* Declare Variables for Images via ACF */
              $img_url = $image['url'];
              $img_alt = $image['alt'];
              $img_sm = $image['sizes'][ 'thumbnail' ];
              $img_md = $image['sizes'][ 'medium' ];
              $img_lg = $image['sizes'][ 'large' ];
              $img_xl = $image[ 'url' ];

              $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";
            ?>
            <img  size="50vw, 50vw, 35vw" 
                  srcset="<?php echo $srcset; ?>" 
                  alt="<?php echo $img_alt; ?>" >
          
            <figcaption class="row">
              <h3><?php the_title(); ?></h3>
              <h5><?php the_field('event_date'); ?></h5>
              <p><?php the_content(); ?></p>
            </figcaption>
          </figure>
        <?php endwhile; ?>

      <?php else : ?>

      <?php endif; ?>
      <?php wp_reset_query(); ?>

      <?php /* Get the Post from the Senior Show Category within this year's loop */ ?>
      <?php query_posts( array(
        'category_name' => 'events-senior',
        'posts_per_page' => 1,
        'year' => $year ) ); ?>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <figure class="event col-xs-6">
            <?php $image = get_field('event_image');
            /* Declare Variables for Images via ACF */
              $img_url = $image['url'];
              $img_alt = $image['alt'];
              $img_sm = $image['sizes'][ 'thumbnail' ];
              $img_md = $image['sizes'][ 'medium' ];
              $img_lg = $image['sizes'][ 'large' ];
              $img_xl = $image[ 'url' ];

              $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";
            ?>
            <img  size="50vw, 50vw, 35vw" 
                  srcset="<?php echo $srcset; ?>" 
                  alt="<?php echo $img_alt; ?>" >
          
            <figcaption class="row">
              <h3><?php the_title(); ?></h3>
              <h5><?php the_field('event_date'); ?></h5>
              <p><?php the_content(); ?></p>
            </figcaption>
          </figure>
        <?php endwhile; ?>

      <?php else : ?>

      <?php endif; ?>
      <?php wp_reset_query(); ?>

    </div>
  </div><!-- main events -->
  <div class="col-xs-12 col-md-3 events-other">
    <h3>Other Events</h3>
    <?php /* Get the Posts from the Other Events Category within this year's loop */ ?>
    <?php query_posts( array(
        'category_name' => 'events-other',
        'posts_per_page' => 1,
        'year' => $year ) ); ?>
    <?php if ( have_posts() ) : ?>
      <dl>
        <?php while ( have_posts() ) : the_post(); ?>
          <dt><?php the_title(); ?></dt>
          <dd>
            <?php the_field('event_date_open'); ?>
            <?php if ( get_field('event_date_close') ) : ?>
              
              <?php echo " - " . get_field('event_date_close'); ?>

            <?php endif; ?>
          </dd>
        <?php endwhile; ?>
      </dl>
    <?php else : ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
  </div><!-- other Events -->
</div><!-- event Row -->

        <?php $year--; ?>

  <?php endwhile; ?>

  </section><!-- container -->

<?php get_footer(); ?>
