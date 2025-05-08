<?php
/*
Template: Category
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block-hero-section' ); ?>

<?php
    // ACF - Flexible Content fields pour la catégorie
    $category_id = get_queried_object_id(); // Récupère l'ID de la catégorie actuelle
    $sections = get_field('lyra_page_layout', 'category_' . $category_id); // Récupère le layout ACF pour cette catégorie

    if ($sections) :
        foreach ($sections as $section) :
            $template = str_replace('_', '-', $section['acf_fc_layout']);
            get_template_part('parts/' . $template, '', $section);
        endforeach;
    endif;
?>

<?php get_footer(); ?>