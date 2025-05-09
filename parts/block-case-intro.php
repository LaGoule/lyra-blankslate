<?php 
/* 
* Block: Case intro
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_page_layout' );
    $headline = $args['ci_headline'] ?? '';
    $client = $args['ci_client'] ?? '';
    $services = $args['ci_services'] ?? '';
?>

<section class="ls-section section-case-intro">
    <div class="container column">
        <div class="section-dual no-padding no-margin align-start gap-30">
            <h2 class="section-header-headline flex-basis-50">
                <?php echo $headline; ?>
            </h2>
            <div class="section-dual section-header-case-intro flex-basis-50">
                <div class="case-intro-column">
                    <h3 class="case-intro-title">Client</h3>
                    <p class="case-intro-body-text"><?php echo $client; ?></p>
                </div>
                <div class="case-intro-column">
                    <h3 class="case-intro-title">Services</h3>
                    <p class="case-intro-body-text"><?php echo $services; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>