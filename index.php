<?php get_header(); ?>
<!-- Front page Slider with Bootstrap Carusel -->
<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'itemplate/carusel', 'front' ); ?>
<?php endif; ?>


<!-- Main .container Start-->
 <div class="container">
    <div class="row row-offcanvas row-offcanvas-left pt-3">


        <div class="col-5 col-lg-3 sidebar-offcanvas" id="sidebar">
					<?php get_sidebar(); ?>

        </div><!--/.sidebar-offcanvas -->

        <div class="col-12 col-lg-9">

            <button type="button" class="btn btn-success btn-sm d-lg-none" data-toggle="offcanvas"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Shop Category</button>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1 class="display4" ><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>



    </div>


      </div><!--/row-->

      </div> <!-- /.container -->
<?php get_footer(); ?>
