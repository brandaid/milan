<?php get_header(); ?>

	<section class="no-image-top">
		<h1>Category: <?php the_category( ', ' ); ?></h1>
	</section>
	<section>
		<div class="container">
			<ul class="two-columns">
				<li>
					<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
			            <?php
			                $args = array(
			                    'show_option_all'    => '',
								'show_option_none'   => '',
								'option_none_value'  => '-1',
			                    'show_count'         => 0,
			                    'hide_empty'         => 1,
			                    'orderby'            => 'name',
			                    'echo'               => 0
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

			<?php if ( have_posts() ) : ?>       
	        <?php while ( have_posts() ) : the_post(); 
	        if( $post->ID == $do_not_duplicate ) continue;
	        ?>
					<li>
						<article class="box-post">
							<small><?php the_category( ', ' ); ?></small>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<hr>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="link">Read More &raquo;</a>
						</article>
					</li>
			<?php endwhile; ?>
		    <?php else : ?>
		    	<div class="container">
		           <div class="box-no-results">
		               No results found...
		           </div>
	           </div>
	       <?php endif; ?>

			</ul>

			<!-- start PAGINATION -->
			<?php wpbeginner_numeric_posts_nav(); ?>
			<!-- end PAGINATION --> 

		</div>
	</section>
<?php get_footer(); ?>