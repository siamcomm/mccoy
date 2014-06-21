<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<?php // Google Chrome Frame for IE ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title(''); ?></title>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>
</head>
<body <?php body_class(); ?>>
	<header class="header" role="banner">
		<div id="inner-header" class="container clearfix">
			<nav role="navigation" class="navbar">
				<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
				<?php wp_nav_menu(array(
					'container' => false,                           // remove nav container
					'container_class' => 'menu clearfix',           // class of container (should you choose to use it)
					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
					'menu_class' => 'nav top-nav clearfix',         // adding custom nav class
					'theme_location' => 'main-nav',                 // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => ''       						// fallback function
				)); ?>
				</div>
			</nav>
		</div> <!-- end #inner-header -->
	</header> <!-- end header -->
