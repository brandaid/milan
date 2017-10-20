<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Home

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

		<?php
			$image_id = get_field('image');
			$image_size = 'hero_image';
			$image_array = wp_get_attachment_image_src($image_id, $image_size);
			$image_url = $image_array[0];
		?>

		<section class="hero-banner" style="background: url(<?php echo $image_url; ?>)no-repeat; background-size: cover;">
			<div class="container">
				<div class="center-hero">
					<div class="center-hero--info">
						<h1><?php the_field('title'); ?></h1>
						<p><?php the_field('subtitle'); ?></p>
					</div>
				</div>
			</div>
			<div class="center">
				<a href="#welcome" class="ico-scroll">SCROLL</a>
			</div>	
		</section>
		<section class="box welcome" id="welcome">
			<div class="container">
				<h4><?php the_field('small_text'); ?></h4>
				<h2><?php the_field('box_title'); ?></h2>
				<p><?php the_field('box_copy'); ?></p>
				<?php 
				$link = get_field('button');
				if( $link ): ?>
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button"><?php echo $link['title']; ?></a>
				<?php endif; ?>
			</div>
		</section>
		<section class="call-to-action">

			
			<?php $the_query = new WP_Query( 'page_id=8' ); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<?php
				$image_id = get_field('on_home_image');
				$image_size = 'insurance_home';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>

			<article class="call-to-action--item">
				<div class="banner" style="background: url(<?php echo $image_url; ?>)no-repeat; background-size: cover;">
					<div class="center-box">
						<div class="center-box--info">
							<div class="box1">
								<h2><?php the_title(); ?></h2>
								<small><?php the_field('on_home_small_text') ?></small>
							</div>

							<div class="card">
								<h3><?php the_field('on_home_title') ?></h3>
								<p><?php the_field('on_home_copy') ?></p>
								<?php 
								$link = get_field('cta');
								if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</article>
			
			<?php endwhile; wp_reset_query(); ?>

			<?php $the_query = new WP_Query( 'page_id=25' ); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<?php
				$image_id = get_field('on_home_image');
				$image_size = 'insurance_home';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>

			<article class="call-to-action--item">
				<div class="banner" style="background: url(<?php echo $image_url; ?>)no-repeat; background-size: cover;">
					<div class="center-box">
						<div class="center-box--info">
							<div class="box1">
								<h2><?php the_title(); ?></h2>
								<small><?php the_field('on_home_small_text') ?></small>
							</div>

							<div class="card">
								<h3><?php the_field('on_home_title') ?></h3>
								<p><?php the_field('on_home_copy') ?></p>
								<?php 
								$link = get_field('cta');
								if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</article>
			
			<?php endwhile; wp_reset_query(); ?>

		</section>
<?php get_footer(); ?>