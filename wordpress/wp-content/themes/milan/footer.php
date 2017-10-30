	</main>
	<?php if (!is_page('blog') && !is_page('whats-make-us-different') && !is_single() && !is_search() && !is_category() ) { ?>
	<section class="box slider">
		<div class="container">
			<h4 class="subtitle-underlined"><?php the_field('subtitle','option'); ?></h4>
			<h2 class="bolder margin-bottom-120"><?php the_field('title','option'); ?></h2>
			<div class="owl-carousel owl-testimonials">

				<?php while(has_sub_field('testimonials','option')): ?>
				
				<div class="item">
					<div class="box-slide">
						<p><?php the_sub_field('copy','option'); ?></p>
						<h5><?php the_sub_field('name','option'); ?></h5>
					</div>
				</div>

				<?php endwhile; ?>
			   
			</div>
		</div>
	</section>
	<?php } ?>
	<section class="box newsletter">
		<div class="container">
			<h3><?php the_field('title_newsletter','option'); ?></h3>
			<p><?php the_field('subtitle_newsletter','option'); ?></p>

			<?php the_field('form_code','option') ?>
			
			<form action="" class="newsletter-form">
				<input type="email" name="EMAIL" class="newsletter-form--input" placeholder="Enter your business email">
				<button class="newsletter-form--button">Get Started</button>
			</form>
		</div>
	</section>
	<footer class="footer">
		<section class="footer-top">
			<div class="container">
				<div class="col">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/brand-footer.png" alt="<?php bloginfo('title' ); ?>" class="brand-footer"></a>
					<p><?php the_field('address','option') ?></p>
					<a href="mailto:<?php the_field('email','option') ?>" class="mail"><?php the_field('email','option') ?></a><br>
					<span><?php the_field('phone','option') ?></span>
				</div>
				<div class="col">
					<ul class="socials">
						<?php while(has_sub_field('social_network','option')): ?>
							<li><a href="<?php the_sub_field('link','option'); ?>" class="fa">
								<?php the_sub_field('icon','option'); ?>
							</a></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</section>
		<section class="footer-bottom">
			<div class="container">
				<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('title' ); ?> |  Website hand crafted by <a href="https://www.brandaiddesignco.com/" target="blank">Brand Aid</a></small>
			</div>
		</section>
		<?php if (is_page(4)) { ?>
		<style>
			@media all and (min-width: 992px) {
				body {
					padding-bottom: 161px;
				}
			}
		</style>
		<section class="banners-footer">
			<article>
				<a href="<?php the_field('left_cta_footer','option'); ?>">Apartment Insurance</a>
			</article>
			<article>
				<a href="<?php the_field('right_cta_footer','option'); ?>">Commercial Real Estate Insurance</a>
			</article>
		</section>
		<?php }  ?>
	</footer>
	<!--JQUERY -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.smartmenus.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<?php wp_footer(); ?>
</body>
</html>