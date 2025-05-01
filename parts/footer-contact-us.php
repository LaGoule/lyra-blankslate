<?php 
/* 
* Footer: Contact Us Section
*/
?>

<section class="footer-contact-us padding">
    <div class="contact-info flex-basis-50">
        <h4>Contact Us</h4>
        <h3>Let’s take flight</h3>
        <p>Ready to reach out for the stars and unlock the secrets of the sports universe with Lyra Sports? Let's talk strategy and teamwork!</p>
        <ul class="contact-details">
            <li><ion-icon name="mail-outline"></ion-icon><a href="mailto:info@lyrasports.com">info@lyrasports.com</a></li>
            <li><ion-icon name="call-outline"></ion-icon>(123) 456 - 789</li>
            <li><ion-icon name="location-outline"></ion-icon>Madrid<br>Mexico City<br>London<br>Dubai</li>
        </ul>
    </div>
    <div class="contact-form flex-basis-50">
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
    </div>
</section>