<?php 
/* 
* Testimonials
*/
?>

<?php
// ACF - Flexible Content fields
// $args = get_field( 'lyra_home_layout' );
    $quote = $args['testi_quote'] ?? '';
    $name = $args['testi_name'] ?? '';
    $avatar = $args['testi_avatar'] ?? '';
    $role = $args['testi_role'] ?? '';
    $organisation = $args['testi_organisation'] ?? '';
?>

<section id="testimonials" class="ls-section section-testimonial">
    <div class="container column-reverse align-center">
        <div class="section-header container column">
            <div class="testimonial-avatar">
                <?php if (!empty($avatar) && is_array($avatar) && !empty($avatar['url'])): ?>
                    <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $name; ?>" class="avatar-image" style="max-width: 5rem; height: auto;" />
                <?php endif; ?>
            </div>
            <h4 class="testimonial-name">
                <?php echo $name; ?>
            </h4>
            <h5 class="testimonial-role running-text-low">
                <?php echo $role; ?><br>
                <?php echo $organisation; ?>
            </h5>
        </div>
        <div class="section-content max-width-600px">
            <div class="testimonial-quote">
                <p class="quote-text">
                    <?php echo $quote; ?>
                </p>
            </div>
        </div>
    </div>
</section>