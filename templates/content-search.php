<?php
/**
 * search content file
 */
?>

<article <?php post_class(); ?>>

  <!-- entry title -->
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <!-- entry header hook -->
  <?php do_action( 'daisyblue_entry_header' ); ?>

  <div class="entry-content">
    <!-- entry summary -->
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div> <!-- .entry-content -->

  <!-- entry footer hook -->
  <?php do_action( 'daisyblue_entry_footer' ); ?>

</article>