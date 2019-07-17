<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>




<div class="">
    <div class="container">
        <div class="row">
	        <div class="col-xs-12">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<img class="img-responsive" src="<?php echo $image[0]; ?>">
			<?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
				
			   

 <main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
?>

</main><!-- #main -->

               </div>
               
           
            </div>




        </div>

    </div>



</div>





<?php
get_footer();
