<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dillon-construction
 */

get_header();
?>

<!-- Start of Inner Banner -->
<section class="inner-banner contact-banner bg-img sec-1920" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/07/contact-back-img.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="inner-banner-content text-center white-text">
					<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">oops! that page can't be found.</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Inner Banner -->	
<div class="blog-post">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<div class="error-404 not-found">
							<div class="error404page"> 
								<img width="413" height="180" src="<?php echo get_template_directory_uri();?>/assets/images/404.svg" alt="404 Page Not Found!">
							</div>
						</div><!-- .error-404 -->
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
