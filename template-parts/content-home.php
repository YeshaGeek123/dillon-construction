<!-- Start of Main Banner -->
<?php global $phone,$phone_link; ?>
<section class="main-banner sec-1920 bg-img" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('home_banner_title'); ?></h1>
                    <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#get_an_quote_modal" title="Request A Quote" class="sec-btn">Request A Quote</a>
                        <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="sec-btn">Call &nbsp;<span class="callus"> <?php echo $phone; ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Main Banner -->

<!-- Start of About Us -->
<section class="about-sec">
    <img width="668" height="792" src="<?php the_field('about_background_image'); ?>" alt="D Logo" class="d-img">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-content white-text">
                    <h2 class="h2-title"><?php the_field('about_title'); ?></h2>
                    <div class="about-text">
                        <?php the_field('about_content'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-img-wp">
                    <div class="about-img bg-img" style="background-image: url('<?php the_field('about_image'); ?>');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of Services -->
<section class="service-sec sec-1920" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('service_main_title'); ?></h2>
                </div>
                <div class="service-link text-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <ul>
                        <?php
                        if(have_rows('services_types')):
                            while(have_rows('services_types')): the_row();
                            $title = sanitize_title(get_sub_field('services_title'));
                        ?>
                        <li><a href="#<?php echo $title; ?>" title="<?php the_sub_field('services_title'); ?>"><?php the_sub_field('services_title'); ?></a></li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="service-list-wp">
            <?php
            if(have_rows('services_types')):
                while(have_rows('services_types')): the_row();
                $title = sanitize_title(get_sub_field('services_title'));
                if(get_row_index() % 2 != 0):
            ?>
                    <div class="row service-list align-items-center odd" id="<?php echo  $title; ?>">
                        <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="service-img-wp">
                                <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_types_image'); ?>');"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="service-content">
                                <h3 class="h3-title"><?php the_sub_field('services_title'); ?></h3>
                                <?php the_sub_field('services_content'); ?>
                                <a href="<?php the_sub_field('services_page_link'); ?>" title="<?php the_sub_field('services_title'); ?>, Learn More" class="sec-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row service-list align-items-center even" id="<?php echo  $title; ?>">
                        <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="service-content">
                                <h3 class="h3-title"><?php the_sub_field('services_title'); ?></h3>
                                <?php the_sub_field('services_content'); ?>
                                <a href="<?php the_sub_field('services_page_link'); ?>" title="<?php the_sub_field('services_title'); ?>, Learn More" class="sec-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="service-img-wp">
                                <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_types_image'); ?>');"></div>
                            </div>
                        </div>
                    </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- End of Services -->

<!-- Start of Review -->
<section class="review-sec sec-1920">
    <div class="review-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center">
                        <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('reviews_main_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="review-slider">
                    <?php
                    $review_list = get_posts(array(
                    'post_type' => 'reviews',
                    'post_status' => 'publish',
                    'order'          => 'ASC',
                    'posts_per_page' => -1,
                    ));
                    if ($review_list) :
                        foreach($review_list as $review) :
                    ?>
                        <div class="review-slider-box">
                            <div class="review-box text-center">
                                <ul>
                                    <li><img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/star.svg" alt="Star"></li>
                                </ul>
                                <div class="review-text" data-simplebar>
                                    <p>
                                        <?php echo $review->post_content; ?>
                                    </p>
                                </div>
                                <h4><?php echo $review->post_title; ?></h4>
                            </div>
                        </div>
                    <?php
                        endforeach;
                    endif;
                    ?> 
                    </div>
                </div>
            </div>
        </div>
        <?php
        get_template_part('template-parts/content', 'gallery');
        ?>
    </div>
    <div class="review-bottom"></div>
</section>
<!-- End of Review -->

<!-- Start of Hiring -->
<section class="hiring-sec bg-img" style="background-image: url('<?php the_field('hiring_background_image'); ?>');">
    <span class="user-icon">
        <img width="49" height="55" src="<?php the_field('hiring_center_image'); ?>" alt="User Icon">
    </span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="hiring-content text-center white-text">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('hiring_title'); ?></h1>
                    <p class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('hiring_sub_title'); ?></p>
                    <a href="<?php the_permalink(21); ?>" title="Apply Now" class="sec-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Hiring -->