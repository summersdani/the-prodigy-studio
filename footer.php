<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prodigy
 */

?>

	</div><!-- #content -->
        
        <div class="searchfooter">
            <div align="center"><h2>SUBSCRIBE TO OUR<br> NEWSLETTER AND NEVER MISS<br> FUTURE DISCOUNTS OR UPDATES</h2></div>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar') ) : ?>
                <?php endif; ?>
        </div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
                    <div class="social-media-widget"> <?php my_social_media_icons(); ?> </div>
                    
                    <h1>Enhancing The Learning Experience.</h1>
              
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'prodigy' ) ); ?>"><?php printf( esc_html__( '&copy; ', 'prodigy' ) ); ?></a>
                        <?php echo date('Y'); ?>
			<?php printf( esc_html__( '%1$s %2$s.', 'prodigy' ), 'Prodigy', 'The Academic Studio. All rights reserved' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
        
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
