<?php

//テーマstyle.cssの読み込み
function twpp_enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

// titleタグ出力
add_theme_support('title-tag');

/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );
