<?php 
/* 
* Block: Hero Section
*/
?>

<?php
// ACF - Flexible Content fields
if (is_front_page()) {
    // if page is homepage, use home layout
    // $args = get_field( 'lyra_home_layout' );
    $headline = $args['hero_headline'] ?? '';
    $intro = $args['hero_intro'] ?? '';
    $button = $args['hero_button'] ?? '';
    $button_text = $button['button_text'] ?? '';
    $button_link = $button['button_link'] ?? '#';

    $background = $args['hero_background'] ?? '';
    $background_type = $background['hero_background_type'] ?? 'image'; // default to image
    $background_image = $background['hero_background_image'] ?? '';
    $background_video = $background['hero_background_video'] ?? '';
?>

<section id="hero" class="ls-section section-hero" style="padding-bottom:100px; <?php if ($background_type == 'image') : echo "background-image: url('" . esc_url($background_image) . "');\""; endif; ?>>
    <?php if ($background_type == 'video') : ?>
        <video class="background-video" autoplay loop muted preload="auto" playsinline
            style="object-fit: cover; width: 100%; height: 100%; z-index: -1; position: absolute; top: 0; left: 0; opacity: 1;">
            <source src="<?php echo $background_video; ?>" type="video/mp4">
        </video>
    <?php endif; ?>

    <div class="container column">
        <div class="hero-content gap-20">
            <h1 class="hero-headline"><?php echo $headline; ?></h1>
            <h2 class="hero-intro"><?php echo $intro; ?></h2>
            <div class="hero-cta">
                <a href="<?php echo ($button_link); ?>" class="btn btn-primary">
                    <?php echo ($button_text); ?>
                    <ion-icon name="arrow-forward-outline"></ion-icon></a>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
} else {
    // if not homepage, use page layout
    // $args = get_field( 'lyra_page_layout' );
    $headline = $args['hero_headline'] ?? '';
    $headline_size = $args['hero_headline_size'] ?? 'big';

    $background = $args['hero_background'] ?? '';
    $background_type = $background['hero_background_type'] ?? 'image'; // default to image
    $background_image = $background['hero_background_image'] ?? '';
    $background_video = $background['hero_background_video'] ?? '';
?>

<section id="hero" class="ls-section section-hero" <?php if ($background_type == 'image') : echo "style=\"background-image: url('" . esc_url($background_image) . "');\""; endif; ?>>
    <?php if ($background_type == 'video') : ?>
        <video class="background-video" autoplay loop muted preload="auto" playsinline
            style="object-fit: cover; width: 100%; height: 100%; z-index: -1; position: absolute; top: 0; left: 0; opacity: 1;">
            <source src="<?php echo $background_video; ?>" type="video/mp4">
        </video>
    <?php endif; ?>

    <div class="container column">
        <div class="hero-content  gap-5">
            <h3 class="hero-surtitle">
                <?php if (is_category()) : ?>
                    <?php echo single_cat_title('', true); ?>
                <?php elseif (is_tag()) : ?>
                    <?php echo single_tag_title('', true); ?>
                <?php elseif (is_post_type_archive()) : ?>
                    <?php echo post_type_archive_title('', false); ?>
                <?php else : ?>
                    <?php echo get_the_title(); ?>
                <?php endif; ?>
            </h3>
            <h1 class="hero-headline alt <?php echo $headline_size ?>"><?php echo $headline; ?></h1>
        </div>
    </div>
</section>

<?php } ?>


