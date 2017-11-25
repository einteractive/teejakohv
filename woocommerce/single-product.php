<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
	<div class="row row-offcanvas row-offcanvas-left pt-3">
		<div id="shopRowSideBar" class="col-5 col-lg-3 sidebar-offcanvas" id="sidebar">

			<?php
				/**
				 * woocommerce_sidebar hook.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>
		</div><!-- /#shopRowSideBar  -->

		<div id="shopRowMain" class="col-12 col-lg-9">
			<?php
				/**
				 * @hooked woocommerce_breadcrumb - 20
				 *
				 */
				do_action( 'woocommerce_custom_breadcrumb' );
			?>
			<button type="button" class="btn btn-success btn-sm d-lg-none" data-toggle="offcanvas"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Shop Category</button>


		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div> <!-- /#shopRowMain  -->
</div> <!-- /.row-offcanvas  -->

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>


<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
