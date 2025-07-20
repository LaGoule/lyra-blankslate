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
        <div class="section-mono padding-left padding-right normal-width gap-20">
            <h2 class="section-header-headline flex-basis-50"><?php echo $headline ?></h2>
            <div class="section-dual">
                <p class="section-header-description running-text flex-basis-50"><?php echo esc_html($description) ?></p>
                <!-- Here goes the swiper navigation -->
                <div class="swiper-button-container flex-basis-50">
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
                                        <?php if ($picture) : ?>
                                            <img src="<?php echo esc_url($picture['url']); ?>" alt="<?php echo esc_attr($name); ?>" lazyload="loaded">
                                        <?php else : ?>
                                            <div class="team-no-image" style="width: 100%; height: 100%; background: #e0e0e0; display: flex; align-items: center; justify-content: center;">
                                                <span style="color: #aaa; font-size: 1.2rem;">No image</span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="team-member-card-info">
                                        <h3 class="team-member-card-info-name"><?php echo $name; ?></h3>
                                        <p class="team-member-card-info-role"><?php echo $role; ?></p>
                                        <div class="team-member-card-info-bio">
                                            <?php echo $bio; ?>
                                        </div>
                                    </div>
                                    <?php if ($linkedin_url) : ?>
                                        <a class="linkedin-link" target="_blank" href="<?php echo $linkedin_url ?>" title="LinkedIn Profile">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo_linkedin.svg" alt="LinkedIn" class="linkedin-icon">
                                        </a>
                                    <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No team members found.</p>
                    <?php endif; ?>
                </div>
                <!-- Popup on mobile -->
                <div id="team-popup" class="team-popup" style="display:none;">
                    <div class="team-popup-content">
                        <button class="team-popup-close" aria-label="Fermer"></button>
                        <img class="team-popup-image" src="" alt="">
                        <div class="team-popup-info">
                            <div class="team-popup-header">
                                <div class="team-popup-name-role">
                                    <h3 class="team-popup-name"></h3>
                                    <p class="team-popup-role"></p>
                                </div>
                                <a class="team-popup-linkedin" target="_blank" href="#" target="_blank" rel="noopener">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo_linkedin.svg" alt="LinkedIn">
                                </a>
                            </div>
                            <div class="team-popup-bio"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>