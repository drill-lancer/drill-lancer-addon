<?php
/**
 * DRILL Enqueue Scripts.
 *
 * @package DRILL LANCER ADDON
 */

/**
 * スタイルとスクリプトの追加.
 */
function drill_enqueue_scripts() {
	wp_enqueue_style( 'drill-lancer-addon', plugin_dir_url( __DIR__ ) . 'assets/css/style.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'drill_enqueue_scripts' );
