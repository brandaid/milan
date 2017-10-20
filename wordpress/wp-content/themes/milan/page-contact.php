<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Contact

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
	<section class="no-image-top">
		<h1>How Can We Help?</h1>
	</section>
	<section class="table-boxes">
		<span>
			<div class="contact-info">
				<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
				<h4>Contact Us</h4>
				<p>Thank you for visiting Milan Insurance Partners. To leave us a general message please submit your request below.</p>
			</div>
		</span>
		<span>
			<div class="contact-info">
				<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
				<h4>Our Info</h4>
				<p>5141 Virginia Way, STE 320 <br>
				Brentwood, TN 37027 <br>
				(615) 690-3001    office <br>
				(615) 523-4990    fax</p>
				<a href="">info@milaninsurancepartners.com</a>	
			</div>
		</span>
	</section>
	<section class="box">
		[CONTACT FORM]
	</section>
<?php get_footer(); ?>