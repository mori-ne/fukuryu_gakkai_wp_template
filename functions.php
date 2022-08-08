<?php

//////////////////////////////////////////////////////
// メニュー追加
//////////////////////////////////////////////////////

use function PHPSTORM_META\map;

function register_my_menus()
{
	register_nav_menus(array(
		'navigation-menu' => 'Navigation Menu',
	));
}
add_action('after_setup_theme', 'register_my_menus');


//////////////////////////////////////////////////////
// ウィジェット追加
//////////////////////////////////////////////////////

function register_my_widgets()
{
	register_sidebar(array(
		'name' => 'サイドバー',
		'description'   => 'ウィジェットをドラッグして編集してください。',
		'id' => 'sidebar'
	));
	register_sidebar(array(
		'name' => 'フッター',
		'description'   => 'ウィジェットをドラッグして編集してください。',
		'before_widget' => '<div class="footer_widget_area">', //ウィジェットを囲う開始タグ
		'after_widget'  => '</div>', //ウィジェットを囲う終了タグ
		'id' => 'footer'
	));
}
add_action('widgets_init', 'register_my_widgets');


////////////////////////////////////////////////////// 
// テーマカスタマイザーに項目を追加
////////////////////////////////////////////////////// 

function gemstone_customize_register($wp_customize)
{

	// 背景色
	$wp_customize->add_setting(
		'gemstone_bg_color',
		array(
			'default' => '#e6e6e6',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gemstone_bg_color',
			array(
				'label' => __('背景色', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_bg_color',
			)
		)
	);

	// リンク文字カラー:static
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
				'label' => __('リンク文字カラー:static', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_link_color',
			)
		)
	);

	// リンク文字カラー:hover
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
				'label' => __('リンク文字カラー:hover', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_hover_color',
			)
		)
	);

	// ナビゲーション文字カラー:static
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
				'label' => __('ナビゲーション文字カラー:static', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_navlink_color',
			)
		)
	);

	// ナビゲーション文字カラー:hover
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
				'label' => __('ナビゲーション文字カラー:hover', 'gemstone'),
				'section' => 'colors',
				'settings' => 'gemstone_navhover_color',
			)
		)
	);

	// ナビゲーション背景カラー:static
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

	// ナビゲーション背景カラー:hover
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
	// 学会テーマカスタマイズパネル
	$wp_customize->add_section(
		'gakkaiControl',
		array(
			'title' => '学会テーマカスタマイズ',
			'description' => '項目全体の注意書き、不要ならこの行ごと削除',
			'priority' => 30,
		)
	);

	// ページ幅
	$wp_customize->add_setting(
		'pageWidth',
		array(
			'default' => '1000px',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);
	$wp_customize->add_control(
		'controlID',
		array(
			'settings' => 'pageWidth',
			'label' => 'ページ幅（px、%も記入）',
			'description' => 'デフォルト値:1000',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);

	// ナビゲーションバーの幅
	$wp_customize->add_setting(
		'navWidth',
		array(
			'default' => '200',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);
	$wp_customize->add_control(
		'controlID2',
		array(
			'settings' => 'navWidth',
			'label' => 'ナビゲーションバーの幅',
			'description' => 'デフォルト値:200px',
			'section' => 'gakkaiControl',
			'type' => 'text',
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
		'controlID3',
		array(
			'settings' => 'navHeight',
			'label' => 'ナビゲーションバーの高さ',
			'description' => 'デフォルト値:40px',
			'section' => 'gakkaiControl',
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
		'controlID4',
		array(
			'settings' => 'navMarginBottom',
			'label' => 'ナビゲーションバーの隙間',
			'description' => 'デフォルト値:5px',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);


	// ページ内左右の余白（padding）
	$wp_customize->add_setting(
		'LRSpace',
		array(
			'default' => '25',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);
	$wp_customize->add_control(
		'controlID5',
		array(
			'settings' => 'LRSpace',
			'label' => 'ページ内左右の余白（padding）',
			'description' => 'デフォルト値:25px',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);

	// ページ内左右の余白（padding）
	$wp_customize->add_setting(
		'TBSpace',
		array(
			'default' => '25',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);
	$wp_customize->add_control(
		'controlID6',
		array(
			'settings' => 'TBSpace',
			'label' => 'ページ内上下の余白（padding）',
			'description' => 'デフォルト値:25px',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);


	// コンテンツ内上下左右の余白（padding）
	$wp_customize->add_setting(
		'ContentsSpace',
		array(
			'default' => '0',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'controlID7',
		array(
			'settings' => 'ContentsSpace',
			'label' => 'コンテンツ内上下左右の余白（padding）',
			'description' => 'デフォルト値:0px',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);
}
add_action('customize_register', 'mytheme_customizer');


/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
// define('WP_SCSS_ALWAYS_RECOMPILE', true);
