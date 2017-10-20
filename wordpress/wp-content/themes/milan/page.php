<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template About

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
	<section class="image-top">
		<h1>About Us</h1>
	</section>
	<section class="box about">
		<div class="container">
			<h2 class="title-icon">Who We Are</h2>
			<p>At Milan, our mission is to be an industry leader who is solely focused on insuring the unique risk associated with apartment communities, commercial real estate properties, and income producing real estate. Unlike the traditional insurance agency model that serve multiple industries we have a deep understanding of the insurance needs required specifically by the investor savvy property owner. Our client base varies from the small investor who is building their portfolio to large investment groups who have graduated their management duties to property and asset managers. We also work with clients such as private equity investors, REIT’s, and financial/lending institutions.</p>
			<p>Lee J. Maness, founding principal, had the desire to build something different after working in the traditional agency setting and found that the general nature didn’t allow for true specialty support. This is where Milan prides itself in truly being a different type of partner. We have identified industry leaders and experts in the real estate field and these synergies are invaluable. These relationships coupled with our highly qualified team at Milan drive innovative insurance solutions and risk structure that leads to greater returns for our client’s investment dollars. Milan Insurance Partners is committed to serving you with the highest level of service and professionalism.</p>
		</div>
	</section>
	<section class="box offer">
		<div class="container">
			<h3>What We Offer is Simple</h3>
			<p>A personalized, efficient, market-knowledgable plan that turns quickly into action. See what happens when your goals meet our plans.</p>
			<ul class="four-columns">
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/ico.png" alt="">
					<h4>Experience</h4>
					<p>Our 35 years of combined experience lead to creative solutions and sustainable results.</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/ico.png" alt="">
					<h4>Specialization</h4>
					<p>Our focus and energy is aimed at one thing: the sale of retail investment properties.</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/ico.png" alt="">
					<h4>Knowledge</h4>
					<p>Your investment dollars deserve deep market knowledge and a tailored plan of action.</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/ico.png" alt="">
					<h4>Relationships</h4>
					<p>We take our work seriously and our relationship with you personally.</p>
				</li>
			</ul>
		</div>
	</section>
<?php get_footer(); ?>