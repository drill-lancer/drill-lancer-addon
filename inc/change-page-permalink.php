<?php
/**
 * Change Pubkicize Save Meta.
 *
 * @package DRILL LANCER ADDON
 */

/**
 * 固定ページにも".html"を追加
 */
function drill_change_page_permalink() {
	global $wp_rewrite;
	$wp_rewrite->use_trailing_slashes = false;
	$wp_rewrite->page_structure       = $wp_rewrite->root . '%pagename%.html';
}
add_action( 'init', 'drill_change_page_permalink' );
