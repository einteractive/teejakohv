<?php get_header(); ?>


    <div class="row row-offcanvas row-offcanvas-left pt-3">


        <div class="col-5 col-lg-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group " role="tablist">
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">SUper</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div><!--/span-->

        <div class="col-12 col-lg-9">
          <p class="float-left ">
            <button type="button" class="btn btn-primary btn-sm d-lg-none" data-toggle="offcanvas">Toggle nav</button>
          </p>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
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

<?php get_sidebar(); ?>
      </div><!--/row-->


<?php get_footer(); ?>
