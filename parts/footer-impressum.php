<?php
    // Get page url with slug terms-and-conditions
    $terms_and_conditions_url = get_permalink(get_page_by_path('terms-and-conditions'));
?>

<div class="container column">
    <section class="footer-impressum">
        <p class="impressum">
            Copyright © <?php echo date('Y'); ?> Lyra Sports<span class="separator-desktop"> | </span><br class="separator-mobile">All Rights Reserved | 
            <a href="<?php echo $terms_and_conditions_url; ?>">Terms and conditions</a>
        </p>
    </section>
</div>