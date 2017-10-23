<?php get_header(); ?>
<?php the_post(); ?>
	<div class="container">
		<article class="box-post">
			<small><?php the_category( ', ' ); ?></small>
			<h1><?php the_title(); ?></h1>
			<hr>
			<div class="box-author cf">
				<figure>
					<?php echo get_avatar( get_the_author_email(), '180' ); ?>
				</figure>
				<p>by <span><?php $author = get_the_author();  echo $author; ?></span></p>
			</div>
			<p><?php the_field('pre'); ?></p>
			<?php the_post_thumbnail( 'post', array( 'class' => 'responsive margin-bottom-30' ) ); ?>
			<?php the_content(); ?>
			<a href="/blog" class="button-solid">Back to Articles</a>
		</article>
	</div>
<?php get_footer(); ?>