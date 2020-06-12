<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		
		<title><?php bloginfo('name'); ?> <?php single_post_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="HandheldFriendly" content="true">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

		<!-- Default Theme Style -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<!-- Custom Styles -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/style.css'; ?>">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<?php wp_head(); ?>
	</head>

	<body>
		<nav>
			<?php
			// check to see if the logo exists, if not show site title
			if ( get_theme_mod( 'refined_logo' ) ) : ?>

			<img class="logo" src="<?php echo get_theme_mod( 'refined_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

			<?php // add a fallback if the logo doesn't exist
			else : ?>
			 
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			 
			<?php endif; ?>
			<div class="toggle" id="js-navbar-toggle">
				<span class="hamburger hamburger--vortex" type="button">
  					<span class="hamburger-box">
    					<span class="hamburger-inner"></span>
  					</span>
				</span>
			</div>
			<?php
					wp_nav_menu( array( 
    					'theme_location' => 'main-menu',
    					'menu_id' => 'js-menu',
    					'menu_class' => 'menu') ); 
				?>
		</nav>
