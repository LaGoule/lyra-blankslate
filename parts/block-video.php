<?php 
/* 
* Block: Video
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_page_layout' );
    $video = $args['bv_video'] ?? '';
?>

<?php if ($video) : ?>

    <section class="ls-section section-video">
        <div class="container column">
            <div class="section-mono no-padding no-margin align-start gap-30">
                <div class="video-container section-image-image image-container flex-basis-100">
                    <video class="video-media" preload="auto" controls 
                        style="width: 100%; height: 100%;">
                        <source src="<?php echo $video['url']; ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
