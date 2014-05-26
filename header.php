<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('|',true, 'right'); ?><?php bloginfo('name'); ?></title>

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
		
		<?php wp_head(); ?>

		
		<!-- fonts -->
		
		<!-- end of fonts -->
		
		
		<!-- Google Analytics -->
		
		<!-- end of Google Analytics -->
		
		
		<!-- Browser support scripts -->
		
		<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

		<!-- [if lt IE 9]>
	
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/html5.js" type="text/javascript"></script>
	
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/css3-mediaqueries.js" type="text/javascript"></script>

		<![endif] -->
		
		<!-- end of browser support scripts -->


	</head>

	<body <?php body_class(); ?>>
	
		<div id="container">

			<header id="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
					
					<?php get_search_form(); ?>
			
					<div id="site-logo">
					
					<!-- different logo, links and h1 structure in Home page -->	
					
						<?php
					
							if (is_front_page()) {
					
						?>
					
							<div id="logo">						 
							
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo.png" />
									
							</div>
							
							<h1><?php bloginfo('name'); ?></h1>
							
						<?php					
					
							} else {
				
						?>
							
							<div id="logo">
							
								<a href="<?php echo home_url(); ?>">
								
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo.png" />
								
								</a>
							
							</div>
							
							<a href="<?php echo home_url(); ?>" class="h1">
							
								<?php bloginfo('name'); ?>
						
							</a>							
							
							
						<?php
				
							}
					
						?>

						
					</div> <!-- end #site-logo -->
					
					<div id="site-description">
					
						<?php bloginfo('description'); ?>
						
					</div>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
