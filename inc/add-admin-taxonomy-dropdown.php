<?php
/**
 * Add Admin Taxonomy DropDown.
 *
 * @package DRILL LANCER ADDON
 */

/**
 * Add Admin Taxonomy DropDown.
 *
 * @param string $post_type Post Type.
 */
function drill_add_admin_taxonomy_dropdown( $post_type ) {
	$admin_post_types = get_post_types();
	foreach ( $admin_post_types as $admin_post_type ) {
		if ( $admin_post_type === $post_type ) {
			$taxonomies = get_object_taxonomies( $admin_post_type, 'object' );
			foreach ( $taxonomies as $taxonomy ) {
				if ( 'post_format' !== $taxonomy->name && 'category' !== $taxonomy->name ) {
					if ( 'post_tag' === $taxonomy->name ) {
						wp_dropdown_categories(
							array(
								'show_option_all' => 'タグ一覧',
								'orderby'         => 'name',
								'hide_if_empty'   => true,
								'selected'        => get_query_var( 'tag' ),
								'name'            => 'tag',
								'taxonomy'        => 'post_tag',
								'value_field'     => 'slug',
							)
						);
					} else {
						wp_dropdown_categories(
							array(
								'show_option_all' => $taxonomy->label . '一覧',
								'orderby'         => 'name',
								'selected'        => get_query_var( $taxonomy->name ),
								'hide_if_empty'   => true,
								'name'            => $taxonomy->name,
								'taxonomy'        => $taxonomy->name,
								'value_field'     => 'slug',
							)
						);
					}
				}
			}
		}
	}
}
add_action( 'restrict_manage_posts', 'drill_add_admin_taxonomy_dropdown', 10, 2 );

