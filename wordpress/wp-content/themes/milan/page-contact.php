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
		<h1><?php the_title(); ?></h1>
	</section>
	<section class="table-boxes">
		<span>
			<div class="contact-info">
				<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
				<?php the_field('box_left'); ?>
			</div>
		</span>
		<span>
			<div class="contact-info">
				<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
				<?php the_field('box_right'); ?>
			</div>
		</span>
	</section>
	<section class="box">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
<?php get_footer(); ?>