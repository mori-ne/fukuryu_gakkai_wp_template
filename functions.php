<?php

////////////////////////////////////////////////////// メニュー追加

use function PHPSTORM_META\map;

function register_my_menus()
{
	register_nav_menus(array(
		'navigation-menu' => 'Navigation Menu',
	));
}
add_action('after_setup_theme', 'register_my_menus');


////////////////////////////////////////////////////// ウィジェット追加
function register_my_widgets()
{
	register_sidebar(array(
		'name' => 'サイドバー',
		'id' => 'sidebar'
	));
}
add_action('widgets_init', 'register_my_widgets');


////////////////////////////////////////////////////// テーマカスタマイザーに項目を追加

//管理画面のカスタマイズにテーマカラーの設定セクションを追加
function gemstone_customize_register($wp_customize)
{
	$wp_customize->add_setting(
		'gemstone_link_color',
		array(
			'default' => '#f00',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gemstone_link_color',
			array(
				'label' => __('リンクカラー:static', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_link_color',
			)
		)
	);
	$wp_customize->add_setting(
		'gemstone_hover_color',
		array(
			'default' => '#000',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gemstone_hover_color',
			array(
				'label' => __('リンクカラー:hover', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_hover_color',
			)
		)
	);
	$wp_customize->add_setting(
		'gemstone_navlink_color',
		array(
			'default' => '#000',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gemstone_navlink_color',
			array(
				'label' => __('ナビゲーションカラー:static', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_navlink_color',
			)
		)
	);
	$wp_customize->add_setting(
		'gemstone_navhover_color',
		array(
			'default' => '#444',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gemstone_navhover_color',
			array(
				'label' => __('ナビゲーションカラー:hover', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_navhover_color',
			)
		)
	);
	$wp_customize->add_setting(
		'gemstone_navbg_color',
		array(
			'default' => '#fff',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gemstone_navbg_color',
			array(
				'label' => __('ナビゲーション背景カラー:static', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_navbg_color',
			)
		)
	);
	$wp_customize->add_setting(
		'gemstone_navbghover_color',
		array(
			'default' => '#eee',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gemstone_navbghover_color',
			array(
				'label' => __('ナビゲーション背景カラー:hover', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_navbghover_color',
			)
		)
	);
}
add_action('customize_register', 'gemstone_customize_register');





function mytheme_customizer($wp_customize)
{
	$wp_customize->add_section(
		'navControl',
		array(
			'title' => '学会テーマカスタマイズ',
			'description' => '項目全体の注意書き、不要ならこの行ごと削除',
			'priority' => 30,
		)
	);

	// ナビゲーションバーの高さ
	$wp_customize->add_setting(
		'navHeight',
		array(
			'default' => '40',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'controlID',
		array(
			'settings' => 'navHeight',
			'label' => 'ナビゲーションバーの高さ',
			'description' => 'default:40px',
			'section' => 'navControl',
			'type' => 'text',
		)
	);

	// ナビゲーションバーの隙間
	$wp_customize->add_setting(
		'navMarginBottom',
		array(
			'default' => '5',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'controlID2',
		array(
			'settings' => 'navMarginBottom',
			'label' => 'ナビゲーションバーの隙間',
			'description' => 'default:5px',
			'section' => 'navControl',
			'type' => 'text',
		)
	);

	// 左右の余白
	$wp_customize->add_setting(
		'LRSpace',
		array(
			'default' => '25',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'controlID3',
		array(
			'settings' => 'LRSpace',
			'label' => 'ページ内左右の余白',
			'description' => 'default:25px',
			'section' => 'navControl',
			'type' => 'text',
		)
	);
}
add_action('customize_register', 'mytheme_customizer');


/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
// define('WP_SCSS_ALWAYS_RECOMPILE', true);
