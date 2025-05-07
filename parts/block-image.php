<?php 
/* 
* Block: Image
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_page_layout' );
    $block_type = $args['bi_type'] ?? 'bi_image_text';
 
    // $block_type can be one of the following:
    /*
    * bi_image_text
    * bi_text_image
    * bi_image_1
    * bi_image_2
    */

    $headline = $args['bi_headline'] ?? '';
    $body_text = $args['bi_body_text'] ?? '';
    $image_1 = $args['bi_image_1'] ?? '';
    $image_2 = $args['bi_image_2'] ?? '';
?>

<?php if ($block_type == 'bi_image_text') : ?>

    <section class="ls-section section-image">
        <div class="container column">
            <div class="section-dual no-padding no-margin align-start gap-30">
                <!-- Bloc pour l'image -->
                <div class="section-image-image image-container flex-basis-50">
                    <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>">
                </div>

                <!-- Bloc pour le texte -->
                <div class="section-image-text flex-basis-50">
                    <h2 class="section-image-text-headline">
                        <?php echo $headline; ?>
                    </h2>
                    <div class="section-image-text-body running-text-low">
                        <?php echo $body_text; ?>
                    </div>
                </div>
            </div>
        </div>
    </section> 

<?php elseif ($block_type == 'bi_text_image') : ?>

<section class="ls-section section-image">
    <div class="container column">
        <div class="section-dual no-padding no-margin align-start gap-30">
            <!-- Bloc pour le texte -->
            <div class="section-image-text flex-basis-50">
                <h2 class="section-image-text-headline">
                    <?php echo $headline; ?>
                </h2>
                <div class="section-image-text-body running-text-low">
                    <?php echo $body_text; ?>
                </div>
            </div>

            <!-- Bloc pour l'image -->
            <div class="section-image-image image-container flex-basis-50">
                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>">
            </div>
        </div>
    </div>
</section> 

<?php elseif ($block_type == 'bi_image_1') : ?>

<section class="ls-section section-image">
    <div class="container column">
        <div class="section-mono no-padding no-margin align-start gap-30">
            <!-- Bloc pour l'image -->
            <div class="section-image-image image-container flex-basis-100">
                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<?php elseif ($block_type == 'bi_image_2') : ?>

<section class="ls-section section-image">
    <div class="container column">
        <div class="section-dual no-padding no-margin align-start gap-30">
            <!-- Bloc pour l'image 1 -->
            <div class="section-image-image image-container flex-basis-50">
                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>">
            </div>

            <!-- Bloc pour l'image 2 -->
            <div class="section-image-image image-container flex-basis-50">
                <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>">
            </div>
        </div>
    </div>
</section> 

<?php endif; ?>
