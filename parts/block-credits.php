<?php 
/* 
* Block: Credits
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_page_layout' );

// bc_credits is a group field that contains a repeater field "categories"
$credits = $args['bc_credits'] ?? ''; 
$categories = $args['bc_credits']['categories'] ?? '';
?>

<section class="ls-section section-credits">
    <div class="container column">
        <div class="section-credits-list stretch-width grid-4 <?php echo 'items-' . count($categories); ?>">
            <?php foreach ($categories as $category) : ?>
                <div class="section-credits-category grid-item">
                    <h2 class="section-credits-category-title"><?php echo esc_html($category['category_title']); ?></h2>
                    <div class="section-credits-category-content running-text">
                        <?php echo nl2br(esc_html($category['category_body'])); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>