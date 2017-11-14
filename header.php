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

 <body>

    <nav id="topMenu" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="navbar" id="header">
          <!-- The WordPress Menu goes here -->
  				<?php wp_nav_menu(
  					array(
  						'theme_location'  => 'topmenu',
  						'container_class' => 'collapse navbar-collapse',
  						'container_id'    => 'navbarNavDropdown',
  						'menu_class'      => 'navbar-nav mr-auto',
  						'fallback_cb'     => '',
  						'menu_id'         => 'main-menu',
  						'walker'          => new WP_Bootstrap_Navwalker(),
  					)
  				); ?>

          <?php do_action('icl_language_selector'); ?>

        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Account section -->
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="row">


 <nav id="topMenu" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="navbar" id="header">



		<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'topmenulogin',
						'container_class' => 'navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>


        </div>
      </div>
    </nav>



          </div>
        </div>
      </div><!-- /account -->

      <a class="" href="<?php echo esc_url( home_url() ); ?>"><img id="site-logo" class="brand img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/teejakohv_logo.png" alt="" /></a>

      <!-- Search section -->
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="row">
            <div class="col-sm-6">
              <?php get_product_search_form() ?>
            </div>
            <div class="col-sm-6">


              <?php if ( dynamic_sidebar( 'cart-menu' ) ); ?>


            </div>
          </div>
        </div>
      </div><!-- /search -->






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
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>



<!--
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
-->
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        </nav>
<div id="mainWraaper" class="container" role="main">
