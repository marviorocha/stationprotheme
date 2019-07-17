<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	

 
<?php if (has_post_thumbnail( $post->ID ) ): ?>
 
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
 

 <div class="white-text-container background-image-container" 
	style="background-image: url('<?php echo $image[0]; ?>')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1><?php the_title() ?></h1>
				 <span style="color=#FFF">
				 <span class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> 
				 <?php echo get_the_author_meta(get_the_author_meta( 'ID' )) ?></span>
				 <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
				<span class="comments-link">  <i class='fa fa-comment'></i> 
				<?php comments_popup_link( __( 'Leave a comment', 'station-pro-radio' ), __( '1 Comment', 'station-pro-radio' ), __( '% Comments', 'station-pro-radio' ) ); ?></span>
				<?php endif; ?>
				 </span>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>
<p></p>
<!-- Add your site or app content here -->
<div class="container">
    <div class="row">
  
 
       
      	<main id="content" class="<?php echo odin_classes_page_sidebar(); ?>" tabindex="-1" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>
		</main><!-- #main -->
 







<?php
get_sidebar();



get_footer();
