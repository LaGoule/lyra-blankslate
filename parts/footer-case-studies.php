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

        <div class="case-studies-container swiper-container">
            <div class="swiper-wrapper">
                <?php
                $case_studies = new WP_Query(array(
                    'post_type' => 'post',
                    'category_name' => 'case-studies',
                    'posts_per_page' => 6,
                ));

                if ($case_studies->have_posts()) :
                    while ($case_studies->have_posts()) : $case_studies->the_post();
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        ?>
                        <article class="case-study-card swiper-slide">
                            <div class="card-image">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>">
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