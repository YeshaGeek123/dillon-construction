<!-- Start of Inner Banner -->
<section class="inner-banner contact-banner bg-img sec-1920" style="background-image: url('<?php the_field('career_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center white-text">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Career -->
<section class="career-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="career-content text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('career_details_title'); ?></h2>
                    <p class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <?php the_field('career_details_sub_title'); ?>
                    </p>
                </div>
                <div class="career-form wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <?php
                    echo do_shortcode('[contact-form-7 id="145" title="Career Form"]'); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Career -->