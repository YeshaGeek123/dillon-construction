<!-- Start of Inner Banner -->
<section class="inner-banner bg-img sec-1920" style="background-image: url('<?php the_field('service_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center white-text">
                    <h4 class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">Services</h4>
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Service Details -->
<section class="service-details-sec">
    <div class="main-details">
        <img width="668" height="792" src="<?php the_field('service_detail_background_image'); ?>" alt="D Logo" class="d-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="service-detail-content white-text wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <?php the_field('service_detail_content'); ?>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="service-detail-img-wp wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <div class="service-detail-img bg-img" style="background-image: url('<?php the_field('service_detail_image'); ?>');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-box">
        <div class="container-fluid">
            <div class="row justify-content-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
            <?php
            if(have_rows('sub_services_list')):
                while(have_rows('sub_services_list')): the_row(); 
            ?>
                <div class="col-lg-3">
                    <div class="service-box-wp text-center">
                        <h3 class="h3-title"><?php the_sub_field('sub_service_list_title'); ?></h3>
                        <div class="service-box-text">
                            <?php the_sub_field('sub_service_list_content'); ?>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            endif;
            ?>    
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="service-box-btn text-center">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#get_an_quote_modal" title="Request A Quote" class="sec-btn">Request A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_template_part('template-parts/content', 'gallery');
    ?>
</section>
<!-- End of Service Details -->