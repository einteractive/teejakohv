<?php

/**
 * Styles.
 *
 * Theme Styles Functions.
 */

function theme_styles() {

	wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/css/theme.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	//wp_enqueue_style( 'slider_horizontal', get_template_directory_uri() . '/css/slider-horizontal.css' );
	wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/**
 * Theme Functions.
 *
 * Scripts Functions.
 */
function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script('jquery');
		wp_enqueue_script( 'popper_js',  get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'itheme_js', get_template_directory_uri() . '/js/itheme.js', array('popper_js'), '', true );


}
add_action( 'wp_enqueue_scripts', 'theme_js' );

/**
 * Theme Support.
 *
 * Add Theme Support.
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-lightbox' );


/**
 * Menu.
 *
 * Enable Menu Area.
 */
function register_theme_menus() {
	register_nav_menus(
		array(
			'primary'	=> __( 'Primary Menu', 'teejakohv' ),
			'topmenu'	=> __( 'Top Menu', 'teejakohv' ),
			'topmenulogin'	=> __( 'Top Login Menu', 'teejakohv' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

/**
 * Menu Item Custom Fields.
 *
 * Plugin.
 *
 */
class Menu_Item_Custom_Fields_Example {

	/**
	 * Holds our custom fields
	 *
	 * @var    array
	 * @access protected
	 * @since  Menu_Item_Custom_Fields_Example 0.2.0
	 */
	protected static $fields = array();


	/**
	 * Initialize plugin
	 */
	public static function init() {
		add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, '_fields' ), 10, 4 );
		add_action( 'wp_update_nav_menu_item', array( __CLASS__, '_save' ), 10, 3 );
		add_filter( 'manage_nav-menus_columns', array( __CLASS__, '_columns' ), 99 );

		self::$fields = array(
			'field_description' => __( 'Description', 'menu-item-custom-fields-example' ),
			//'field-02' => __( 'Custom Field #2', 'menu-item-custom-fields-example' ),
		);
	}


	/**
	 * Save custom field value
	 *
	 * @wp_hook action wp_update_nav_menu_item
	 *
	 * @param int   $menu_id         Nav menu ID
	 * @param int   $menu_item_db_id Menu item ID
	 * @param array $menu_item_args  Menu item data
	 */
	public static function _save( $menu_id, $menu_item_db_id, $menu_item_args ) {
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return;
		}

		check_admin_referer( 'update-nav_menu', 'update-nav-menu-nonce' );

		foreach ( self::$fields as $_key => $label ) {
			$key = sprintf( '_menu_item_%s', $_key );

			// Sanitize
			if ( ! empty( $_POST[ $key ][ $menu_item_db_id ] ) ) {
				// Do some checks here...
				$value = $_POST[ $key ][ $menu_item_db_id ];
			} else {
				$value = null;
			}

			// Update
			if ( ! is_null( $value ) ) {
				update_post_meta( $menu_item_db_id, $key, $value );
			} else {
				delete_post_meta( $menu_item_db_id, $key );
			}
		}
	}


	/**
	 * Print field
	 *
	 * @param object $item  Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args  Menu item args.
	 * @param int    $id    Nav menu ID.
	 *
	 * @return string Form fields
	 */
	public static function _fields( $id, $item, $depth, $args ) {
		foreach ( self::$fields as $_key => $label ) :
			$key   = sprintf( '_menu_item_%s', $_key );
			$id    = sprintf( 'edit-%s-%s', $key, $item->ID );
			$name  = sprintf( '%s[%s]', $key, $item->ID );
			$value = get_post_meta( $item->ID, $key, true );
			$class = sprintf( 'field-%s', $_key );
			?>
				<p class="description description-wide <?php echo esc_attr( $class ) ?>">
					<?php printf(
						'<label for="%1$s">%2$s<br /><input type="text" id="%1$s" class="widefat %1$s" name="%3$s" value="%4$s" /></label>',
						esc_attr( $id ),
						esc_html( $label ),
						esc_attr( $name ),
						esc_attr( $value )
					) ?>
				</p>
			<?php
		endforeach;
	}


	/**
	 * Add our fields to the screen options toggle
	 *
	 * @param array $columns Menu item columns
	 * @return array
	 */
	public static function _columns( $columns ) {
		$columns = array_merge( $columns, self::$fields );

		return $columns;
	}
}
Menu_Item_Custom_Fields_Example::init();





/**
 * Widgets.
 *
 * Enable Widget Area.
 */
function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}
create_widget( 'Page Sidebar', 'page-sidebar', 'Displays Page Sidebar' );
create_widget( 'Menu Footer', 'menu-footer', 'Displays menu in footer' );
create_widget( 'Info Footer', 'info-footer', 'Displays info in footer' );
create_widget( 'Shop Sidebar', 'shop-sidebar', 'Displays sidebar in Shop page' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );
create_widget( 'Cart menu', 'cart-menu', 'Cart menu' );
create_widget( 'Page Sidebar', 'page-sidebar', 'Displays sidebar in Page page' );


