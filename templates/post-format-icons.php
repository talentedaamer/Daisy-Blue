<?php global $post_id; ?>

  <!-- gallery post format -->
  <?php if ( has_post_format('gallery',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-camera"></i>
    </div> <!-- .post-icon -->

  <!-- image post format -->
  <?php } elseif ( has_post_format('image',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-camera"></i>
    </div> <!-- .post-icon -->

  <!-- audio post format -->
  <?php } elseif ( has_post_format('audio',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-volume-up"></i>
    </div> <!-- .post-icon -->

  <!-- video post format -->
  <?php } elseif ( has_post_format('video',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-video-camera"></i>
    </div> <!-- .post-icon -->

  <!-- link post format -->
  <?php } elseif ( has_post_format('link',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-link"></i>
    </div> <!-- .post-icon -->

  <!-- quote post format -->
  <?php } elseif ( has_post_format('quote',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-quote-left"></i>
    </div> <!-- .post-icon -->

  <!-- chat post format -->
  <?php } elseif ( has_post_format('chat',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-comments"></i>
    </div> <!-- .post-icon -->

  <!-- status post format -->
  <?php } elseif ( has_post_format('status',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-pencil"></i>
    </div> <!-- .post-icon -->


  <!-- aside post format -->
  <?php } elseif ( has_post_format('aside',$post_id) ) { ?>
    <div class="post-icon">
      <i class="fa fa-plus"></i>
    </div> <!-- .post-icon -->


  <!-- standard post format -->
  <?php } else { ?>
    <div class="post-icon">
      <i class="fa fa-file-text-o"></i>
    </div> <!-- .post-icon -->
  <?php } ?>
  
  <?php if ( is_sticky() ) { ?>
    <div class="post-icon">
      <i class="fa fa-thumb-tack"></i>
    </div> <!-- .post-icon -->
  <?php } ?>