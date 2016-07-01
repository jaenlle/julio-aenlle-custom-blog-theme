<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo ('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href ="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>

    <div class="container">
        <header class="row">

          <div class="nine columns">
              <h3><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo ('name'); ?></a></h3>
              <h5><?php bloginfo ('description'); ?></h5>
          </div>

      <!-- Search Form -->
          <div class="three columns">
            <?php get_search_form(); ?>
          </div>
        </header>

          <div class="row"> <!-- this div houses the menu -->
              <div class="twelve columns">
                  <?php wp_nav_menu( array(
                          'sort_column'     =>  'menu_order',
                          'container_class' =>  'blank-menu-header'
                      )); ?>
              </div>
          </div>
