<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Whats Makes us Different

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
	<section class="no-image-top">
		<h1><?php the_title(); ?></h1>
	</section>

	<section class="box about">
		<div class="container">
			<h2 class="title-icon"><?php the_field('icon_title'); ?></h2>
			<p><?php the_field('copy'); ?></p>
		</div>
	</section>
	<section class="image-and-text">
		<div class="container">
			<?php
				$attachment_id = get_field('image_box');
				$size = "medium_new";
				$image = wp_get_attachment_image_src( $attachment_id, $size );
			?>
		    <img src= "<?php echo $image[0]; ?>" />
			<div class="content-info">
				<div class="info">
					<?php if(get_field('white_box_title')): ?>
					<h3><?php the_field('white_box_title'); ?></h3>
					<?php endif; ?>
					<?php if(get_field('white_box_copy')): ?>
					<?php the_field('white_box_copy'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>			
	</section>

	<section class="box gray">
		<div class="container">
			<h3 class="bolder margin-bottom-60"><?php the_field('title_of_list') ?></h3>
			<ul class="three-columns">
				<?php while(has_sub_field('list')): ?>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/ico.png" alt="">
					<h4><?php the_sub_field('title'); ?></h4>
					<p><?php the_sub_field('copy'); ?></p>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>
<?php get_footer(); ?>