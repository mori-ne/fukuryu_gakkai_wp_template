<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php bloginfo('name'); ?></title>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <!-- /* テーマカスタマイザー用スタイル */ -->
    <style>
        body {
            background: <?php echo get_theme_mod('gemstone_bg_color'); ?>;
        }

        a {
            color: <?php echo get_theme_mod('gemstone_link_color'); ?>;
        }

        a:hover {
            color: <?php echo get_theme_mod('gemstone_hover_color'); ?>;
        }

        li.page_item a {
            color: <?php echo get_theme_mod('gemstone_navlink_color');  ?> !important;
            background: <?php echo get_theme_mod('gemstone_navbg_color'); ?> !important;
            height: <?php echo get_option('navHeight') ?>px !important;
            width: <?php echo get_option('navWidth') ?>px !important;
        }

        li.page_item a:hover {
            color: <?php echo get_theme_mod('gemstone_navhover_color'); ?> !important;
            background: <?php echo get_theme_mod('gemstone_navbghover_color'); ?> !important;
        }

        .global-nav ul li {
            margin-bottom: <?php echo get_option('navMarginBottom'); ?>px !important;
        }

        #main {
            width: <?php echo get_option('pageWidth'); ?> !important;
            padding-left: <?php echo get_option('LRSpace'); ?>px !important;
            padding-right: <?php echo get_option('LRSpace'); ?>px !important;
            padding-top: <?php echo get_option('TBSpace'); ?>px !important;
            padding-bottom: <?php echo get_option('TBSpace'); ?>px !important;
        }

        .copyright {
            width: <?php echo get_option('pageWidth'); ?> !important;
        }

        #sidebar {
            margin-right: <?php echo get_option('LRSpace'); ?>px !important;
        }

        #contents {
            padding: <?php echo get_option('ContentsSpace'); ?>px !important;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <header id="header">
            <div class="logo">
                <img src="#" alt="#">
            </div>
            <div class="title">
                <div class="title-en">
                    <?php bloginfo('description'); ?>
                </div>
                <h1><a class="title-ja" href="/"><?php bloginfo('name'); ?></a></h1>
            </div>
        </header>
        <div id="main">
            <aside id="sidebar">
                <nav class="global-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu'
                    ));
                    ?>
                </nav>

                <?php if (is_active_sidebar('sidebar')) : ?>
                    <ul class="menu">
                        <?php dynamic_sidebar('sidebar'); ?>
                    </ul>
                <?php endif; ?>

            </aside>


            <main id="contents">

                <!-- <div class="mv">
                    <dl>
                        <dt>会期</dt>
                        <dd>2022年6月11日(土)・12日(日)</dd>
                    </dl>
                    <dl>
                        <dt>会期</dt>
                        <dd>2022年6月11日(土)・12日(日)</dd>
                    </dl>
                </div> -->

                <article>
                    <div class="info">
                        <p>
                            第87回日本温泉気候物理医学会総会・学術集会は、盛会のうちに終了いたしました。<br>
                            ご参加いただきました皆様、ご支援・ご協力を賜りました関係各所の皆様に心より御礼申し上げます。
                        </p>
                    </div>
                </article>

                <article>
                    <h2>
                        新着情報
                        <span class="reload">
                            <a href="javascript:refresh();"> ページを更新する</a>
                        </span>
                    </h2>
                    <div class="news">
                        <dl>
                            <dt>
                                <span>></span>2022.07.06
                            </dt>
                            <dd>
                                <a href="#">オンデマンド配信</a>の期間を7月18日(月)まで延長します。<br>
                                [ 期間 ] 2022年7月1日(金)～7月18日(月)
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <span>></span>2022.07.06
                            </dt>
                            <dd>
                                オンデマンド配信の期間を7月18日(月)まで延長します。<br>
                                [ 期間 ] 2022年7月1日(金)～7月18日(月)
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <span>></span>2022.07.06
                            </dt>
                            <dd>
                                オンデマンド配信の期間を7月18日(月)まで延長します。<br>
                                [ 期間 ] 2022年7月1日(金)～7月18日(月)
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <span>></span>2022.07.06
                            </dt>
                            <dd>
                                オンデマンド配信の期間を7月18日(月)まで延長します。<br>
                                [ 期間 ] 2022年7月1日(金)～7月18日(月)
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <span>></span>2022.07.06
                            </dt>
                            <dd>
                                オンデマンド配信の期間を7月18日(月)まで延長します。<br>
                                [ 期間 ] 2022年7月1日(金)～7月18日(月)
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <span>></span>2022.07.06
                            </dt>
                            <dd>
                                オンデマンド配信の期間を7月18日(月)まで延長します。<br>
                                [ 期間 ] 2022年7月1日(金)～7月18日(月)
                            </dd>
                        </dl>
                    </div>
                </article>

            </main>
        </div>

        <footer id="footer">
            <?php if (is_active_sidebar('footer')) : ?>
                <ul class="menu">
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
            pagetop.hide();
            $(window).scroll(function() {
                if ($(this).scrollTop() > 500) {
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