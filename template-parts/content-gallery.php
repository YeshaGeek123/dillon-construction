<div class="gallery-sec">
    <div class="container">
        <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
            <div class="col-lg-12 gallery-slider">
                <?php
                $gallery_image = get_field('gallery_images',9);
                if(isset($gallery_image) && !empty($gallery_image)) :
                $counter = 1;
                    foreach ($gallery_image as $key => $image) :
                ?>
                        <a href="<?php echo $image['url']; ?>" data-fancybox="gallery" title="Gallery Image <?php echo $counter++; ?>" class="gallery-img-wp">
                            <div class="gallery-img bg-img" style="background-image: url('<?php echo $image['url']; ?>');"></div>
                        </a>
                    <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>