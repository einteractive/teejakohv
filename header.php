<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>


    <?php wp_head(); ?>


    </head>

  <body <?php body_class(); ?>>


  <nav id="topMenu" class="navbar navbar-dark bg-dark p-0">
    <div class="container ">

        <!-- The WordPress Menu  -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'topmenu',
						'container_class' => '',
						'container'    => false,
            'link_before'     => '<i class="fa fa-angle-right text-success" aria-hidden="true"></i> ',
						'menu_class'      => 'mr-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'topMenu-id',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

        <!-- The WPML Menu  -->
        <?php do_action('icl_language_selector'); ?>

    </div>
  </nav>

  <!-- Main Container -->
  <div id="mainCont" class="container">

    <!-- Account section -->
    <div id="accountLog" class="container">

      <div class=" ml-auto d-flex flex-row-reverse">
        <div class="row">
          <span class="navbar-text px-2">
            <?php if ( is_user_logged_in() ) {
                $current_user = wp_get_current_user();
                echo _e('Welcome, ','teejakohv') . $current_user->user_firstname;
            } else {
                echo _e('Welcome','teejakohv');
                echo '<span>';
                echo '';
                echo '</span>';
            } ?>
          </span>

          <!-- The WordPress Menu goes here -->
  				<?php wp_nav_menu(
  					array(
  						'theme_location'  => 'topmenulogin',
  						'container_class' => '',
  						'container_id'    => '',
              'container'    => false,
  						'menu_class'      => '',
  						'fallback_cb'     => '',
  						'menu_id'         => '',
  						'walker'          => new WP_Bootstrap_Navwalker(),
  					)
  				); ?>
        </div>
      </div>
    </div><!-- /account -->

    <a class="" href="<?php echo esc_url( home_url() ); ?>"><img id="site-logo" class="brand img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/teejakohv_logo.png" alt="" /></a>

    <!-- Search section -->
    <div id="searchBar" class="row">
      <div class="ml-auto d-flex">
        <?php get_product_search_form() ?>

        <div id="cart" class="col">
          <div class="dropdown">
            <button class="btn btn-success px-3 btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php _e('Cart','woocommerce') ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

              <?php if ( dynamic_sidebar( 'cart-menu' ) ); ?>
            </div>
          </div>
        </div>
        </div>
      </div><!-- /search -->

  <!-- Page Wraaper #mainWraaper -->
  <div id="mainWraaper"  role="main">

      <!-- Primary Menu or Main Menu -->
      <nav id="mainMenu" class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ',
						'fallback_cb'     => '',
						'menu_id'         => 'mainMenu-id',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
</nav>
