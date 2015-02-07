<?php
/**
 * content single template - single post.
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <!-- post title -->
    <header>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php do_action( 'daisyblue_entry_header' ); ?>
    </header>

    <!-- featured image -->
    <?php if ( '' != get_the_post_thumbnail() ) { ?>
      <div class="featured-image thumbnail">
          <?php the_post_thumbnail('featured-single'); ?>
      </div>
    <?php } ?>

    <!-- post content -->
    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <!-- post pages -->
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'daisy-blue'), 'after' => '</p></nav>')); ?>
    </footer>

    <!-- comments -->
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>