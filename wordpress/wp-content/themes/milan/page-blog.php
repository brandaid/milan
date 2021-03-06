<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Blog

*/
?>
<?php get_header(); ?>

	<section class="no-image-top">
		<h1>Latest News</h1>
	</section>
	<section>
		<div class="container">
			<ul class="two-columns">
				<li>
					<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
			            <?php
			                $args = array(
			                    'show_option_none'  => __( 'Categories...'),
								'option_none_value' => '0',
			                    'show_count'        => 0,
			                    'hide_empty'        => 1,
			                    'orderby'           => 'name',
			                    'echo'              => 0
			                );
			            ?>
			            <?php $select  = wp_dropdown_categories( $args ); ?>
			            <?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
			            <?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>
			            <?php echo $select; ?>
			            <noscript>
			                <input type="submit" value="View" />
			            </noscript>
			        </form>
				</li>
				<li>
					<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get" class="form-search" role="search">
						<input type="text" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s">
						<button id="searchsubmit" class="fa fa-search"></button>
					</form>
				</li>
			</ul>

			<ul class="two-columns">

			<?php 
			// the query to set the posts per page to 3
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('posts_per_page' => 10, 'paged' => $paged );
			query_posts($args); ?>
			<!-- the loop -->
			<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
					<li>
						<article class="box-post">
							<small><?php the_category( ', ' ); ?></small>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<hr>
							<p><?php the_field('pre'); ?></p>
							<a href="<?php the_permalink(); ?>" class="link">Read More &raquo;</a>
						</article>
					</li>
			<?php endwhile; ?>
			<!-- pagination -->
			<?php else : ?>
			<!-- No posts found -->
			<?php endif; ?>

			</ul>

			<!-- start PAGINATION -->
			<?php wpbeginner_numeric_posts_nav(); ?>
			<!-- end PAGINATION --> 

		</div>
	</section>
<?php get_footer(); ?>