<?php
/**
 * DNS Prefeych
 *
 * @package DRILL LANCER ADDON
 */

/**
 * DNS Prefetch をヘッダーに書き出す関数.
 */
function drill_dns_prefetch() {
	// DNS prefetch を on にするタグを出力用変数に入れる.
	$output       = '<meta http-equiv="x-dns-prefetch-control" content="on">' . "\n";
	$allowed_html = array(
		'meta' => array(
			'http-equiv' => array(),
			'content'    => array(),
		),
	);
	echo wp_kses( $output, $allowed_html );
}
add_action( 'wp_head', 'drill_dns_prefetch', 1 );
