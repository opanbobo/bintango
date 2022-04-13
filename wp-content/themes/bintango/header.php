<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="BintanGo">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/vendor.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <script src="<?php bloginfo('template_url'); ?>/scripts/modernizr.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="navbar navbar-expand-md fixed-top">
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="BintanGo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'for creators' ) ); ?>">for creators <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'for business' ) ); ?>">for business</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'for fans' ) ); ?>">for fans</a>
          </li>
        </ul>
        
        <form class="form-inline mt-2 mt-md-0">
          <ul class="lang-switch"><?php pll_the_languages(array('display_names_as' => 'slug'));?></ul>
          
          <a class="btn btn--small btn__light text-uppercase mx-2" href="https://creator.bintango.com/login">Login!</a>
          <a class="btn btn--small btn__tiger text-uppercase mx-2" href="https://creator.bintango.com/register">Join Now!</a>
        </form>
      </div>
    </nav>