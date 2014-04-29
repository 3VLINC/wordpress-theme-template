<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('|'); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		
		<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

		<!--[if lt IE 9]>
	
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/html5.js" type="text/javascript"></script>
	
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/css3-mediaqueries.js" type="text/javascript"></script>

		<![endif]-->
		
		<?php wp_head(); ?>
		
		<!-- end of wordpress head -->

		<!-- Google Analytics -->
				
		
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header id="site-header" role="banner">

				<div id="inner-header">
					
					<div class="social-media">
						
							<ul class="social-icons">
	
								<li class="facebook">
								
									<a href="#" target="_blank" title="Follow us on Facebook">Facebook</a>
									
								</li>
								
								<li class="twitter">
								
									<a href="#" target="_blank" title="Follow us on Twitter">Twitter</a>
									
								</li>
								
								<li class="instagram">
								
									<a href="#" target="_blank" title="We are on Instagram">Instagram</a>
									
								</li>
						
							</ul><!-- end .social-icons -->
						
					</div>

					<!-- different div for home page -->
					<?php
						
						if (is_front_page()) {
						
					?>	
					
						<div id="site-logo">

							<h1><?php bloginfo('name'); ?></h1>
							
						</div><!-- end #site-logo -->
							
					<?php					
						
						} else {
					
					?>
						
						<div id="site-logo">

							<a href="<?php echo home_url(); ?>" rel="nofollow">
								
								<?php bloginfo('name'); ?>
								
							</a>
						
						</div><!-- end #site-logo -->
						
					<?php
					
						} //end else
						
					?>


					<nav role="navigation" id="main-nav">
					
						<?php wp_nav_menu( array('theme_location' => 'header' )); ?>
					
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
