<?php

/**
 * Enqueue styles & scripts
 *
 * @package Bootscore 
 * @version 5.3.4
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Enqueue scripts and styles
 */
function bootscore_scripts()
{

  // Get modification time. Enqueue files with modification date to prevent browser from loading cached scripts and styles when file content changes.
  $modificated_bootscoreCss   = (file_exists(get_template_directory() . '/css/main.css')) ? date('YmdHi', filemtime(get_template_directory() . '/css/main.css')) : 1;
  $modificated_styleCss       = date('YmdHi', filemtime(get_stylesheet_directory() . '/style.css'));
  $modificated_fontawesomeCss = date('YmdHi', filemtime(get_template_directory() . '/fontawesome/css/all.min.css'));
  $modificated_bootstrapJs    = date('YmdHi', filemtime(get_template_directory() . '/js/lib/bootstrap.bundle.min.js'));
  $modificated_themeJs        = date('YmdHi', filemtime(get_template_directory() . '/js/theme.js'));


  // bootScore
  require_once 'scss-compiler.php';
  bootscore_compile_scss();
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), $modificated_bootscoreCss);

  // Style CSS
  wp_enqueue_style('bootscore-style', get_stylesheet_uri(), array(), $modificated_styleCss);

  // Fontawesome
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), $modificated_fontawesomeCss);

  // Bootstrap JS
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/lib/bootstrap.bundle.min.js', array(), $modificated_bootstrapJs, true);

  // Theme JS
  wp_enqueue_script('bootscore-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), $modificated_themeJs, true);

  // load stylesheet inside the css folder
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/vendor/bootstrap.min.css');
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/vendor/font-awesome.css');
  wp_enqueue_style('jquery.ui', get_stylesheet_directory_uri() . '/css/vendor/jquery.ui.min.css');
  wp_enqueue_style('sal', get_stylesheet_directory_uri() . '/css/vendor/flaticon/flaticon.css');
  wp_enqueue_style('sal', get_stylesheet_directory_uri() . '/css/vendor/sal.css');
  wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/css/vendor/slick-theme.css');
  wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/css/vendor/slick.css');
  wp_enqueue_style('base', get_stylesheet_directory_uri() . '/css/vendor/base.css');
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css');
  wp_enqueue_style('kona', get_stylesheet_directory_uri() . '/css/kona.css');

  // load javascript inside the js folder
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '', true);
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '', true);
  wp_enqueue_script('popper', get_template_directory_uri() . '/js/vendor/popper.min.js', array(), '', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '', true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/js/vendor/slick.min.js', array(), '', true);
  wp_enqueue_script('js.cookie', get_template_directory_uri() . '/js/vendor/js.cookie.js', array(), '', true);
  wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/vendor/jquery-ui.min.js', array(), '', true);
  wp_enqueue_script('jquery.ui.touch-punch', get_template_directory_uri() . '/js/vendor/jquery.ui.touch-punch.min.js', array(), '', true);
  wp_enqueue_script('sal', get_template_directory_uri() . '/js/vendor/sal.js', array(), '', true);
  wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri() . '/js/vendor/jquery.magnific-popup.min.js', array(), '', true);
  wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/vendor/imagesloaded.pkgd.min.js', array(), '', true);
  wp_enqueue_script('isotope', get_template_directory_uri() . '/js/vendor/isotope.pkgd.min.js', array(), '', true);
  wp_enqueue_script('counterup', get_template_directory_uri() . '/js/vendor/counterup.js', array(), '', true);
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/vendor/waypoints.min.js', array(), '', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/source/main.js', array(), '', true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'bootscore_scripts');


/**
 * Preload Font Awesome
 */
add_filter('style_loader_tag', 'bootscore_fa_preload');

function bootscore_fa_preload($tag)
{

  $tag = preg_replace("/id='fontawesome-css'/", "id='fontawesome-css' onload=\"if(media!='all')media='all'\"", $tag);

  return $tag;
}
