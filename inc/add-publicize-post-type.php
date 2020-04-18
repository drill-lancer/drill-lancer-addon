<?php
/**
 * Add Publicize Post Type
 *
 * @package DRILL LANCER ADDON
 */

/**
 * Add Publicize Post Type
 */
function drill_add_publicize_post_type() {
	$admin_post_types = get_post_types();
	foreach ( $admin_post_types as $admin_post_type ) {
		if ( 'post' !== $admin_post_type && 'page' !== $admin_post_type ) {
			add_post_type_support( $admin_post_type, array( 'publicize', 'shortlinks' ) );
		}
	}
}
add_action( 'init', 'drill_add_publicize_post_type' );
