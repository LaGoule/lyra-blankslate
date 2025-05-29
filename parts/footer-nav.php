<?php
    // Récupérer les données ACF depuis les options
    $footer_navigation = get_field('footer_navigation', 'option');
    $cities = $footer_navigation['footer_cities'] ?? [];
?>

<!-- Footer Navigation Section -->
<div class="footer-nav-container container column full-width no-padding">
    <section class="footer-nav">
        <div class="container row">
            <div class="footer-logo flex-basis-10">
                <a href="<?php echo esc_url(home_url('/#')); ?>" class="footer-logo-link">
                    <img width="35.51" height="70.17" src="<?php echo get_template_directory_uri(); ?>/assets/svg/lyra_02_symbol_white_rgb.svg" alt="Company Logo">
                </a>
            </div>
            <ul class="footer-cities flex-basis-80">
                <?php if ($cities && is_array($cities)) : ?>
                    <?php foreach ($cities as $city_item) : ?>
                        <?php if (!empty($city_item['city'])) : ?>
                            <li><?php echo esc_html($city_item['city']); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else : // Fall back to default cities ?>
                    <li>Madrid</li>
                    <li>Mexico City</li>
                    <li>London</li>
                    <li>Dubai</li>
                    <li>Medellín</li>
                <?php endif; ?>
            </ul>
            <div class="footer-socials flex-basis-10">
                <a href="https://www.linkedin.com/company/lyrasports/"><ion-icon name="logo-linkedin"></ion-icon></a>
                <a href="https://www.instagram.com/lyrasports.agency/"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="https://x.com/lyra_sports"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo_x.svg"></a>
            </div>
        </div>
    </section>
</div>