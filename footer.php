<?php
/* 
* Footer Template
*/
?>

</main>
</div>

<?php
    // ACF - Flexible Content fields
    
    if (is_category()) {
        $category_id = get_queried_object_id(); // Récupère l'ID de la catégorie actuelle
        $args = get_field('footer_sections', 'category_' . $category_id); // Récupère les champs ACF pour la catégorie
    } else {
        $args = get_field('footer_sections'); // Récupère les champs ACF pour les autres types de contenu
    }

    $case_studies = $args['show_case_studies'] ?? '';
    $contact_us = $args['show_contact_us'] ?? '';
?>

<footer id="footer" class="ls-section section-footer">

    <?php 
        if ( $args && in_array('show_case_studies', $args) ) :
            get_template_part('parts/footer-case-studies'); 
        endif; 

        if ( $args && in_array('show_contact_us', $args) ) : 
            get_template_part('parts/footer-contact-us');
        endif;

        get_template_part('parts/footer-nav');

        get_template_part('parts/footer-impressum');
    ?>

</footer>

<!-- Design: Lafko Heuffeman -->
<!-- Development: Damien Beuchat -->
<!-- Client: Lyra Sports -->
<!-- Created: 2025-05-01 -->

</div>
<?php wp_footer(); ?>
</body>
</html>