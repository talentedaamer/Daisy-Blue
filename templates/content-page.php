<?php
/**
 * content single template - single page.
 */
?>


<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  
    <!-- page content -->
    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <!-- pages -->
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'daisy-blue'), 'after' => '</p></nav>')); ?>
    </footer>

    <!-- comments -->
    <?php comments_template('/templates/comments.php'); ?>
   </article> <!-- .post_classes(); -->
<?php endwhile; ?>