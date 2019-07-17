<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<div class="container">
    <div class="row">
	<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'station-pro-radio' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'station-pro-radio' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

	</main><!-- #main -->

<?php
get_footer();
