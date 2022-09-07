<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	
	
	
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
  <title><?php wp_title(''); ?></title>
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), esc_html( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), esc_html( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>


<body <?php body_class(); ?>>

<header>
  <div class="header-inner">
    <div class="brand">
      <a href="<?php echo home_url(); ?>" title="<?php echo bloginfo(); ?>"><img src="/wp-content/uploads/loening-logo-rgb.svg" alt="<?php echo bloginfo(); ?>" title="<?php echo bloginfo(); ?>" width="210" height="42" /></a>
    </div>

    <div class="menu-container">
      <?php
        $defaults = array(
          'theme_location'  => 'primary',
          'menu'            => '',
          'container'       => 'div',
          'container_class' => '',
          'container_id'    => 'mainnavigation-inner-list',
          'menu_class'      => 'mainnavigation',
          'menu_id'         => '',
          'echo'            => true,
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 1,
          'walker'          => ''
        );
        wp_nav_menu( $defaults );
      ?>
    </div>

    <a class="menu-btn" href="#">
      <span class="icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </a>
  </div>
</header>



<div class="fullscreen-menu-container">
  <div class="fullscreen-menu-inner">

    <div class="close-mobile-menu-icon">
      <div class="close-line-wrap">
        <span class="close-line"></span><span class="close-line"></span>
      </div>
    </div>

    <?php
      $defaults = array(
        'theme_location'  => 'primary',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => 'fs-mainnavigation-inner-list',
        'menu_class'      => 'fs-mainnavigation',
        'menu_id'         => '',
        'echo'            => true,
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 1,
        'walker'          => ''
      );
      wp_nav_menu( $defaults );
    ?>
  </div>
</div>
