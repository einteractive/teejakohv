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

      <nav id="mainMenu" class="navbar navbar-expand-lg navbar-light bg-dark">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-white">
              <a class="nav-item nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link text-white" href="#">Features</a>
              <a class="nav-item nav-link text-white" href="#">Pricing</a>
              <a class="nav-item nav-link text-white" href="#">Disabled</a>
            </div>
          </div>
        </nav>
<div id="mainWraaper" class="container" role="main">
