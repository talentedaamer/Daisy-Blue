<?php
/**
 * theme main menu
 */
?>

<!-- doctype & head section -->
<?php get_template_part('templates/head'); ?>

<!-- starting body tags - classes -->
<body <?php body_class(); ?>>

  <!-- theme main wrapper -->
  <div class="wrap container" role="document">
    <header class="header">
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </header> <!-- .header -->

    <!-- begining main menu -->
    <?php if ( has_nav_menu( 'primary_navigation' ) ) { ?>
        <nav class="main-menu navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary_navigation',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'nav-container collapse navbar-collapse',
                    'container_id'      => 'navbar-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
        </nav> <!-- .main-menu -->
    <?php } ?>

    <?php
        $header_image = get_header_image();
        if ( ! empty($header_image) && is_home() ) { ?>
        <div class="banner">
          <img src="<?php header_image(); ?>" />
        </div> <!-- .banner -->
    <?php } ?>

    <!-- content section -->
    <div class="content row">

        <!-- before main content hook -->
        <?php do_action( 'db_before_main_content' ); ?>

        <!-- main content section -->
        <main class="<?php echo daisyblue_main_class(); ?>" role="main">
