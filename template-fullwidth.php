<?php
/**
 * Template Name: Full Width
 */
?>

<!-- get header.php -->
<?php get_header(); ?>

		<!-- page header -->
		<?php get_template_part('templates/page', 'header'); ?>

		<!-- content page -->
		<?php get_template_part('templates/content', 'page'); ?>

		<!-- post pagination -->
		<?php daisyblue_pagination(); ?>

		</main><!-- /.main -->

		<!-- sidebar/widget area -->
		<?php if (daisyblue_display_sidebar()) : ?>
		<aside class="<?php echo daisyblue_sidebar_class(); ?>" role="complementary">
		  <?php get_sidebar(); ?>
		</aside><!-- .sidebar -->
		<?php endif; ?>

	</div><!-- .content -->

<?php get_footer(); ?>