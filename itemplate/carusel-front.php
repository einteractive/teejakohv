<!-- Front page Slider with Bootstrap Carusel #carouselFront in _itemplate.scss -->
<?php
  $args = array(
    'post_type'     => 'slider',

  );
  $the_query = new WP_Query( $args );
?>

<div id="carouselFront" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <li data-target="#carouselFront" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>

    <?php endwhile; endif; ?>
  </ol>

  <?php rewind_posts(); ?>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="carousel-item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">

      <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
        $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
      ?>
            <?php

if(get_field('slider_link'))
{
	echo '<a href="' . get_field('slider_link') . '">';
}

?>
        <img class="d-block w-100" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>">
      </a>

      <div class="carousel-caption d-none d-md-block">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </div>

    </div>
    <?php endwhile; endif; ?>
  </div>

  <!-- Control arrow button -->
  <a class="carousel-control-prev" href="#carouselFront" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselFront" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
