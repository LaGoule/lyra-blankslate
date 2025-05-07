<?php 
/* 
* Block: Team Section
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_page_layout' );
    $headline = $args['team_headline'] ?? '';
    $description = $args['team_description'] ?? '';
    $team_members = $args['team_team_members'] ?? [];
?>

<section id="team-section" class="ls-section section-team ">
    <div class="container column no-padding no-margin full-width gap-30">
        <div class="section-mono padding-left padding-right normal-width stretch-width gap-20">
            <h2 class="section-header-headline flex-basis-50"><?php echo $headline ?></h2>
            <div class="section-dual">
                <p class="section-header-description running-text-low"><?php echo esc_html($description) ?></p>
                <!-- Here goes the swiper navigation -->
                <div class="swiper-button-container">
                    <button class="swiper-button-prev swiper-button-prev-team" aria-label="Previous"></button>
                    <button class="swiper-button-next swiper-button-next-team" aria-label="Next"></button>
                </div>
            </div>
        </div>

        <div class="team-container">
            <div class="team-container swiper-container">
                <div class="swiper-wrapper">
                    <?php if (!empty($team_members)) : ?>
                        <?php foreach ($team_members as $member) : 
                            $picture = $member['picture'] ?? '';
                            $name = $member['name'] ?? '';
                            $role = $member['role'] ?? '';
                            $bio = $member['bio'] ?? '';
                            $linkedin_url = $member['linkedin_url'] ?? '#';
                        ?>
                            <article class="team-member-card swiper-slide">
                                    <div class="team-member-card-image">
                                        <img src="<?php echo esc_url($picture['url']); ?>" alt="<?php echo esc_attr($name); ?>" lazyload="loaded">
                                    </div>
                                    <div class="team-member-card-info">
                                        <h3 class="team-member-card-info-name"><?php echo $name; ?></h3>
                                        <p class="team-member-card-info-role"><?php echo $role; ?></p>
                                        <div class="team-member-card-info-bio">
                                            <?php echo $bio; ?>
                                        </div>
                                    </div>
                                    <?php if ($linkedin_url) : ?>
                                        <a class="linkedin-link" href="<?php echo $linkedin_url ?>" title="LinkedIn Profile">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo_linkedin.svg" alt="LinkedIn" class="linkedin-icon">
                                        </a>
                                    <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No team members found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>