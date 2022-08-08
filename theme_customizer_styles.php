<!-- /* テーマカスタマイザー用スタイル start*/ -->
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
</style>
<!-- /* テーマカスタマイザー用スタイル end */ -->