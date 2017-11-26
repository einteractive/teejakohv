<?php get_header(); ?>
<!-- Main .container Start-->
 <div class="container">
    <div class="row row-offcanvas row-offcanvas-left pt-3">


        <div id="pageRowSideBar" class="col-5 col-lg-3 sidebar-offcanvas" id="sidebar">
					<?php get_sidebar(); ?>
        </div><!--/span-->

        <div id="pageRowMain" class="col-12 col-lg-9">

            <button type="button" class="btn btn-success btn-sm d-lg-none mb-3" data-toggle="offcanvas"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Shop Category</button>


            <div class="page-header">
              <h1><?php ucfirst(wp_title('')); ?></h1>
            </div>

            <hr class="border-success my-3">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post clearfix">
            <?php
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
              ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
              <p><em>
                By <?php the_author(); ?>
                on <?php echo the_time('l, F jS, Y');?>

                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
              </em></p>



            <h2><a href="<?php the_permalink(); ?>"><i class="fa fa-thumb-tack mx-2" aria-hidden="true"></i><?php the_title(); ?></a></h2>


            <?php the_excerpt(); ?>
            <?php the_category( ', ' ); ?>

<a href="<?php the_permalink(); ?>" class="btn btn-outline-success pull-right" role="button" aria-pressed="true">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>



          </article>

<hr class="border-success">
        <?php endwhile; else: ?>

          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>
</div><!-- /#pageRowMain -->
</div><!--/row-->

</div> <!-- /.container -->


<?php get_footer(); ?>
