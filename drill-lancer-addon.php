<?php
/**
 * Plugin Name: DRILL LANCER ADDON
 * Plugin URI: (プラグインの説明と更新を示すページの URI)
 * Description: 私専用のプラグイン
 * Version: 1.0.0
 * Author: DRILL LANCER
 * Author URI: (プラグイン作者の URI)
 * License: (ライセンス名の「スラッグ」 例: GPL2)
 *
 * @package DRILL LANCER ADDON
 */

// プラグインとテーマの自動更新.
add_filter( 'auto_update_core', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_translation', '__return_true' );

// Jetpack OGP 無効化.
add_filter( 'jetpack_enable_open_graph', '__return_false' );

// 外部ファイルの読み込み.
require_once 'inc/styles-and-scripts.php';
require_once 'inc/add-block-styles.php';
require_once 'inc/move-scripts-to-footer.php';
require_once 'inc/change-page-permalink.php';
require_once 'inc/customize.php';
require_once 'inc/add-admin-taxonomy-dropdown.php';
require_once 'inc/customize-favorites-listing-html.php';
require_once 'inc/dns-prefetch.php';
require_once 'inc/add-publicize-post-type.php';
