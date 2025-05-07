<?php
/*
Template: Page
*/
?>

<?php get_header(); ?>

<?php
    // ACF - Flexible Content fields.
    $sections = get_field( 'lyra_page_layout' );

    if ( $sections ) :
        foreach ( $sections as $section ) :
            $template = str_replace( '_', '-', $section['acf_fc_layout'] );
            get_template_part( 'parts/' . $template, '', $section );
        endforeach;
    endif;
?>

<?php get_footer(); ?>