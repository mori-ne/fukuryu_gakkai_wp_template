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

                <div class="mv">
                    <!-- <dl>
                        <dt>会期</dt>
                        <dd>2022年6月11日(土)・12日(日)</dd>
                    </dl>
                    <dl>
                        <dt>会期</dt>
                        <dd>2022年6月11日(土)・12日(日)</dd>
                    </dl> -->
                </div>


                <!-- お知らせ -->
                <!-- <article>
                    <div class="info">
                        <p>
                            第87回日本温泉気候物理医学会総会・学術集会は、盛会のうちに終了いたしました。<br>
                            ご参加いただきました皆様、ご支援・ご協力を賜りました関係各所の皆様に心より御礼申し上げます。
                        </p>
                    </div>
                </article> -->


                <!-- 記事一覧 -->
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