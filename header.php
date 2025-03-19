<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner" class="ls-section section-header">
                <div class="container row">
                    <div id="branding">
                        <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                            <div class="site-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
                                    <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/lyra_sports_logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" itemprop="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <nav id="menu" class="container row no-padding no-margin" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <!--<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>-->
                        <a>Contact us</a>

                        <div id="menu-social" class="menu-social">
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a href="#" class="social-link">
                                <ion-icon style="font-size: 14px;" src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo_x.svg"></ion-icon>
                            </a>
                        </div>

                        <div id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <ion-icon name="menu-outline" style="font-size: 24px;"></ion-icon>
                        </div>
                    </nav>
                </div>
            </header>
            <div id="container column">
                <main id="content" role="main">