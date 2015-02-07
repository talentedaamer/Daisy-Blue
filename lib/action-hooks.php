<?php
/**
 * action hooks.
 */

add_action( 'db_before_main_content', 'db_sidebar_left' );
function db_sidebar_left() {
	if ( is_page_template( 'template-sidebar-right.php' ) ) { ?>

		<!-- sidebar/widget area -->
		<?php if (daisyblue_display_sidebar()) : ?>
		<aside class="<?php echo daisyblue_sidebar_class(); ?>" role="complementary">
		  <?php get_sidebar(); ?>
		</aside><!-- .sidebar -->
		<?php endif; ?>
		
	<?php }
}