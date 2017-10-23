<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template About

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
	<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'top_image', true);
	?>
	<section class="image-top" style="background: url('<?php echo $thumb_url[0]; ?>') center 0 / cover no-repeat;">
		<h1><?php the_title(); ?></h1>
	</section>
	<section class="box about">
		<div class="container">
			<h2 class="title-icon"><?php the_field('title_with_icon'); ?></h2>
			<?php the_field('copy'); ?>
		</div>
	</section>
	<?php
		$image_id = get_field('background_image');
		$image_size = 'about_image';
		$image_array = wp_get_attachment_image_src($image_id, $image_size);
		$image_url = $image_array[0];
	?>
	<section class="box offer" style="background: url(<?php echo $image_url; ?>)no-repeat; background-size: cover;">
		<div class="container">
			<h3><?php the_field('title_box_image'); ?></h3>
			<p><?php the_field('copy_box_image'); ?></p>
			<ul class="four-columns">
				
				<?php while(has_sub_field('list')): ?>

				<li>
					<?php the_sub_field('icon'); ?>
					<h4><?php the_sub_field('title'); ?></h4>
					<p><?php the_sub_field('copy'); ?></p>
				</li>

				<?php endwhile; ?>

			</ul>
		</div>
	</section>
<?php get_footer(); ?>