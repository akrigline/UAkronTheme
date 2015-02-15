<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package UAkronDesign
 */
?>

<div class="col-xs-12 col-sm-6 form">
  <form>

    <?php do_shortcode('[contact-form-7 id="22" title="Untitled"]'); ?>

  </form>
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