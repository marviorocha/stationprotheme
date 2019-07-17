<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<input type="search" class="form-control" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search', 'stationproradio' ); ?>" />
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary btn-newsletter" value="<?php esc_attr_e( 'Search', 'stationproradio' ); ?>">
				<i class="fa fa-search"></i>
			</button>
		</span><!-- /input-group-btn -->
    </div><!-- /input-group -->
</form><!-- /searchform -->
