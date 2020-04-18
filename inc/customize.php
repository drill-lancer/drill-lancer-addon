<?php
/**
 * Customize Drill Lancer's Addon.
 *
 * @package DRILL LANCER ADDON
 */

/**
 * Customize.
 *
 * @param array $drill_customize Data of Customize.
 */
function drill_addon_customize( $drill_customize ) {
	$drill_customize->add_section(
		'drill-section',
		array(
			'title'    => 'Drill Lancer\'s Addon 設定',
			'priority' => 102,
		),
	);
	$drill_customize->add_setting(
		'color_options[color-key]',
		array(
			'default' => '#337ab7',
			'type'    => 'option',
		),
	);
	$drill_customize->add_control(
		new WP_Customize_Color_Control(
			$drill_customize,
			'color_options[color-key]',
			array(
				'label'    => 'キーカラー',
				'section'  => 'drill-section',
				'settings' => 'color_options[color-key]',
			),
		),
	);
}
add_action( 'customize_register', 'drill_addon_customize' );