/**
 * Auto Update.
 *
 * All Plugins.
 */
add_filter( 'auto_update_plugin', '__return_true' );

/**
 * Orderby.
 *
 * Remove the Orderby Dropdown for Products in WooCommerce.
 */
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );

/**
 * Woocommerce Product Columns.
 *
 * Control number of product columns, default woocommerce Snippet.
 *
 */
// function loop_columns() {
// return 3; // 2 products per row
// }
// add_filter('loop_shop_columns', 'loop_columns', 999);
// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

/**
 * Woocommerce Disable Rating.
 *
 * Disable rating in main shop page product loop.
 *
 */
remove_action( 'woocommerce_after_shop_loop_item_title' , 'woocommerce_template_loop_rating', 5 );
/**
 * Woocommerce.
 *
 * Disable Checkout Cross Sales.
 *
 */
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10 );
/**
 * Woocommerce.
 *
 * Footer Checkout and Cart.
 *
 */
add_action( 'wpt_footer', 'wpt_footer_cart_link' );


function wpt_footer_cart_link() {

	global $woocommerce;

	if ( ( sizeof( $woocommerce->cart->cart_contents ) > 0 ) && ( !is_cart() && !is_checkout() ) ) :
		echo '<a class="btn btn-default alt" href="' . $woocommerce->cart->get_cart_url() . '" title="' . __( 'Cart' ) . '">' . __( 'Cart', 'woocommerce' ) . '</a>';

		echo '<a class="btn btn-success" href="' . $woocommerce->cart->get_checkout_url() . '" title="' . __( 'Checkout' ) . '">' . __( 'Checkout', 'woocommerce' ) . '</a>';
	endif;
}
/**
 * Woocommerce Checkout.
 *
 * Disable fields in Checkout page. to make this for shipping change billing to  shipping in unset(... and add_filter
 *
 */
function wpt_custom_billing_fields( $fields = array() ) {

	unset( $fields['billing_company'] );
	unset( $fields['billing_address_1'] );
	unset( $fields['billing_address_2'] );
	unset( $fields['billing_state'] );
	unset( $fields['billing_city'] );
	unset( $fields['billing_phone'] );

	// echo "<pre>";
	// var_export( $fields );
	// echo "</pre>";

	return $fields;

}
add_filter( 'woocommerce_billing_fields', 'wpt_custom_billing_fields' );

/**
 * Woocommerce Coupons.
 *
 * Disable coupons from standard hook
 *
 */

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );


/**
 * Widget Title.
 *
 * Translate
 *
 */
function widget( $args, $instance ) {
  extract($args);
  $title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance );
}



/**
 * Woocommerce.
 *
 * Change number of products displayed per page
 *
 */

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 6 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 40;
  return $cols;
}

/**
 * Woocommerce.
 *
 * Placeholder image
 *
 */

/*
* goes in theme functions.php or a custom plugin. Replace the image filename/path with your own :)
*
**/
add_action( 'init', 'custom_fix_thumbnail' );

function custom_fix_thumbnail() {
  add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');

	function custom_woocommerce_placeholder_img_src( $src ) {
	$upload_dir = wp_upload_dir();
	$uploads = untrailingslashit( $upload_dir['baseurl'] );
	$src = $uploads . '/2017/05/switch-product.jpg';

	return $src;
	}
}
/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Login / Logout Button in Menu.
 */
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );

function add_loginout_link( $items, $args ) {

   if (is_user_logged_in() && $args->theme_location == 'topmenulogin') {

       $items .= '<li class="log-one btn btn-light"><a class="nav-link text-dark" href="'. wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ) .'"> ' . __( 'Log Out', 'teejakohv' ) . ' </a></li>';

   }

   elseif (!is_user_logged_in() && $args->theme_location == 'topmenulogin') {

       $items .= '<li class="log-two btn btn-success"><a class="nav-link text-light" href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '"> ' . __( 'Login', 'teejakohv' ) . ' </a></li>';

   }

   return $items;

}

/**
 * Woocommerce OnSale.
 * Author: DJ
 * Change position OnSale in main shop page product loop.
 *
 */
remove_action( 'woocommerce_before_shop_loop_item_title' , 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_before_shop_loop_item_title' , 'woocommerce_show_product_loop_sale_flash', 15 );
/**
 * Woocommerce widget replace to wooWraaper beetwen wraaper-start.php and wraaper-end.php.
 * Author: DJ
 * Change position OnSale in main shop page product loop.
 *
 */
remove_action( 'woocommerce_after_main_content' , 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_sidebar' , 'woocommerce_output_content_wrapper_end', 15 );
