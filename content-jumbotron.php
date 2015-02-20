<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <?php $image = get_field('jumbotron_image'); 
      /* Declare Variables for Images via ACF */
      $img_url = $image['url'];
      $img_alt = $image['alt'];
      $img_sm = $image['sizes'][ 'thumbnail' ];
      $img_md = $image['sizes'][ 'medium' ];
      $img_lg = $image['sizes'][ 'large' ];
      $img_xl = $image[ 'url' ];

      $srcset = $img_sm . " 768w, " . $img_md . " 992w, " . $img_lg . " 1024w, " . $img_xl . " 1200w";

      /* Get Focuspoint data for the Image */
      $focus_width = $image['sizes']['thumbnail-width'];
      $focus_height = $image['sizes']['thumbnail-height'];
      
      $focus_x = get_field('focus_x');
      $focus_y = get_field('focus_y');

      /* Get Jumbotron Text */
      $header = get_field('jumbotron_header');
      $blurb = get_field('jumbotron_text');

    ?>

    <figure class="pageHeader">
      
      <div class="focuspoint"
          data-focus-x="<?php echo $focus_x; ?>"
          data-focus-y="<?php echo $focus_y; ?>"
          data-image-w="<?php echo $focus_width; ?>"
          data-image-h="<?php echo $focus_height; ?>">
        <img  sizes="100vw" 
              srcset="<?php echo $srcset; ?>"
              alt="<?php echo $img_alt; ?>" >
      </div>
      <figcaption class="blurb">
        <h4><?php echo $header; ?></h4>
      </figcaption>
    </figure>

  <?php endwhile; ?>

<?php else : ?>
<?php endif; ?>