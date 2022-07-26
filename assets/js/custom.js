jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

    // Gallery Slider
    jQuery('.gallery-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        rows: 0,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        swipeToSlide: true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                }
            }
        ]
    });

    // Review Slider
    jQuery('.review-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: true,
        centerMode: true,
        swipeToSlide: true,
        autoplaySpeed: 2000,
        rows: 0,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }]
    });

    //Instagram Slider
    setTimeout(function() {
        jQuery("#sbi_images").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: true,
            rows: 1,
            swipeToSlide: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: false,
                        rows: 0,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: false,
                        rows: 0,
                    }
                }
            ]
        });
    }, 1000);

    //Fancy Box
    jQuery().fancybox({
        selector: '.gallery-slider a',
        "afterShow": function() {
            jQuery('.gallery-slider').slick('slickPause');
        },

        "afterClose": function() {
            jQuery('.gallery-slider').slick('slickPlay');
        }
    });


    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    //jQuery("#menu-item-21 a").first().attr('href', 'javascript:void(0);');
    jQuery("#main-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    /*Quote Modal JS */
    jQuery("#get_an_quote_modal").on('show.bs.modal', function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });
    jQuery('#get_an_quote_modal').on('hidden.bs.modal', function() {
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

});


/* Window Load and Resize JS */
jQuery(window).on('load resize', function() {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {

        jQuery("#menu-item-20 a").first().attr('href', 'javascript:void(0);');

        jQuery('body').on('click', '#primary-menu .menu-item-has-children', function() {
            if ((jQuery(this).hasClass('active-sub-menu'))) {
                jQuery(this).removeClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).addClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'block');
            }
        });

        jQuery('#primary-menu .menu-item a , .menu-item-has-children ul').not('.menu-item-has-children a').click(function() {
            jQuery('#site-navigation').removeClass('toggled');
        });

        jQuery('.menu-toggle').click(function() {
            jQuery(".sub-menu").css('display', 'none');
        });
    } else {
        jQuery("#menu-item-20 a").first().attr('href', 'http://192.168.29.2/dillon-construction/#services');
    }
});