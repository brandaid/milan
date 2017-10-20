<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Insurance

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
	<section class="box">
		<?php if(get_field('small_text_2')): ?>
		<h4 class="subtitle-underlined"><?php the_field('small_text_2'); ?></h4>
		<?php endif; ?>
		<?php if(get_field('title_2')): ?>
		<h2 class="bolder"><?php the_field('title_2'); ?></h2>
		<?php endif; ?>
		<?php if(get_field('copy_2')): ?>
		<p class="lighter"><?php the_field('copy_2'); ?></p>
		<?php endif; ?>
	</section>
	<section class="steps">
		<article class="step">
			<?php the_field('step_1'); ?>
			<?php 
			$link = get_field('link_step_1');
			if( $link ): ?>
				<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button"><?php echo $link['title']; ?></a>
			<?php endif; ?>
		</article>
		<article class="step two">
			<?php the_field('step_2'); ?>
			<?php 
			$link = get_field('link_step_2');
			if( $link ): ?>
				<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button"><?php echo $link['title']; ?></a>
			<?php endif; ?>
		</article>	
	</section>
<?php get_footer(); ?>