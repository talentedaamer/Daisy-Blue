<?php
/**
 * error 404 apge template.
 */
?>

<!-- page header -->
<?php get_template_part('templates/page', 'header'); ?>

<!-- alert warning -->
<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'daisy-blue'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'daisy-blue'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'daisy-blue'); ?></li>
  <li><?php _e('an out-of-date link', 'daisy-blue'); ?></li>
</ul>

<!-- get the searchform -->
<?php get_search_form(); ?>
