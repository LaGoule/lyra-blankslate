<?php 
/* 
* Block: Hero Section
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_home_layout' );
    $headline = $args['hero_headline'] ?? '';
    $intro = $args['hero_intro'] ?? '';
    $button = $args['hero_button'] ?? '';
    $button_text = $button['button_text'] ?? '';
    $button_link = $button['button_link'] ?? '#';
    $background_image = $args['hero_background_image'] ?? '';
?>

<section id="hero" class="ls-section section-hero" style="background-image: url('<?php echo esc_url($background_image); ?>');">
    <div class="container column">
        <div class="hero-content">
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
    <!-- Decoration text, outside container, full page width -->
    <!--
        <div class="container column no-padding full-width">
            <div class="hero-decoration full-width-text">
                <p class="hook">
                    <?php echo $hook; ?>
                </p>
            </div>
        </div>
    -->
</section>