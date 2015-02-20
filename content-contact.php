<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package UAkronDesign
 */
?>

<div class="col-xs-12 col-sm-6 form">
    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
</div>
<div class="col-xs-12 col-sm-6">
  <div class="contactContent">

    <?php the_content(); ?>

    <address>
      <strong>Myers School of Art</strong><br/>
      150 E. Exchange St.<br/>
      University of Akron Folk Hall<br/>
      Akron, OH 44325<br/>
    </address>
  </div>
</div>