<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
    <!-- テーマカスタマイザー用スタイル記述 -->
    <?php include("theme_customizer_styles.php"); ?>
</head>

<body>



    <div id="wrapper">
        <!-- ヘッダー -->
        <header id="header">
            <?php if (get_image_url4()) : ?>
                <div class="logo">
                </div>
            <?php else : ?>
            <?php endif; ?>


            <!-- タイトル -->
            <div class="title" style="<?php if (get_header_img()) : ?> display:none; <?php else : ?> display:block;<?php endif; ?>">
                <div class="title-en">
                    <?php bloginfo('description'); ?>
                </div>
                <h1><a class="title-ja" href="/"><?php bloginfo('name'); ?></a></h1>
            </div>
        </header>


        <!-- メイン -->
        <div id="main">


            <!-- サイドバー -->
            <aside id="sidebar">


                <!-- グローバルナビゲーション -->
                <nav class="global-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'navigation-menu'
                    ));
                    ?>
                </nav>

                <?php if (is_active_sidebar('sidebar')) : ?>
                    <ul class="menu">
                        <?php dynamic_sidebar('sidebar'); ?>
                    </ul>
                <?php endif; ?>

            </aside>

            <!-- コンテンツ -->
            <main id="contents">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                <?php endwhile;
                endif; ?>

            </main>
        </div>


        <!-- フッター -->
        <footer id="footer">
            <?php if (is_active_sidebar('footer')) : ?>
                <ul class="footer_menu">
                    <?php dynamic_sidebar('footer'); ?>
                </ul>
            <?php endif; ?>



            <p class="copyright">© <?php bloginfo('name'); ?></p>
        </footer>

        <div id="pagetop">
            <span>TOP</span>
        </div>

    </div>

    <script>
        $(function() {
            var pagetop = $('#pagetop');
            // ボタン非表示
            pagetop.hide();
            // 100px スクロールしたらボタン表示
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    pagetop.fadeIn();
                } else {
                    pagetop.fadeOut();
                }
            });
            pagetop.click(function() {
                $('body, html').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
    </script>
</body>

</html>