<?php

// メニュー追加
function register_my_menus()
{
    register_nav_menus(array(
        'navigation-menu' => 'Navigation Menu',
    ));
}
add_action('after_setup_theme', 'register_my_menus');


// ウィジェット追加
function register_my_widgets()
{
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'sidebar'
    ));
}
add_action('widgets_init', 'register_my_widgets');


/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
// define('WP_SCSS_ALWAYS_RECOMPILE', true);
