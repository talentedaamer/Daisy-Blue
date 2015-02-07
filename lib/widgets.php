<?php
/**
 * Register sidebars and widgets
 */
function daisyblue_widgets_init() {
  // Sidebars
  register_sidebar(array(
    'name'          => __('Primary', 'daisy-blue'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));

  // Widgets
  register_widget('daisyblue_recent_posts_widget');
}
add_action('widgets_init', 'daisyblue_widgets_init');

/**
 * daisyblue recent post widget
 */
class daisyblue_recent_posts_widget extends WP_Widget {
  public function __construct() {
    parent::__construct(
      'daisyblue-recent-posts', // Base widget ID
      __('01 : Recent Posts Widget', 'daisy-blue'), // Title of Widget
      array( 
        'description' => __( 'Show list of recent posts with whumbnail anywhere in widget area.', 'daisy-blue' ),
      )
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $no_of_posts = apply_filters( 'no_of_posts', $instance['no_of_posts'] );

    echo $args['before_widget'];
    
    if ( ! empty( $title ) )
      echo $args['before_title'] . $title . $args['after_title'];
    
    // WP_Query arguments
    $query_args = array (
      'post_type'           => 'post',
      'posts_per_page'      => $no_of_posts,
      'offset'              => 0,
      'ignore_sticky_posts' => 1
    );
    // The Query
    $daisyblue_recent_posts = new WP_Query( $query_args );
    if($daisyblue_recent_posts->have_posts()) : ?>
    
    <?php
      while($daisyblue_recent_posts->have_posts()) : 
      $daisyblue_recent_posts->the_post();
         ?>
        <div class="daisyblue-recent media">
           <?php if( has_post_thumbnail() ) : ?>
            <a class="pull-left" href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('thumbnail'); ?>
            </a>
           <?php else : ?>
             <a class="no-image pull-left" href="<?php the_permalink(); ?>">
              <span class="no-image-icon fa fa-picture-o"></span>
             </a>
           <?php endif; ?>  
           <div class="recent-post-body media-body">
            <h4 class="recent-post-title media-heading">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h4>
            <?php
              $widget_content = get_the_content(); // get the content of the post
              $widget_excerpt = wp_trim_words( $widget_content, 10, '<a href="'. get_permalink() .'"> ...Read More</a>' );
              echo $widget_excerpt; // echo the trimmed content upto 10 words.
            ?>
           </div> <!-- .media-body -->   
    </div> <!-- .media -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
          Sorry ! There are no posts yet.
    <?php endif; ?>

    <?php
    
    echo $args['after_widget'];
  }

  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'Latest Posts', 'daisy-blue' );
    }
    if ( isset( $instance[ 'no_of_posts' ] ) ) {
      $no_of_posts = $instance[ 'no_of_posts' ];
    }
    else {
      $no_of_posts = __( '5', 'daisy-blue' );
    }
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'daisy-blue' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    
    <label for="<?php echo $this->get_field_id( 'no_of_posts' ); ?>"><?php _e( 'No. of Posts:', 'daisy-blue' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'no_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'no_of_posts' ); ?>" type="text" value="<?php echo esc_attr( $no_of_posts ); ?>" />
    </p>
    <?php 
  }
  
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['no_of_posts'] = ( ! empty( $new_instance['no_of_posts'] ) ) ? strip_tags( $new_instance['no_of_posts'] ) : '5';
    if ( is_numeric($new_instance['no_of_posts']) == false ) {
      $instance['no_of_posts'] = $old_instance['no_of_posts'];
      }
    return $instance;
     
  }
}