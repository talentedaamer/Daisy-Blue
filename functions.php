<?php
/**
 * Main functions file, includes other functions files
 */


/**
 * path to the template directory
 */
$template_directory = get_template_directory();

/**
 * require all the custom functions files.
 */
require( $template_directory . '/lib/sidebar.php');         // Sidebar class
require( $template_directory . '/lib/config.php');          // Configuration
require( $template_directory . '/lib/titles.php');          // Page titles
require( $template_directory . '/lib/comments.php');        // Custom comments modifications
require( $template_directory . '/lib/widgets.php');         // Sidebars and widgets
require( $template_directory . '/lib/scripts.php');         // Scripts and stylesheets
require( $template_directory . '/lib/nav-walker.php');      // bootstrap nav walker class
require( $template_directory . '/lib/entry-meta.php');      // meta tags for posts
require( $template_directory . '/lib/custom.php');          // Custom functions
require( $template_directory . '/lib/action-hooks.php');    // acton hooks.


/**
 * Theme setup
 */
function daisyblue_setup() {

  // Make theme available for translation
  load_theme_textdomain('daisy-blue', get_template_directory() . '/lang');

  // support for automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // daisy-blue primary navigation
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'daisy-blue'),
  ));

  // post thumbnails
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(150, 150, false);
  // single post featured image
  add_image_size('featured-single', 710, 250, true); // 710px wide & 250px Height
  add_image_size('featured-blog', 250, 140, true); // 250px wide & 140px Height



  // post format support
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // editor style
  add_editor_style('/assets/css/editor-style.css');

  // Content width
  global $content_width;
  if (!isset($content_width)) { $content_width = 780; }

  // Custom Header
  $header_args = array(
      'random-default'         => false,
      'width'                  => 1090,
      'height'                 => 400,
      'flex-height'            => true,
      'flex-width'             => true,
      'header-text'            => false,
      'uploads'                => true,
  );
  add_theme_support( 'custom-header', $header_args );
  add_theme_support( 'allow_flexible_header_height', 200 );
  add_theme_support( 'allow_flexible_header_width', 1000 );

  // Custom Backgrounds
  $background_args = array(
      'default-color'  => 'f0f0f0',
      'default-repeat' => 'fixed',
      'default-image'  => get_template_directory_uri() . '/assets/images/pattern.png',
  );
  add_theme_support( 'custom-background', $background_args );

  // add support for woocommerce
  add_theme_support( 'woocommerce' );

}
add_action('after_setup_theme', 'daisyblue_setup');