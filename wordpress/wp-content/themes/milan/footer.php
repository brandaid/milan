	</main>
	<?php if (!is_page(16) && !is_page(14) && !is_single() ) { ?>

	<section class="box slider">
		<div class="container">
			<h4 class="subtitle-underlined">Testimonials</h4>
			<h2 class="bolder margin-bottom-120">What Our Clients Are Saying</h2>
			
			<div class="owl-carousel owl-testimonials">
			    <div class="item">
			    	<div class="box-slide">
			    		<p>Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow picanha meatloaf fatback strip steak. Shank fatback beef ribs leberkas, ground round doner chuck ribeye meatloaf. Landjaeger boudin prosciutto pancetta. Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow fatback strip steak. </p>
			    		<h5>Jonathan Smith</h5>
			    	</div>
			    </div>
			    <div class="item">
			    	<div class="box-slide">
			    		<p>Ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow fatback strip steak.  Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow picanha meatloaf fatback strip steak. Shank fatback beef ribs leberkas, ground round doner chuck ribeye meatloaf. Landjaeger boudin prosciutto pancetta.</p>
			    		<h5>Matias Jaubet</h5>
			    	</div>
			    </div>
			    <div class="item">
			    	<div class="box-slide">
			    		<p>Shank fatback beef ribs leberkas, ground round doner chuck ribeye meatloaf. Landjaeger boudin prosciutto pancetta. Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow picanha meatloaf fatback strip steak.</p>
			    		<h5>Roberto Galán</h5>
			    	</div>
			    </div>
			</div>
		</div>
	</section>
	<?php } ?>
	<section class="box newsletter">
		<div class="container">
			<h3>Looking for more information?</h3>
			<p>Take a look at our services or contact us anytime.</p>
			<form action="" class="newsletter-form">
				<input type="text" class="newsletter-form--input" placeholder="Enter your business email">
				<button class="newsletter-form--button">Get Started</button>
			</form>
		</div>
	</section>
	<footer class="footer">
		<section class="footer-top">
			<div class="container">
				<div class="col">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/brand-footer.png" alt="<?php bloginfo('title' ); ?>" class="brand-footer"></a>
					<p>5141 Virginia Way, Ste 320 <br> Brentwood, TN37027 </p>
					<a href="" mailto="support@milaninsurancepartners.com" class="mail">support@milaninsurancepartners.com</a><br>
					<span>(615) 846-7777</span>
				</div>
				<div class="col">
					<ul class="socials">
						<li><a href="" class="fa fa-facebook"></a></li>
						<li><a href="" class="fa fa-twitter"></a></li>
						<li><a href="" class="fa fa-linkedin"></a></li>
						<li><a href="" class="fa fa-google-plus"></a></li>
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
				<a href="">Apartment Insurance</a>
			</article>
			<article>
				<a href="">Commercial Real Estate Insurance</a>
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