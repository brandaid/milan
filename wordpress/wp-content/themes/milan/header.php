<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php if ( is_home() || is_front_page()) { ?><?php bloginfo('title' ); ?> <?php } else { ?> <?php wp_title(''); ?> | <?php bloginfo('title' ); ?><?php } ?></title>

	<meta name="revisit-after" content="30 days">
	<meta name="robots" content="index,follow">
	<meta name="distribution" content="global">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>class="cbp-spmenu-push">
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
		<ul id="menu-mobile" class="sm sm-blue">
			<li><a href="#">About Us</a></li>
			<li><a href="#">Insurance</a>
				<ul>
					<li><a href="#">Apartments</a></li>
					<li><a href="#">Commercial Real Estate</a></li>
				</ul>
			</li>
			<li><a href="#">What Makes Us Different</a></li>
			<li><a href="#">Blog</a></li>
		</ul>
		<ul class="nav-featured">
			<li><a href="#" class="button-featured">Contact Us</a></li>
		</ul>
	</nav>
	<div id="loader"></div>
	<header class="header">
		<div class="container">
			<div class="col-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand"><img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt="<?php bloginfo('title' ); ?>"></a>
			</div>
			<div class="col-nav">
				<a href="javascript:void(0);" class="toggle" id="showRightPush">
					<span></span>
					<span></span>
					<span></span>
				</a>
				<ul id="menu-desktop" class="sm sm-blue">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Insurance</a>
						<ul>
							<li><a href="#">Apartments</a></li>
							<li><a href="#">Commercial Real Estate</a></li>
						</ul>
					</li>
					<li><a href="#">What Makes Us Different</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
			<div class="col-nav-featured">
				<ul class="nav-featured">
					<li><a href="#" class="button">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</header>