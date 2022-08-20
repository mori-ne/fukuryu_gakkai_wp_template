<!-- /* テーマカスタマイザー用スタイル start*/ -->
<style>
    #header {
        <?php if (get_option('widHeader', 'fullwidth') == 'fullwidth') : ?>width: 100% !important;
        <?php else : ?>width: <?php echo get_option('widthHeader'); ?>px !important;
        margin: 0 auto;
        <?php endif; ?><?php if (get_header_img()) ?>background: url(<?php echo get_header_img(); ?> ) no-repeat;
        background-size: cover;
        position: <?php echo get_option('fixHeader'); ?> !important;
        inset: 0;
        margin: 0 auto;

        height: <?php echo get_option('headerHeight'); ?>px !important;
        background-color: <?php echo get_theme_mod('controlID5'); ?>;
    }

    .logo {
        background-image: url('<?php echo get_image_url4(); ?>');
        background-size: cover;
    }

    #main {
        <?php if (get_option('fixHeader', 'fixed') == 'fixed') : ?>margin-top: <?php echo get_option('headerHeight'); ?>px !important;
        <?php else : ?>margin-top: 0px !important;
        <?php endif; ?>
    }

    <?php if (get_image_url()) : ?>body {
        background: url(<?php echo get_image_url(); ?>) fixed no-repeat center;
    }

    <?php else : ?>body {
        background: <?php echo get_theme_mod('gemstone_bg_color'); ?>;
    }

    <?php endif; ?><?php if (get_image_url2()) : ?>.mv {
        display: block;
        background-color: transparent;
        background: url(<?php echo get_image_url2(); ?>) no-repeat;
        background-size: contain;
    }

    <?php else : ?>.mv {
        display: none;
    }

    <?php endif; ?><?php if (get_image_url3()) : ?>li.page_item {
        background-color: transparent !important;
        background: url(<?php echo get_image_url3(); ?>) no-repeat !important;
        background-size: cover !important;
    }

    li.page_item a {
        background-color: transparent !important;
    }

    <?php else : ?>li.page_item {
        background-image: none !important;
    }

    li.page_item a {
        background: <?php echo get_theme_mod('gemstone_navbg_color'); ?> !important;
    }

    <?php endif; ?>a {
        color: <?php echo get_theme_mod('gemstone_link_color'); ?>;
    }



    a:hover {
        color: <?php echo get_theme_mod('gemstone_hover_color'); ?>;
    }

    li.page_item a {
        color: <?php echo get_theme_mod('gemstone_navlink_color');  ?> !important;
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

    .global-nav ul li a {
        border-bottom: <?php echo get_option('navBorder'); ?> !important;
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

    .mv {
        height: <?php echo get_option('mainimageHeight'); ?>px !important;
    }
</style>
<!-- /* テーマカスタマイザー用スタイル end */ -->