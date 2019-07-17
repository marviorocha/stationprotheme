<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
 




 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php odin_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
		<div class="entry-summary">
		
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php else : ?>

 


		<div class="entry-content">

		

			<?php
				the_content( __( 'Continue reading <span class="btn btn-primary meta-nav">&rarr;</span>', 'stationprotheme' ) );
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'stationprotheme' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
			<span class="cat-links"><?php echo __( 'Posted in:', 'stationprotheme' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'stationprotheme' ) ); ?></span>
		<?php endif; ?>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged as:', 'stationprotheme' ) . ' ', ', ', '</span>' ); ?>
		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"> | <i class='fa fa-comment'></i> <?php comments_popup_link( __( 'Leave a comment', 'stationprotheme' ), __( '1 Comment', 'stationprotheme' ), __( '% Comments', 'stationprotheme' ) ); ?></span>
		<?php endif; ?>
	</footer>
</article><!-- #post-## -->
