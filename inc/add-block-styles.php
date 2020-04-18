<?php
/**
 * DRILL BLOCK STYLES.
 *
 * @package DRILL LANCER ADDON
 */

/**
 * ブロックの追加.
 */
function drill_add_block_styles() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}
	$options   = get_option( 'color_options' );
	$color_key = isset( $options['color-key'] ) ? $options['color-key'] : '#337ab7';
	register_block_style(
		'core/heading',
		array(
			'name'         => 'drill-heading-01',
			'label'        => '囲み01',
			'inline_style' => '.is-style-drill-heading-01,.entry-body .is-style-drill-heading-01{padding:10px 15px;border-style:solid;box-shadow: 0 1px 2px rgba(0,0,0,.15) inset, -1px -1px 2px rgba(0,0,0,.15) inset;border-width:2px 15px;border-radius:10px; border-color:' . $color_key . ';}',
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'         => 'drill-heading-02',
			'label'        => '囲み02',
			'inline_style' => '.is-style-drill-heading-02,.entry-body .is-style-drill-heading-02{padding:10px 15px;border:solid 2px ' . $color_key . ';}',
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'         => 'drill-heading-03',
			'label'        => '囲み03',
			'inline_style' => '.is-style-drill-heading-03,.entry-body .is-style-drill-heading-03{padding:10px 15px;border-radius:10px;border:solid 2px ' . $color_key . ';}',
		)
	);
}
add_action( 'init', 'drill_add_block_styles' );
