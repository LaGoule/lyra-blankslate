<?php 
/* 
* Footer: Contact Us Section
*/
?>
<?php
    // Récupérer les données ACF depuis les options
    $footer_navigation = get_field('footer_navigation', 'option');
    $cities = $footer_navigation['footer_cities'] ?? [];

    $footer_contact = get_field('footer_contact', 'option');
    $contact_headline = $footer_contact['contact_headline'] ?? 'Let’s take flight';
    $contact_intro = $footer_contact['contact_intro'] ?? 'Ready to reach out for the stars and unlock the secrets of the sports universe with Lyra Sports? Let\'s talk strategy and teamwork!';
    $email = $footer_contact['contact_email'] ?? 'info@lyrasports.com';
?>

<div class="container column align-stretch">
    <section id="contact-us" class="footer-contact-us section-dual padding gap-30">
        <div class="contact-info flex-basis-50">
            <!-- <h5 class="contact-subtitle">Contact Us</h4> -->
            <h3 class="contact-title alt"><?php echo esc_html($contact_headline); ?></h3>
            <p class="contact-description running-text"><?php echo ($contact_intro); ?></p>
            <ul class="contact-details">
                <li><ion-icon name="mail-outline"></ion-icon><a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></li>
                <!-- <li><ion-icon name="call-outline"></ion-icon>(123) 456 - 789</li> -->
                <li><ion-icon name="location-outline"></ion-icon>
                    <?php if ($cities && is_array($cities)) : ?>
                        <span>
                        <?php foreach ($cities as $city_item) : ?>
                            <?php if (!empty($city_item['city'])) : ?>
                                <?php echo esc_html($city_item['city']); ?><br>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </span>
                    <?php else : // Fall back to default cities ?>
                        <span>Madrid<br>Mexico City<br>London<br>Dubai<br>Medellín</span>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <div class="contact-form flex-basis-50">
            <?php echo do_shortcode('[contact-form-7 id="039420b" title="Footer contact form"]'); ?>
        </div>
    </section>
</div>