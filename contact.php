<?php /* Template Name: Contact */ ?>

<?php
/**
 * @package UAkronDesign
 */
get_header(); ?>

<?php get_template_part( 'content', 'jumbotron' ); ?>

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
