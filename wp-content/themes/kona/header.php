<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.4.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
  <?php wp_head(); ?>
</head>

<body <?php body_class('sticky-header'); ?>>

  <?php wp_body_open(); ?>


  <!-- Start Header -->
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
  <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
  <!-- Start Header -->
  <header id="masthead" class="header axil-header header-style-5 site-header">
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu fixed-top bg-body-tertiary">
      <div class="container">
        <div class="header-navbar">
          <div class="header-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo logo-dark">
              <img src="<?php echo get_template_directory_uri() . '/img/logo/logofgl.png'; ?>" alt="Site Logo">
            </a>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo logo-light">
              <img src="<?php echo get_template_directory_uri() . '/img/logo/logofgl.png'; ?>" alt="Site Logo">
            </a>
          </div>
          <div class="header-main-nav">
            <!-- Start Mainmanu Nav -->
            <nav class="mainmenu-nav">
              <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
              <div class="mobile-nav-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                  <img src="<?php echo get_template_directory_uri() . '/img/logo/logofgl.png'; ?>" alt="Site Logo">
                </a>
              </div>
              <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul id="bootscore-navbar" class="mainmenu %2$s">%3$s</ul>',
                'depth'          => 2,
                'walker'         => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>
            </nav>
            <!-- End Mainmanu Nav -->
          </div>
          <div class="header-action">
            <ul class="action-list">
              <li class="axil-search d-xl-block d-none">
                <input type="search" class="placeholder product-search-input" name="search2" id="search2" value="" maxlength="128" placeholder="What are you looking for?" autocomplete="off">
                <button type="submit" class="icon wooc-btn-search">
                  <i class="flaticon-magnifying-glass"></i>
                </button>
              </li>
              <li class="axil-search d-xl-none d-block">
                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                  <i class="flaticon-magnifying-glass"></i>
                </a>
              </li>
              <li class="wishlist">
                <a href="<?php echo esc_url(home_url('/wishlist')); ?>">
                  <i class="flaticon-heart"></i>
                </a>
              </li>
              <?php
              if (class_exists('WooCommerce')) :
                get_template_part('template-parts/header/offcanvas', 'woocommerce');
              endif;
              ?>
              <?php
              if (class_exists('WooCommerce')) :
                get_template_part('template-parts/header/actions', 'woocommerce');
              else :
                get_template_part('template-parts/header/actions');
              endif;
              ?>
              <li class="axil-mobile-toggle">
                <button class="menu-btn mobile-nav-toggler">
                  <i class="flaticon-menu-2"></i>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Mainmenu Area -->
    <div class="header-top-campaign">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-10">
            <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
              <div class="slick-slide">
                <div class="campaign-content">
                  <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                </div>
              </div>
              <div class="slick-slide">
                <div class="campaign-content">
                  <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->



  <div id="page" class="site">
    <?php
    /*
    <header id="masthead" class="site-header">

      <div class="fixed-top bg-body-tertiary">

        <nav id="nav-main" class="navbar navbar-expand-lg">

          <div class="<?= bootscore_container_class(); ?>">

            <!-- Navbar Brand -->
            <a class="navbar-brand xs d-md-none" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-sm.svg" alt="logo" class="logo xs"></a>
            <a class="navbar-brand md d-none d-md-block" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo.svg" alt="logo" class="logo md"></a>

            <!-- Offcanvas Navbar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
              <div class="offcanvas-header">
                <span class="h5 offcanvas-title"><?php esc_html_e('Menu', 'bootscore'); ?></span>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">

                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container'      => false,
                  'menu_class'     => '',
                  'fallback_cb'    => '__return_false',
                  'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                  'depth'          => 2,
                  'walker'         => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>

                <!-- Top Nav 2 Widget -->
                <?php if (is_active_sidebar('top-nav-2')) : ?>
                  <?php dynamic_sidebar('top-nav-2'); ?>
                <?php endif; ?>

              </div>
            </div>

            <div class="header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <?php if (is_active_sidebar('top-nav')) : ?>
                <?php dynamic_sidebar('top-nav'); ?>
              <?php endif; ?>

              <?php
              if (class_exists('WooCommerce')) :
                get_template_part('template-parts/header/actions', 'woocommerce');
              else :
                get_template_part('template-parts/header/actions');
              endif;
              ?>

              <!-- Navbar Toggler -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
              </button>

            </div><!-- .header-actions -->

          </div><!-- bootscore_container_class(); -->

        </nav><!-- .navbar -->

        <?php
        if (class_exists('WooCommerce')) :
          get_template_part('template-parts/header/top-nav-search-collapse', 'woocommerce');
        else :
          get_template_part('template-parts/header/top-nav-search-collapse');
        endif;
        ?>

      </div><!-- .fixed-top .bg-light -->

      <!-- Offcanvas User and Cart -->
      <?php
      if (class_exists('WooCommerce')) :
        get_template_part('template-parts/header/offcanvas', 'woocommerce');
      endif;
      ?>

    </header><!-- #masthead -->
    */
    ?>