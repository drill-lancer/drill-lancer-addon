<?php
/**
 * Insert Video Shortcode
 *
 * @package DRILL LANCER ADDON
 */

/**
 * Insert Video Shortcode by DRILL LANCER
 *
 * @param array $atts Shortcode Paramater.
 */
function drill_insert_video_shortcode( $atts ) {
	$video_html = '';
	$atts       = shortcode_atts(
		array(
			'iframe' => '',
		),
		$atts
	);

	if ( isset( $atts['iframe'] ) ) {
		$video_html .= '<div class="movie-wrap">';
		$video_html .= $atts['iframe'];
		$video_html .= '</div>';
	}
	return $video_html;

}
add_shortcode( 'video', 'drill_insert_video_shortcode' );
