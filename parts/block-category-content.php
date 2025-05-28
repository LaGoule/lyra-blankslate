<?php 
/* 
* Block: Category Content
*/
?>

<?php
// ACF - Flexible Content fields
    // $args = get_field( 'lyra_page_layout' );
    $category_id = $args['hero_headline'] ?? '';
?>

<section class="category-posts ls-section">
    <div class="container column">
        <!-- <div class="filter-container">
            <ul class="filter-list">
                <li class="filter-item">
                    <a href="#" class="filter-link active">All</a>
                </li>
                <li class="filter-item">
                    <a href="#" class="filter-link">Clubs</a>
                </li>
                <li class="filter-item">
                    <a href="#" class="filter-link">Agents</a>
                </li>
                <li class="filter-item">
                    <a href="#" class="filter-link">Players</a>
                </li>
            </ul>
        </div> -->

        <div class="posts-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-card-thumbnail" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                                </div>
                            <?php else : ?>
                                <div class="post-card-thumbnail" style="background: #e0e0e0; display: flex; align-items: center; justify-content: center;">
                                    <span style="color: #aaa; font-size: 1.2rem;">No image</span>
                                </div>
                            <?php endif; ?>
                            <h2 class="post-card-title"><?php the_title(); ?></h2>
                        </a>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found in this category.</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
        </div>
    </div>
</section>