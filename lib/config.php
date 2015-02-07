<?php
/**
 * theme configurations, classes, sidebars
 */


/**
 * .main classes
 */
function daisyblue_main_class() {
  if (daisyblue_display_sidebar()) {
    // Classes on pages with the sidebar
    $class = 'main col-sm-8';
  } else {
    // Classes on full width pages
    $class = 'col-sm-12';
  }
  return $class;
}

/**
 * .sidebar classes
 */
function daisyblue_sidebar_class() {
  return 'sidebar col-sm-4';
}

/**
 * Hide sidebar on the following if true
 */
function daisyblue_display_sidebar() {
  $sidebar_config = new daisyblue_Sidebar(

    // condition check for removing sidebar on pages
    array(
      'is_404',
    ),
    // condition check for removing sidebar on templates
    array(
      'template-fullwidth.php'
    )
  );

  return apply_filters('daisyblue_display_sidebar', $sidebar_config->display);
}