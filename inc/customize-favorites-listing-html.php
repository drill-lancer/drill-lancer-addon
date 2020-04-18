<?php
/**
 * Customize the Favorites Listing HTML
 *
 * @package DRILL LANCER ADDON
 */

/**
 * Customize the Favorites Listing HTML
 *
 * @param string $html output HTML.
 * @param string $markup_template markup_template.
 * @param int    $post_id Post ID.
 * @param array  $list_options List options.
 */
function drill_custom_favorites_listing_html( $html, $markup_template, $post_id, $list_options ) {
	$html = '<li class="favorites-item">';
	if ( has_post_thumbnail( $post_id ) ) {
		$html .= '<div class ="favorites-image"><a href="' . get_permalink( $post_id ) . '">' . get_the_post_thumbnail( $post_id, 'thumbnail' ) . '</a></div>';
	} else {
		$html .= '<div class ="favorites-image"><a href="' . get_permalink( $post_id ) . '"><img src="' . plugin_dir_url( __DIR__ ) . 'assets/img/no_thumb.jpg"></a></div>';
	}
	$html .= '<div class="favorites-title"><a href="' . get_permalink( $post_id ) . '">' . get_the_title( $post_id ) . '</a></div>';
	$html .= '</li>';

	return $html;
}
add_filter( 'favorites/list/listing/html', 'drill_custom_favorites_listing_html', 10, 4 );
