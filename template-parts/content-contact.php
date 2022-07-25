<!-- Start of Inner Banner -->
<section class="inner-banner contact-banner bg-img" style="background-image: url('<?php the_field('contact_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center white-text">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Contac -->
<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-contet">
                    <h2 class="h2-title"><?php the_field('contact_details_title'); ?></h2>
                        <?php the_field('contact_details_content'); ?>
                    <div class="contact-link">
                        <ul>
                            <li>
                                <a href="mailto:<?php the_field('email', 'options'); ?>" title="<?php the_field('email', 'options'); ?>">
                                    <span class="icon"><img width="20" height="16" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/mail.svg" alt="Mail"></span>
                                    <span class="text"><?php the_field('email', 'options'); ?></span>
                                </a>
                            </li>
                            <?php global $phone, $phone_link; ?>
                            <li>
                                <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>">
                                    <span class="icon"><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/phone.svg" alt="Mail"></span>
                                    <span class="text callus"><?php echo $phone; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('address_link','options'); ?>" title="<?php the_field('address', 'options'); ?>" target="_blank">
                                    <span class="icon"><img width="18" height="22" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/map-pin.svg" alt="Mail"></span>
                                    <span class="text"><?php the_field('address', 'options'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('facebook_link', 'options'); ?>" title="Follow On Facebook" class="fb" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <?php
                    echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contac -->