<?php 
/**
 * single post template.
 */
?>

<!-- get header.php -->
<?php get_header(); ?>

      <!-- breadcrumbs -->
      <?php
        if ( function_exists('daisyblue_breadcrumbs') )
          daisyblue_breadcrumbs();
      ?>

      <!-- content post formats -->
      <?php get_template_part('templates/content', 'single'); ?>

    </main><!-- /.main -->

    <!-- sidebar/widget area -->
    <?php if (daisyblue_display_sidebar()) : ?>
    <aside class="<?php echo daisyblue_sidebar_class(); ?>" role="complementary">
      <?php get_sidebar(); ?>
    </aside><!-- .sidebar -->
    <?php endif; ?>

  </div><!-- .content -->

<?php get_footer(); ?>
