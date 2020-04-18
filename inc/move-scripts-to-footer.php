<?php
/**
 * Move Scripts to Footer.
 *
 * @package DRILL LANCER ADDON
 */

/**
 * レンダリングブロックしているJavascriptの読み込みを遅らせる by 寝ログ
 * https://nelog.jp/header-js-to-footer
 */
function drill_move_scripts_to_footer() {
	// ヘッダーのスクリプトを取り除く.
	remove_action( 'wp_head', 'wp_print_scripts' );
	remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
	remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );

	// フッターにスクリプトを移動する.
	add_action( 'wp_footer', 'wp_print_scripts', 5 );
	add_action( 'wp_footer', 'wp_print_head_scripts', 5 );
	add_action( 'wp_footer', 'wp_enqueue_scripts', 5 );
}
add_action( 'wp_enqueue_scripts', 'drill_move_scripts_to_footer' );
