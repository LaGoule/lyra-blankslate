<?php 
/* 
* Footer: Discover More Section
*/
?>

<div class="container column align-stretch">
    <section class="footer-discover-more section-mono padding gap-40">
        <h4 class="discover-more-title">Discover more</h4>
        <div class="section-dual no-padding no-margin align-start gap-30 nowrap">
            <?php 
                /*
                */
                $previous_article = get_next_post();
                $next_article = get_previous_post(); 
                $previous_article_url = get_permalink($previous_article);
                $next_article_url = get_permalink($next_article);
                $previous_article_image = get_the_post_thumbnail_url($previous_article, 'large');
                $next_article_image = get_the_post_thumbnail_url($next_article, 'large');
                $previous_article_title = get_the_title($previous_article);
                $next_article_title = get_the_title($next_article);
            ?>
            <!-- Previous and Next Article Cards -->
            <div class="card-discover-more previous flex-basis-50">
                <?php if ($previous_article) : ?>
                    <a href="<?php echo $previous_article_url; ?>" class="card-link">
                        <?php if ($previous_article_image): ?>
                            <img src="<?php echo $previous_article_image; ?>" alt="<?php echo $previous_article_title; ?>" class="card-discover-more-image">
                        <?php else: ?>
                            <div class="card-discover-more-image" style="background:#e0e0e0; display:flex; align-items:center; justify-content:center;">
                                <span style="color:#aaa; font-size:1.2rem;">No image</span>
                            </div>
                        <?php endif; ?>
                        <div class="card-discover-more-content">
                            <h5 class="card-discover-more-title"><?php echo $previous_article_title; ?></h5>
                            <p class="card-discover-more-keyword">Previous</p>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
            <div class="card-discover-more next flex-basis-50">
                <?php if ($next_article) : ?>
                    <a href="<?php echo $next_article_url; ?>" class="card-discover-more-link">
                        <?php if ($next_article_image): ?>
                            <img src="<?php echo $next_article_image; ?>" alt="<?php echo $next_article_title; ?>" class="card-discover-more-image">
                        <?php else: ?>
                            <div class="card-discover-more-image" style="background:#e0e0e0; display:flex; align-items:center; justify-content:center;">
                                <span style="color:#aaa; font-size:1.2rem;">No image</span>
                            </div>
                        <?php endif; ?>
                        <div class="card-discover-more-content">
                            <h5 class="card-discover-more-title"><?php echo $next_article_title; ?></h5>
                            <p class="card-discover-more-keyword">Next</p>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>