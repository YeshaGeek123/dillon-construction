<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dillon-construction
 */

?>
<footer id="colophon" class="site-footer">
	<div class="top-footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-content text-center">
						<div class="footer-logo">
							<a href="<?php echo home_url(); ?>" class="custom-logo-link" title="Dillon Construction">
								<img width="154" height="158" src="<?php the_field('footer_logo','options'); ?>" alt="Footer Logo">
							</a>
						</div>
						<div class="footer-text white-text">
							<?php the_field('footer_content','options'); ?>
						</div>
						<div class="contact-link">
							<ul>
								<li>
									<a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>">
										<span class="icon"><img width="20" height="16" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/mail.svg" alt="Mail"></span>
										<span class="text"><?php the_field('email','options'); ?></span>
									</a>
								</li>
								<?php global $phone,$phone_link; ?>
								<li>
									<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>">
										<span class="icon"><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/phone.svg" alt="Mail"></span>
										<span class="text callus"><?php echo $phone; ?></span>
									</a>
								</li>
								<li>
									<a href="<?php the_field('address_link','options'); ?>" title="<?php the_field('address','options'); ?>" target="_blank">
										<span class="icon"><img width="18" height="22" src="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/images/map-pin.svg" alt="Mail"></span>
										<span class="text"><?php the_field('address','options'); ?></span>
									</a>
								</li>
								<li>
									<a href="<?php the_field('facebook_link','options'); ?>" title="Follow On Facebook" class="fb" target="_blank">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="instagram-title text-center">
						<h3><span class="light">Follow Us on Instagram</span>@LoremIpsum</h3>
					</div>
				</div>
			</div>
			<div class="row instagram-slider">
				<div class="col-lg-12">
					<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-12">
					<div class="footer-bottom-text">
						<div class="copy-right">
							<p>&copy; <?php echo date('Y'); ?> Dillon Construction LLC</p>
							<div class="footer-bottom-link">
								<ul>
									<li><a href="<?php echo home_url();?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="<?php echo home_url();?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
									<li><a href="<?php echo home_url();?>/cookies-policy" title="Cookies Policy">Cookies Policy</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-other-link">
							<p>Website Design, SEO & Online Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<div class="modal common-popup estimate-popup" id="get_an_quote_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="popup-title">
				<h3 class="h3-title">Request an Quote</h3>
				<button type="button" class="close close-popup" data-dismiss="modal"></button>
			</div>
			<div class="common-popup-overflow">
				<div class="common-popup-text" data-simplebar>
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="165" title="Request a Quote"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>