<?php
/**
 * entry meta for header & footer
 */

/**
 * entry header opening
 */
function daisyblue_entry_header_opening() {
    echo '<header class="entry-header">';
}
add_action( 'daisyblue_entry_header', 'daisyblue_entry_header_opening', 5 );

/**
 * entry post date
 */
if ( ! function_exists( 'daisyblue_post_date' ) ) :
function daisyblue_post_date() {

    printf( __( '<span class="date"><i class="fa fa-clock-o"></i><a href="%1$s" title="%2$s"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>', 'daisy-blue' ),
        esc_url( get_permalink() ),
        esc_attr( get_the_time() ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() )
    );
}
add_action( 'daisyblue_entry_header', 'daisyblue_post_date', 6 );
endif;

/**
 * entry author
 */
if ( ! function_exists( 'daisyblue_post_author' ) ) :
function daisyblue_post_author() {

    printf( __( '<span class="author"><i class="fa fa-user"></i><span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span></span>', 'daisy-blue' ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_attr( sprintf( __( 'View all posts by %s', 'daisy-blue' ), get_the_author() ) ),
        esc_html( get_the_author() )
    );
}
add_action( 'daisyblue_entry_header', 'daisyblue_post_author', 7 );
endif;

/**
 * post comments
 */
if ( ! function_exists( 'daisyblue_post_comments' ) ):
function daisyblue_post_comments() {

    if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) { ?>
        <span class="comments">
            <i class="fa fa-comment"></i><?php comments_popup_link( __( ' Leave a comment', 'daisy-blue' ), __( ' 1 Comment', 'daisy-blue' ), __( ' % Comments', 'daisy-blue' ) ); ?>
        </span>
    <?php }
}
add_action( 'daisyblue_entry_header', 'daisyblue_post_comments', 8 );
endif;


/**
 * entry header closing
 */
function daisyblue_entry_header_closing() {
    echo '</header>';
}
add_action( 'daisyblue_entry_header', 'daisyblue_entry_header_closing', 9 );



/**
 * entry footer opening
 */
function daisyblue_entry_footer_opening() {
    echo '<header class="entry-footer">';
}
add_action( 'daisyblue_entry_footer', 'daisyblue_entry_footer_opening', 5 );
/**
 * post categories - entry footer
 */
if ( ! function_exists( 'daisyblue_post_categories' ) ):
function daisyblue_post_categories() {

    $post_categories = get_the_category();
    if ( $post_categories ) {

        echo '<span class="cats"><i class="fa fa-folder"></i>';
        $num_categories = count( $post_categories );
        $category_count = 1;

        foreach ( $post_categories as $category ) {
            $html_before = '<a href="' . get_category_link( $category->term_id ) . '" class="cat-text">';
            $html_after = '</a>';

            if ( $category_count < $num_categories )
                $sep = ', ';
            elseif ( $category_count == $num_categories )
                $sep = '';
                echo $html_before . $category->name . $html_after . $sep;
                $category_count++;
            }
        echo '</span>';
    }
}
add_action( 'daisyblue_entry_footer', 'daisyblue_post_categories', 6 );
endif;

/**
 * post tags - entry footer
 */
if ( ! function_exists( 'daisyblue_post_tags' ) ):
function daisyblue_post_tags() {


    $post_tags = get_the_tags();
    if ( $post_tags ) {

        echo '<span class="tags"><i class="fa fa-bookmark"></i></span>';
        $num_tags = count( $post_tags );
        $tag_count = 1;

        foreach( $post_tags as $tag ) {
            $html_before = '<a href="' . get_tag_link($tag->term_id) . '" rel="tag nofollow" class="tag-text">';
            $html_after = '</a>';

            if ( $tag_count < $num_tags )
                $sep = ', ';
            elseif ( $tag_count == $num_tags )
                $sep = '';

            echo $html_before . $tag->name . $html_after . $sep;
            $tag_count++;
        }
        echo '</span>';
    }
}
add_action( 'daisyblue_entry_footer', 'daisyblue_post_tags', 7 );
endif;
/**
 * entry footer closing
 */
function daisyblue_entry_footer_closing() {
    echo '</header>';
}
add_action( 'daisyblue_entry_footer', 'daisyblue_entry_footer_closing', 8 );