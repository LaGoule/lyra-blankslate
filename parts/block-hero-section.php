<?php 
/* 
* Block: Hero Section
*/
?>

<?php
// ACF - Flexible Content fields

// Dans un premier temps on récupère les champs ACF si on est pas dans un layout ACF
if (!$args) {
    // Check si c'est la page 404
    if (is_404()) {
        $args = [
            'hero_headline' => 'Sorry, the page you are looking for does not exist.',
            'hero_intro' => '404 - Page Not Found',
            'hero_background' => '',
            'hero_headline_size' => 'big',
        ];
    } else {
        // Sinon on récupère les champs ACF de la page
        $args = [
            'hero_headline' => get_field('hero_headline'),
            'hero_intro' => get_field('hero_intro'),
            'hero_button' => get_field('hero_button'),
            'hero_background' => get_field('hero_background'),
            'hero_headline_size' => get_field('hero_headline_size'),
        ];
    }
}

// Si on est sur une categorie, on récupère les champs ACF de la catégorie
if (is_category()) {
    $category = get_queried_object(); // Récupère l'objet de la catégorie actuelle
    $category_id = $category->term_id; // ID de la catégorie

    $args = [
        'hero_headline' => get_field('hero_headline', 'category_' . $category_id),
        'hero_intro' => get_field('hero_intro', 'category_' . $category_id),
        'hero_background' => get_field('hero_background', 'category_' . $category_id),
        'hero_headline_size' => get_field('hero_headline_size', 'category_' . $category_id),
    ];

    $headline = get_field('hero_headline', 'category_' . $category_id);
    $intro = get_field('hero_intro', 'category_' . $category_id);
    $background_image = get_field('hero_background_image', 'category_' . $category_id);
    $background_video = get_field('hero_background_video', 'category_' . $category_id);
}

// Pour toutes les autres pages, on utilise les champs ACF de la page
    // Variables communes
    $headline = $args['hero_headline'] ?? get_the_title(); 
    $intro = $args['hero_intro'] ?? '';
    $button = $args['hero_button'] ?? [];
    $button_text = $button['button_text'] ?? '';
    $button_link = $button['button_link'] ?? '#';

    $background = $args['hero_background'] ?? [];
    $background_type = $background['hero_background_type'] ?? 'image'; // default to image
    $background_image = $background['hero_background_image'] ?? '';
    $background_video = $background['hero_background_video'] ?? '';
    $headline_size = $args['hero_headline_size'] ?? 'big';

    // Déterminer si c'est la page d'accueil
    $is_homepage = is_front_page();
?>

<section id="hero" class="ls-section section-hero" style="<?php if ($background_type === 'image') : ?>background-image: url('<?php echo esc_url($background_image); ?>');<?php endif; ?>">
    <?php if ($background_type === 'video') : ?>
        <video class="background-video" autoplay loop muted preload="auto" playsinline
            style="object-fit: cover; width: 100%; height: 100%; z-index: -1; position: absolute; top: 0; left: 0; opacity: 1;">
            <source src="<?php echo esc_url($background_video); ?>" type="video/mp4">
        </video>
    <?php endif; ?>

    <div class="container column">
        <div class="hero-content <?php echo $is_homepage ? 'gap-20' : 'gap-5'; ?>">
            <?php if ($is_homepage) : ?>
                <h1 class="hero-headline"><?php echo $headline; ?></h1>
                <h2 class="hero-intro"><?php echo esc_html($intro); ?></h2>
                <?php if ($button_text) : ?>
                    <div class="hero-cta">
                        <a href="<?php echo esc_url($button_link); ?>" class="btn btn-primary">
                            <?php echo esc_html($button_text); ?>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <h3 class="hero-surtitle">
                    <?php if (is_category()) : ?>
                        <?php echo single_cat_title('', true); ?>
                    <?php elseif (is_tag()) : ?>
                        <?php echo single_tag_title('', true); ?>
                    <?php elseif (is_post_type_archive()) : ?>
                        <?php echo post_type_archive_title('', false); ?>
                    <?php elseif (is_404()) : ?>
                        <?php echo '404 - Page Not Found'; ?>
                    <?php else : ?>
                        <?php echo get_the_title(); ?>
                    <?php endif; ?>
                </h3>
                <h1 class="hero-headline alt <?php echo esc_attr($headline_size); ?>"><?php echo $headline ? esc_html($headline) : get_the_title(); ?></h1>
            <?php endif; ?>
            <div class="hero-arrow">
                <a href="#the-content" class="scroll-down">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/hero_arrow.svg" alt="Scroll down" class="arrow-down">
                </a>
            </div>
        </div>
    </div>
</section>
<div id="the-content" style="width:0;height:0;text-indent:-999rem;padding:0;margin:0;"></div>