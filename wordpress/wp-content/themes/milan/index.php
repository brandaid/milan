<?php
/**
 * @package WordPress
 * @subpackage Milan

 Template Name: Template Home

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
	<main>
		<section class="hero-banner">
			<div class="container">
				<div class="center-hero">
					<div class="center-hero--info">
						<h1>Investment Focused. <br>Insurance Minded.</h1>
						<p>for the Multifamily and Commercial Real Estate Industry</p>
					</div>
				</div>
			</div>
			<div class="center">
				<a href="#welcome" class="ico-scroll">SCROLL</a>
			</div>	
		</section>
		<section class="box welcome" id="welcome">
			<div class="container">
				<h4>Welcome to Milan</h4>
				<h2>Your Expert Source for Apartment Insurance</h2>
				<p>Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow picanha meatloaf fatback strip steak. Shank fatback beef ribs leberkas, ground round doner chuck ribeye meatloaf. Landjaeger boudin prosciutto pancetta. Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow fatback strip steak.</p>
				<a href="" class="button">What Makes Us Different?</a>
			</div>
		</section>
		<section class="call-to-action">
			<article class="call-to-action--item">
				<div class="banner">
					<div class="center-box">
						<div class="center-box--info">
							<div class="box1">
								<h2>Apartments</h2>
								<small>Services & Options</small>
							</div>

							<div class="card">
								<h3>Lorem Ipsum Commercial Properties Main Header Goes Right Here.</h3>
								<p>Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow picanha meatloaf fatback strip steak. Shank fatback beef ribs leberkas, ground round doner chuck ribeye meatloaf. Landjaeger boudin prosciutto pancetta.</p>
								<a href="">Tell me more</a>
							</div>

						</div>
					</div>
				</div>
			</article>
			<article class="call-to-action--item">
				<div class="banner">
					<div class="center-box">
						<div class="center-box--info">
							<div class="box1">
								<h2>Commercial <br>Real Estate</h2>
								<small>Services & Options</small>
							</div>

							<div class="card">
								<h3>Lorem Ipsum Commercial Properties Main Header Goes Right Here.</h3>
								<p>Bacon ipsum dolor amet rump shank t-bone, short loin drumstick boudin turkey chuck cow picanha meatloaf fatback strip steak. Shank fatback beef ribs leberkas, ground round doner chuck ribeye meatloaf. Landjaeger boudin prosciutto pancetta.</p>
								<a href="">Tell me more</a>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
	</main>
<?php get_footer(); ?>