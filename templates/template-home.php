<?php
/*
Template Name: Page d'Accueil
*/
?>

<?php get_header(); ?>

<?php //get_template_part('parts/projects-cards'); ?>

<?php //get_template_part('parts/contact-section'); ?>

<?php
    // ACF - Flexible Content fields.
    $sections = get_field( 'lyra_home_layout' );

    if ( $sections ) :
        foreach ( $sections as $section ) :
            $template = str_replace( '_', '-', $section['acf_fc_layout'] );
            get_template_part( 'parts/' . $template, '', $section );
        endforeach;
    endif;
?>

<?php get_footer(); ?>