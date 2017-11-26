<?php
/**
 * The template for displaying all single posts.
 *
 */
 get_header(); ?>

<!-- Main .container Start-->
 <div class="container">
    <div class="row row-offcanvas row-offcanvas-left pt-3">


        <div id="pageRowSideBar" class="col-5 col-lg-3 sidebar-offcanvas" id="sidebar">
					<?php get_sidebar(); ?>
        </div><!--/span-->

        <div id="pageRowMain" class="col-12 col-lg-9">
          <button type="button" class="btn btn-success btn-sm d-lg-none mb-3" data-toggle="offcanvas"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Shop Category</button>

            <div class="single-arrow pull-right">
              <?php next_post_link( '%link', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i>' ); ?>
              <a href="<?php bloginfo('url'); ?>/?p=37"><i class="fa fa-th" aria-hidden="true"></i></span></a>
              <?php previous_post_link( '%link', '<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>' ); ?>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <article class="post">

                    <h2><a href="<?php the_permalink(); ?>"><i class="fa fa-thumb-tack mx-2" aria-hidden="true"></i><?php the_title(); ?></a></h2>


                      <p><strong>Author</strong> <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> <strong>Category:</strong> <?php the_category( ', ' ); ?></p>

                    <?php if( get_the_post_thumbnail() ) : ?>
                    <div class="img-container">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php endif; ?>

                    <?php the_content(); ?>
                    <?php comments_template(); ?>

                  </article>


            <?php endwhile; else : ?>

            <p><?php _e( 'Sorry, no posts found.', 'treehouse-portfolio' ); ?></p>

            <?php endif; ?>
















</div><!-- /#pageRowMain -->
</div><!--/row-->

</div> <!-- /.container -->


<?php get_footer(); ?>
