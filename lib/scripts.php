<?php
/**
 * register scripts & styles
 */
function daisyblue_scripts() {

  // theme styles
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.min.css', false, 'style');
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', false, 'style');
  wp_enqueue_style('style', get_stylesheet_uri(), false, 'style');
  wp_enqueue_style('custom-fonts', get_template_directory_uri() . '/assets/css/custom-fonts.css', false, 'style');

  // load comment-reply on single
  if ( is_singular() ) wp_enqueue_script('comment-reply');

  // theme scripts
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.7.0.min.js', array( 'jquery' ), null, false);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), null, true);
  wp_enqueue_script('custom-functions', get_template_directory_uri() . '/assets/js/custom-functions.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', 'daisyblue_scripts', 100);
