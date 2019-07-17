<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

 </div>
    </div>
        </div>
<!-- 
    End Warp layout
 -->

<footer>
    <div class="section-container footer-container">
        <div class="container">
            <div class="row">
           
           
         
	<?php
if ( ! dynamic_sidebar( 'footer' ) ) {  ?>

<div class="col-md-4">
 <?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) ); ?>
 </div>

 <div class="col-md-4">
 <?php the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) ); ?>
 </div>
<?php } ?>	
	
<?php echo wpautop( do_shortcode($newsletter['code_newsletter']) );   ?>

         
            </div>
        </div>
    </div>
</footer>

<!-- please no change it send me a email if you get a support marviorocha@marviorocha.com  -->
	<footer id="footer" role="contentinfo">
		<div class="container">
        <p><small> &copy; <?php echo date( 'Y' ); ?> <a rel="nofollow" href="<?php echo esc_url( home_url() ); ?>">
        <?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'stationproradio' ); ?> |
         <?php echo sprintf( __( 'Station Pro - Made with <i class="fa fa-heart-o"></i> by <a href="http://www.marviorocha.com" rel="nofollow" 
         target="_blank">MarvioRocha.Com</a> powered by <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'stationproradio' ),
          'http://wpod.in/', 'http://wordpress.org/' ); ?> | Website created with
           <a rel="no-follow" href="http://www.mashup-template.com/" class="link-like-text"
            >Mashup Template</a> </small></p>    
			
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
