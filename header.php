<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>

      <!--navbar-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav navbar-nav',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'          => 2,
                'walker'         => new bs4_walker_nav_menu()
             ) );
          ?>
          <form method="get" role="search" action="<?php echo esc_url(home_url('/')); ?>" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="<?php _e('Search', 'textdomain'); ?>" name="s">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php _e('Search', 'textdomain'); ?></button>
          </form>
        </div>
        </div>
      </nav> <!--end navbar-->
