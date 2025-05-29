<?php 
/* 
* Footer: Case Studies Section
*/
?>

<div class="container column no-padding no-margin full-width">
    <section class="footer-case-studies">
        <div class="footer-case-studies-header padding-left padding-right normal-width">
            <h2 class="footer-section-title">Case Studies</h2>
            <?php 
                // get category url for case studies
                $category = get_category_by_slug('case-studies');
                $category_link = get_category_link($category->term_id);
            ?>
            <a href="<?php echo $category_link; ?>" class="see-all">See&nbsp;all <ion-icon name="arrow-forward-outline"></ion-icon></a>
        </div>
        <?php 
            // Get the description for the case studies category if it exists
            $category_description = category_description($category->term_id);
            if ($category_description) {
                echo '<div class="footer-case-studies-description padding-left padding-right normal-width">';
                echo $category_description;
                echo '</div>';
            }
        ?>

        <div class="case-studies-container swiper-container">
            <div class="swiper-wrapper">
                <?php
                $case_studies = new WP_Query(array(
                    'post_type' => 'post',
                    'category_name' => 'case-studies',
                    'posts_per_page' => 4,
                ));

                if ($case_studies->have_posts()) :
                    while ($case_studies->have_posts()) : $case_studies->the_post();
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        ?>
                        <article class="case-study-card swiper-slide">
                            <div class="card-image">
                                <?php if ($thumbnail): ?>
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php else: ?>
                                    <div style="width:100%; height:100%; background: #e0e0e0; display: flex; align-items: center; justify-content: center;">
                                        <span style="color: #aaa; font-size: 1.2rem;">No image</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="case-study-link">
                                <div class="case-study-overlay">
                                    <h3 class="case-study-title alt"><?php the_title(); ?></h3>
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>
</div>