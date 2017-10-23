<ul class="two-columns">
	<li>input</li>
	<li>
		<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get" class="form-search" role="search">
			<input type="text" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s">
			<button id="searchsubmit" class="fa fa-search"></button>
		</form>
	</li>
</ul>