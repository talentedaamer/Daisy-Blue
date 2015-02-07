<?php
/**
 * Template Name: Sidebar Right
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

	</div><!-- .content -->

<?php get_footer(); ?>