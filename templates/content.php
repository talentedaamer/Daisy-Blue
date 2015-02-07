<?php
/**
 * Main content file.
 */
?>


<article <?php post_class(); ?>>

  <?php get_template_part('templates/post-format-icons'); ?>

  <!-- entry title -->
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <!-- entry header hook -->
  <?php do_action( 'daisyblue_entry_header' ); ?>

  <div class="entry-content">
    <!-- featured image -->
    <?php if ( '' != get_the_post_thumbnail() ) { ?>
      <div class="featured-image mask-wrap thumbnail pull-left">
          <?php the_post_thumbnail('featured-blog'); ?>

          <div class="mask">
             <i class="fa fa-plus"></i>
          </div>
      </div>
    <?php } ?>

    <!-- entry summary -->
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div> <!-- .entry-content -->

  <!-- entry footer hook -->
  <?php do_action( 'daisyblue_entry_footer' ); ?>

</article>
