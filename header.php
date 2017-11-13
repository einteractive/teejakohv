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
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
            </li>
                      </ul>

        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Account section -->
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-outline-success btn-block">Success</button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
            </div>
          </div>
        </div>
      </div><!-- /account -->

      <a class="" href="<?php echo esc_url( home_url() ); ?>"><img id="site-logo" class="brand img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/teejakohv_logo.png" alt="" /></a>

      <!-- Search section -->
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-outline-success btn-block">Success</button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
            </div>
          </div>
        </div>
      </div><!-- /search -->
      
      

      
      

      <nav id="mainMenu" class="navbar navbar-expand-md navbar-dark bg-dark">
   <a class="navbar-brand" href="#">Top navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
	      
	      
	      
	       <?php
            wp_nav_menu( array(
                'menu'              => 'primary-menu',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
	      
	      
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
      </div>

        </nav>
<div id="mainWraaper" class="container" role="main">
