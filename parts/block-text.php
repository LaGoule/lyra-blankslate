<?php 
/* 
* Block: Text
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_page_layout' );
    $block_type = $args['bt_type'] ?? 'bt_title_text';
 
    // $block_type can be one of the following:
    /*
    * bt_title_text
    * bt_text_only
    * bt_tags
    */

    $headline_size = $args['bt_headline_size'] ?? 'big';
    $headline = $args['bt_headline'] ?? '';
    $body_text = $args['bt_body_text'] ?? '';
    $tags = $args['bt_tags'] ?? '';
    $credits = $args['bt_credits'] ?? '';
?>

<?php if ($block_type == 'bt_title_text') : ?>

    <section class="ls-section section-text">
        <div class="container column">
            <div class="section-dual no-padding no-margin align-start gap-30">
                <h2 class="section-header-headline flex-basis-50 <?php echo $headline_size; ?>">
                    <?php echo $headline; ?>
                </h2>
                <div class="section-header-body-text running-text flex-basis-50">
                    <?php echo $body_text; ?>
                </div>
            </div>
        </div>
    </section>
    
<?php elseif ($block_type == 'bt_text_only') : ?>

    <section class="ls-section section-text">
        <div class="container column">
            <div class="section-dual no-padding no-margin align-start gap-30">
                <div class="section-header-body-text running-text flex-basis-50">
                    <?php echo $body_text; ?>
                </div>
                <div class="flex-basis-50">
                </div>
            </div>
        </div>
    </section>

<?php elseif ($block_type == 'bt_tags') : ?>

<section class="ls-section section-text">
    <div class="container column">
        <div class="section-dual no-padding no-margin align-start gap-30">
            <h2 class="section-header-headline flex-basis-50 <?php echo $headline_size; ?>">
                <?php echo $headline; ?>
            </h2>
            <div class="section-header-tags flex-basis-50">
                <div class="tags-container running-text">
                    <?php if ( $tags ) : ?>
                        <ul class="tags-list">
                            <?php foreach ( $tags as $tag ) : ?>
                                <?php $title = $tag['tag'] ?? ''; ?>
                                <li class="tag-item"><?php echo $title; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>No tags available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>