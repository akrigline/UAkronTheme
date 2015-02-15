<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UAkronDesign
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>University of Akron Graphic Design | Myers School of Art</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

<?php if ( is_page('info') ) : ?>

	<link rel="stylesheet" href="css/odometer-theme-default.css" />
	<script src="js/vendor/odometer.js"></script>

<? endif; ?>

  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/picturefill.min.js"></script>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
