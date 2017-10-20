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
			<?php the_content(); ?>
		</div>
	</section>
<?php get_footer(); ?>