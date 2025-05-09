<?php
/*
Template: Page
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block-hero-section' ); ?>

<?php
    // ACF - Flexible Content fields.
    $sections = get_field( 'lyra_page_layout' );

    if ( $sections ) :
        foreach ( $sections as $section ) :
            $template = str_replace( '_', '-', $section['acf_fc_layout'] );
            get_template_part( 'parts/' . $template, '', $section );
        endforeach;
    else :
        // Fallback content if no sections are defined.
        get_template_part( 'parts/block-spacer' );
    endif;
?>

<?php get_footer(); ?>