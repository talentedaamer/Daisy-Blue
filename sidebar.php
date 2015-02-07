<?php
/**
 * main sidebar template.
 */
?>

<!-- load widgets if any -->
<?php if ( is_active_sidebar( 'sidebar-primary' ) ) {
	dynamic_sidebar('sidebar-primary');
} else { ?>
	<!-- else show the defaulf message -->
	<section class="widget">
		<h3 class="widget-title">Primary Sidebar</h3>
		<p>
		  This is Primary sidebar widget area. Go to widgets and add any widget to "Primary Sidebar" to show here.
		</p>
	</section>
<?php } ?>