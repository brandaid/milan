<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Whats Makes us Different

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
	<main>
		<section class="no-image-top">
			<h1>What Makes Us Different?</h1>
		</section>
		<section class="box about">
			<div class="container">
				<h2 class="title-icon">The Milan Promise</h2>
				<p>Milan Insurance Partners converts experience into value for our clients, employees, and business partners.</p>
				<p>Unlike the traditional agency model serving multiple industries, we have a deep understanding  of the insurance needs required specifically by the investor savvy property owner. Our diverse client base ranges from single property owners to large investment firms, and our disciplined team of employees and value added partners consisting of management, sales, account managers, loss control engineers, claims managers, and others all work in sync to provide coordinated professional service to each and every one of these clients.</p>
			</div>
		</section>
		<section class="image-and-text">
			<div class="container">
				<img src="<?php bloginfo('template_url'); ?>/images/insurance.jpg" alt="">
				<div class="content-info">
					<div class="info">
						<p>We create risk management strategies to give clients peace of mind.</p>
						<p>We create a fulfilling and unique workplace for our employees to thrive.</p>
						<p>We seek to use our resources to improve the communities in which we work.</p>
					</div>
				</div>
			</div>			
		</section>
		<section class="box gray">
			<div class="container">
				<h3 class="bolder margin-bottom-60">Our Core Values</h3>
				<ul class="three-columns">
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
						<h4>Selflessness</h4>
						<p>Always remember that your work has a purpose larger than yourself. Selflessness is to make “less” of your “self ” and more of those around you.</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
						<h4>Disciplined effort</h4>
						<p>Would you train aimlessly for a marathon, or would you make a diligent and comprehensive training plan and stick to it? Don’t simply show up to work and start doing “stuff” – make a plan and stick to it. </p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
						<h4>Right Thing</h4>
						<p>Let’s face it. There are times when it is easy to make money and do the wrong thing or pass on money to do the right thing. We strive to choose the right thing every time. </p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
						<h4>Market Knowledge</h4>
						<p>Nearly all dominant sports team dominate on their home floor. The same applies for our business. We will protect our home floor by continuously learning every nuance of it. </p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/ico2.png" alt="">
						<h4>Compete to win</h4>
						<p>We have a goal of becoming the most active multifamily firm in the southeast, and  we will show up every day ready to make progress on that goal. </p>
					</li>
				</ul>
			</div>
		</section>

	</main>
<?php get_footer(); ?>