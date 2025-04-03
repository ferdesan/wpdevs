<?php
/**
 * Template for displaying search forms in WP Devs
 *
 * @package WordPress
 * @subpackage WP Devs
 * @since WP Devs 1.0
 */
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s">Pesquisar por:</label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
		<input type="submit" id="searchsubmit" value="Pesquisar">
		<input type="hidden" name="post_type" value="post" id="post_type" />
	</div>
</form>