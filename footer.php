<?php
/* 
* Footer Template
*/
?>

</main>
</div>

<footer id="footer" class="ls-section section-footer">
    <?php //if (get_field('show_case_studies', 'option')) : ?>
        <div class="container column no-padding no-margin full-width">
            <?php get_template_part('parts/footer-case-studies'); ?>
        </div>
    <?php //endif; ?>
    <?php //if (get_field('show_contact_us', 'option')) : ?>
        <div class="container column align-stretch">
            <?php get_template_part('parts/footer-contact-us'); ?>
        </div>
    <?php //endif; ?>
    <?php //if (get_field('show_footer_nav', 'option')) : ?>
        <div class="footer-nav-container container column full-width no-padding">
            <?php get_template_part('parts/footer-nav'); ?>
        </div>
    <?php //endif; ?>
    <?php //if (get_field('show_impressum', 'option')) : ?>
        <div class="container column">
            <?php get_template_part('parts/footer-impressum'); ?>
        </div>
    <?php //endif; ?>
</footer>

<!-- Design: Lafko Heuffeman -->
<!-- Development: Damien Beuchat -->
<!-- Client: Lyra Sports -->
<!-- Created: 2025-05-01 -->

</div>
<?php wp_footer(); ?>
</body>
</html>