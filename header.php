<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <script>
            window.themeUrl = "<?php echo get_template_directory_uri(); ?>";
        </script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner" class="ls-section section-header">
                <div class="container row">
                    <div id="branding" class="section-dual nowarp align-center">
                        <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                            <div class="site-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
                                    <img class="main-logo" width="15.72px" height="31.06px" src="<?php echo get_template_directory_uri(); ?>/assets/svg/lyra_02_symbol_white_rgb.svg" alt="Symbol" style="margin-right: 16px;">
                                    <img class="main-logo" width="103px" height="31.06px" src="<?php echo get_template_directory_uri(); ?>/assets/svg/lyra_01_logotype_white_rgb.svg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" itemprop="logo">
                                </a>
                            </div>
                        </div>
                        <div id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <!-- <ion-icon class="icon" name="menu-outline" style="font-size: 24px;"></ion-icon> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/burger_menu.svg" alt="Toggle menu">
                        </div>
                    </div>
                    <nav id="menu" class="container row no-padding no-margin" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-main-menu',
                            'container' => false,
                            'menu_class' => 'main-menu-items',
                            'link_before' => '',
                            'link_after' => '',
                        ));
                        ?>
                        <!-- Place language switcher here -->
                        <div class="language-switcher" style="display: none;">
                            <?php
                            if (function_exists('pll_the_languages')) {
                                pll_the_languages(array('dropdown' => 0));
                            }
                            ?>
                        </div>
                        <!-- End language switcher -->
                    </nav>
                </div>
            </header>
            <div class="header-placeholder"></div>
            <div id="container column">
                <main id="content" role="main">