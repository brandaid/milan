<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Insurance

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
	<section class="image-top">
		<h1>About Us</h1>
	</section>
	<section class="box about">
		<div class="container">
			<h2 class="title-icon">Trust an Agent Who Understands <br> Investment Real Estate</h2>
			<p>At Milan our specialization is what makes us different. By focusing on the needs of income producing real-estate Owners, management, and operations we have tailored our offerings to match the unique needs of this client base. Our commitment to this industry better serves us in identifying client goals, understanding these complex Risks, developing unique and strategic plans, and ultimately controlling the cost of the risk.</p>
		</div>
	</section>
	<section class="image-and-text">
		<div class="container">
			<img src="<?php bloginfo('template_url'); ?>/images/insurance.jpg" alt="">
			<div class="content-info">
				<div class="info">
					<h3>What We Protect</h3>
					<ul>
						<li>Traditional Multi-Family</li>
						<li>Student Housing</li>
						<li>Senior Housing</li>
						<li>Subsidized Housing</li>
						<li>RAD Conversions</li>
						<li>Historic Conversions</li>
					</ul>
				</div>
			</div>
		</div>			
	</section>
	<section class="box">
		<h4 class="subtitle-underlined">APartment Insurance</h4>
		<h2 class="bolder">Available Products</h2>
		<p class="lighter">Ask about our Business Owner’s Policy (BOP) today!</p>
	</section>
	<section class="steps">
		<article class="step">
			<h3>Primary Coverages</h3>
			<p>Property <br>
			General Liability <br> 
			Excess Liability <br>
			Umbrella</p>
			<a href="" class="button">Button</a>
		</article>
		<article class="step two">
			<h3>Optional Coverages</h3>
			<p>Cyber Liability <br>
			Crime/Employee Dishonesty <br>
			Directors & Officers Liability <br>
			Errors & Omissions Liability <br>
			Renters Liability <br>
			Utility Bonds <br>
			Workers Compensation <br>
			Earthquake & Flood</p>
			<a href="" class="button">Button</a>
		</article>	
	</section>
<?php get_footer(); ?>