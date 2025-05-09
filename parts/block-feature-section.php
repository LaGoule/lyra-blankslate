<?php 
/* 
* Block: Feature Section
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_home_layout' );
    $headline = $args['feat_headline'] ?? '';
    $description = $args['feat_description'] ?? '';
    $feat_cards = $args['feat_cards'] ?? ''; /* Repeatable field */
?>

<section id="feature-section" class="ls-section section-feature">
    <div class="container column">
        <div class="section-dual no-padding no-margin align-start gap-30">
            <h2 class="section-header-headline flex-basis-50">
                <?php echo esc_html($headline); ?>
            </h2>
            <p class="section-header-description running-text flex-basis-50">
                <?php echo esc_html($description); ?>
            </p>
        </div>
        <div class="section-content stretch-width">
            <div class="feature-cards-container container row no-padding no-margin gap-30">
                <?php if (!empty($feat_cards)) : ?>
                    <?php foreach ($feat_cards as $card) : ?>
                        <?php 
                            $title = $card['title'] ?? '';
                            $subtitle = $card['subtitle'] ?? '';
                            $link = $card['link'] ?? '#';
                            $background_image = $card['background_image'] ?? '';
                        ?>

                        <div class="feature-card gap-20">
                            <a href="<?php echo esc_url($link); ?>" class="feature-card-link">
                                <div class="feature-card-block">
                                    <h3 class="feature-card-title alt">
                                        <?php echo esc_html($title); ?>
                                    </h3>
                                    <div class="card-image">
                                        <?php if (!empty($background_image)) : ?>
                                            <img src="<?php echo esc_url($background_image); ?>" alt="<?php echo esc_attr($title); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-hint">
                                        <p>Discover</p>
                                    </div>
                                </div>
                            </a>
                            <p class="feature-card-subtitle running-text">
                                <?php echo esc_html($subtitle); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>