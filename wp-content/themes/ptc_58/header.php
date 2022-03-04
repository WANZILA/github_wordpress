<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=" diploma in information technology, certificate in information technology, bible theology, church ministry, best 
  theological college in Uganda, list of recognised colleges in uganda, long distance learning , college diploma, recognised college in uganda, pastor training " />
  <meta name="description" content="Pentecostal Theological College and University is a fastest growing instituition in uganda, accredited by National council for Higher Education (NICHE) It inspires creativity in Ministry, learning,information technology, Agricultural projects and discovery enhancing the lives of it's students and staff and influencing the Ugandan higher education landscape" />
      <!-- <title>Pentecoastal Theological College, Mbale | Uganda</title> -->
    <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
    <?php wp_head(); ?>
    </head>
  <body>
  
     
    <!-- </header>   -->
 
      
<div class="container-fluid">
  <header >
  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <?php 
        if(function_exists('the_custom_logo')){
          //styling the logo by dev 
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
      ?>
      <!-- <img src="<?php echo $logo[0]?>" alt="logo"> -->
      <?php show_easylogo(); ?>
     
    </a>
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'main_menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav mr-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
    </div>
</nav>

            

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

            
  </header>
</div>