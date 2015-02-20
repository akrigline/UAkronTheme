<?php /* Template Name: Events Page */  ?>

<?php
/**
 * @package UAkronDesign
 */
get_header(); ?>

<?php get_template_part( 'content', 'jumbotron' ); ?>

  <section class="container-fluid">

  <?php $year = date('Y');
    while ($year > 2012) : ?>

        <?php get_template_part( 'content', 'events' ); ?>

        <?php $year--; ?>

  <?php endwhile; ?>

  </section><!-- container -->

<?php get_footer(); ?>
