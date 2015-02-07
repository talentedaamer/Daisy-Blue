<?php
/**
 * theme main footer template.
 */
?>


    <footer class="content-info" role="contentinfo">
      <div class="container">
        <p>
        <!-- copyright -->
        <?php esc_attr_e( '&copy;', 'daisy-blue' ); ?> <?php echo date( 'Y' ); ?>
        <!-- site name -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <!-- wordpress theme -->
        <?php printf( 'WordPress Theme By : ', 'daisy-blue' ); ?> 
        <!-- company -->
        <a href="<?php echo esc_url( __( 'http://oopthemes.com/', 'daisy-blue' ) ); ?>" title="<?php esc_attr_e( 'OOPThemes', 'daisy-blue' ); ?>"> <?php printf( 'OOPThemes', 'daisy-blue' ); ?></a>
        </p>
      </div>
    </footer>


</div><!-- .wrap -->

<?php wp_footer(); ?>

</body>
</html>