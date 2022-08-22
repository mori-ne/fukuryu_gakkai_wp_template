<?php

//////////////////////////////////////////////////////
// メニュー追加
//////////////////////////////////////////////////////

use function PHPSTORM_META\map;

function register_menuber()
{
	register_nav_menus(array(
		'navigation-menu' => 'Navigation Menu',
	));
}
add_action('after_setup_theme', 'register_menuber');



//////////////////////////////////////////////////////
// ウィジェット追加
//////////////////////////////////////////////////////

function register_widgets()
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
add_action('widgets_init', 'register_widgets');



//////////////////////////////////////////////////////
// 学会テーマカスタマイザー：レイアウト
//////////////////////////////////////////////////////

function set_layout_customizer($wp_customize)
{
	// 学会テーマカスタマイズパネル（セクション）
	$wp_customize->add_section(
		'gakkaiControl',
		array(
			'title' => '学会テーマカスタマイズ：レイアウト',
			'description' => '項目全体の注意書き、不要ならこの行ごと削除',
			'priority' => 21,
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
		'controlID2',
		array(
			'settings' => 'pageWidth',
			'label' => 'ページ幅（単位も記述px,%等）',
			'description' => 'デフォルト値:1000px',
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
		'controlID4',
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
		'controlID5',
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
		'controlID6',
		array(
			'settings' => 'navMarginBottom',
			'label' => 'ナビゲーションバーの隙間',
			'description' => 'デフォルト値:5px',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);


	// ナビゲーションバーの下線
	$wp_customize->add_setting(
		'navBorder',
		array(
			'default' => '1px solid #aaa',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);
	$wp_customize->add_control(
		'controlID7',
		array(
			'settings' => 'navBorder',
			'label' => 'ナビゲーションバーの隙間（noneで無し）',
			'description' => 'デフォルト値:1px solid #aaa',
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
		'controlID8',
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
		'controlID9',
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
		'controlID10',
		array(
			'settings' => 'ContentsSpace',
			'label' => 'コンテンツ内上下左右の余白（padding）',
			'description' => 'デフォルト値:0px',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);


	// コンテンツ内上下左右の余白（padding）
	$wp_customize->add_setting(
		'mainimageHeight',
		array(
			'default' => '600',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'controlID11',
		array(
			'settings' => 'mainimageHeight',
			'label' => 'メインイメージの高さ',
			'description' => 'デフォルト値:600px',
			'section' => 'gakkaiControl',
			'type' => 'text',
		)
	);
}

add_action('customize_register', 'set_layout_customizer');

//////////////////////////////////////////////////////
// 学会テーマカスタマイザー：ヘッダー
//////////////////////////////////////////////////////

function set_header_customizer($wp_customize)
{
	// 学会テーマカスタマイズパネル（セクション）
	$wp_customize->add_section(
		'gakkaiControl2',
		array(
			'title' => '学会テーマカスタマイズ：ヘッダー',
			'description' => '項目全体の注意書き、不要ならこの行ごと削除',
			'priority' => 22,
		)
	);


	//ヘッダー画像
	$wp_customize->add_setting('set_header_img');
	//テーマカスタマイザー画面に表示されるフォームの入力要素
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'set_header_img',
			array(
				'label' => 'ヘッダー画像',
				'section' => 'gakkaiControl2',
				'settings' => 'set_header_img',
				'description' => 'ヘッダー画像',
			)
		)
	);


	// ヘッダー全幅・固定幅
	$wp_customize->add_setting(
		'widHeader',
		array(
			'type' => 'option'
		)
	);
	$wp_customize->add_control(
		'controlID',
		array(
			'settings' => 'widHeader',
			'label' => 'ヘッダー全幅か固定幅',
			'description' => 'デフォルト値：全幅',
			'section' => 'gakkaiControl2',
			'type' => 'radio',
			'choices' => array(
				'fullwidth' => '全幅',
				'fixwidth' => '固定幅'
			),
		)
	);

	// ヘッダーの幅
	$wp_customize->add_setting(
		'widthHeader',
		array(
			'default' => '1000',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'controlID1',
		array(
			'settings' => 'widthHeader',
			'label' => 'ヘッダーの幅',
			'description' => 'デフォルト値:1000px',
			'section' => 'gakkaiControl2',
			'type' => 'text',
		)
	);


	// ヘッダーの固定・追従
	$wp_customize->add_setting(
		'fixHeader',
		array(
			'type' => 'option'
		)
	);
	$wp_customize->add_control(
		'controlID3',
		array(
			'settings' => 'fixHeader',
			'label' => 'ヘッダー固定か追従',
			'description' => 'デフォルト値：fixed',
			'section' => 'gakkaiControl2',
			'type' => 'radio',
			'choices' => array(
				'fixed' => '固定（fixed）',
				'relative' => '追従（relative）'
			),
		)
	);

	// ヘッダーの高さ
	$wp_customize->add_setting(
		'headerHeight',
		array(
			'default' => '100',
			'transport' => 'refresh',
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'controlID4',
		array(
			'settings' => 'headerHeight',
			'label' => 'ヘッダーの高さ',
			'description' => 'デフォルト値:100px',
			'section' => 'gakkaiControl2',
			'type' => 'text',
		)
	);


	// 背景色
	$wp_customize->add_setting(
		'controlID5',
		array(
			'default' => '#e6e6e6',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'controlID5',
			array(
				'label' => __('ヘッダーカラー', 'hedcolor'),
				'section' => 'gakkaiControl2',
				'settings' => 'controlID5',
			)
		)
	);
}

add_action('customize_register', 'set_header_customizer');

//セットした画像のURLを取得
function get_header_img()
{
	return esc_url(get_theme_mod('set_header_img'));
}



//////////////////////////////////////////////////////
// 学会テーマカスタマイザー：画像
//////////////////////////////////////////////////////

function set_image_cutomizer($wp_customize)
{

	//セクション
	$wp_customize->add_section(
		'set_img_section',
		array(
			'title' => '学会テーマカスタイマイズ：画像',
			'priority' => 22,
			'discription' => 'アップロードした画像をセットします。'
		)
	);


	//テーマ設定のグループ
	$wp_customize->add_setting('set_img_url');
	//テーマカスタマイザー画面に表示されるフォームの入力要素
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_img_url', array(
		'label' => '背景画像',
		'section' => 'set_img_section',
		'settings' => 'set_img_url',
		'description' => '背景画像（1920px以上が望ましい）',
	)));

	//テーマ設定のグループ
	$wp_customize->add_setting('set_img_url2');
	//テーマカスタマイザー画面に表示されるフォームの入力要素
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'set_img_url2',
			array(
				'label' => 'メイン画像',
				'section' => 'set_img_section',
				'settings' => 'set_img_url2',
				'description' => 'コンテンツ内メイン画像（横幅可変）',
			)
		)
	);

	//テーマ設定のグループ
	$wp_customize->add_setting('set_img_url3');
	//テーマカスタマイザー画面に表示されるフォームの入力要素
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'set_img_url3',
			array(
				'label' => 'メニュー画像',
				'section' => 'set_img_section',
				'settings' => 'set_img_url3',
				'description' => 'ナビゲーションメニュー内画像（レイアウトで設定した値）',
			)
		)
	);

	//テーマ設定のグループ
	$wp_customize->add_setting('set_img_url4');
	//テーマカスタマイザー画面に表示されるフォームの入力要素
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'set_img_url4',
			array(
				'label' => 'ロゴ画像',
				'section' => 'set_img_section',
				'settings' => 'set_img_url4',
				'description' => '100px以内',
			)
		)
	);
}

add_action('customize_register', 'set_image_cutomizer');


//セットした画像のURLを取得
function get_image_url()
{
	return esc_url(get_theme_mod('set_img_url'));
}
//セットした画像のURLを取得
function get_image_url2()
{
	return esc_url(get_theme_mod('set_img_url2'));
}
//セットした画像のURLを取得
function get_image_url3()
{
	return esc_url(get_theme_mod('set_img_url3'));
}
//セットした画像のURLを取得
function get_image_url4()
{
	return esc_url(get_theme_mod('set_img_url4'));
}



//////////////////////////////////////////////////////
// 色
//////////////////////////////////////////////////////

function set_color_customizer($wp_customize)
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

add_action('customize_register', 'set_color_customizer');








/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
// define('WP_SCSS_ALWAYS_RECOMPILE', true);