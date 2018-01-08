<?php get_header(); ?>



<!-- Main .container Start-->
 <div class="container">
    <div class="row row-offcanvas row-offcanvas-left pt-3">


        <div id="pageRowSideBar" class="col-5 col-lg-3 sidebar-offcanvas" id="sidebar">
					<?php get_sidebar(); ?>
<!--
          <div class="list-group " role="tablist">
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link to link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
-->
        </div><!--/span-->

        <div id="pageRowMain" class="col-12 col-lg-9">

            <?php if ( !is_cart() && !is_checkout() ) : ?>
              <button type="button" class="btn btn-success btn-sm d-lg-none mb-3" data-toggle="offcanvas"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Shop Category</button>
            <?php endif; ?>
            <?php if ( is_checkout() ) : 
              global $woocommerce;
              $cart_url = $woocommerce->cart->get_cart_url();
              
            ?>
            <a class="btn btn-success btn-sm mb-3" href="<?php echo $cart_url; ?>" role="button"><i class="fa fa-reply" aria-hidden="true"></i> <?php _e('Back to cart','teejakohv') ?></a>
             
            <?php endif; ?>


            
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
