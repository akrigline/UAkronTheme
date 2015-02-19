<?php
/**
 * The template for displaying the footer.
 *
 * @package UAkronDesign
 */
?>
  
  <div class="pseudofooter"></div>
  <footer>
    <div class="container">
      <div class="col-xs-12 col-sm-3">
        <p>Myers School of Art<br>
        150 E Exchange St.<br>
        University of Akron Folk Hall<br>
        Akron, OH 44325</p>
      </div>
      <div class="col-xs-12 col-sm-5">
        <p>
          Contact Info:<br>
          330.972.6030<br>
          ua.art@uakron.edu<br>
          <a href="https://www.uakron.edu/admissions/undergraduate/who-are-you/index.dot"> Apply </a> / 
          <a href="https://www.uakron.edu/about_ua/visiting/"> Schedule a Visit </a> / 
          <a href="https://www.uakron.edu/admissions/undergraduate/contact-us/index.dot"> Contact Admissions </a> /
          <a href="https://www.uakron.edu/development/"> Support Myers </a>
        </p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <a href="http://uakron.edu"><img src="<?php bloginfo('template_directory'); ?>/img/uakron_logo.svg" class="uaLogo" alt=""></a>
        <small>The University of Akron is an Equal Education and Emploment Institution. &copy; 2015</small>
      </div>
    </div>
  </footer>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>


  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.focuspoint.js"></script>

  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>

  <?php wp_footer(); ?>
</body>
</html>