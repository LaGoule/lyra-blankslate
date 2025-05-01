<?php 
/* 
* Block: Logo Cloud
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_home_layout' );
    $headline = $args['logo_headline'] ?? '';
    $logo_cards = $args['logo_items'] ?? ''; /* Repeatable field */
?>

<section id="logo-cloud" class="ls-section section-logo-cloud">
    <div class="container column align-center">
        <div class="section-header container">
            <h2 class="section-header-headline alt">
                <?php echo esc_html($headline); ?>
            </h2>
        </div>
        <div class="section-content stretch-width">
            <div class="logo-cloud-logos">
                <?php if (!empty($logo_cards)) : ?>
                    <?php foreach ($logo_cards as $card) : ?>
                        <?php 
                            $image = $card['image'] ?? '';
                            $link = $card['link'] ?? '#';
                        ?>

                        <?php
                            $image_id = $image['id'] ?? '';
                            $metadata = wp_get_attachment_metadata($image_id);

                            if (!$metadata) {
                                continue; // Skip if metadata is not available
                            }
                            $width = $metadata['width'];
                            $height = $metadata['height'];
                        ?>

                        <div class="logo-item">
                            <div class="logo-image" style="--width: <?php echo $width; ?>; --height: <?php echo $height; ?>;">
                                <a href="<?php echo esc_url($link); ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="Logo" />
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>