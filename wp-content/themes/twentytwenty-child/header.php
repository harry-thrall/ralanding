<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Twentytwentytwochild
 */
global $post;
$id = get_the_ID();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/db9af42d68.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css"/>

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
			<div class="row-container">
		<div class="logo">
		<?php the_custom_logo(); ?>
		</div>
		<div class="menu-right">
        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
</div>
	
		</div>
		</div>

	</header><!-- #masthead -->

	<header id="masthead" class="site-header mobile-view-header">
			<div class="row-container">
		<div class="logo">
		<?php the_custom_logo(); ?>
		</div>
		<div class="menu-right">
        <div class="spin">
 			<input type="checkbox" class="toggle">
 			<div class="hamburger-s">
			 <div></div>
 			</div>
 		</div>
</div>
	
		</div>
		</div>

		<div class="nav-menu">
<div class="menu-top">
	<div class="menu-logo">
		<?php the_custom_logo(); ?>
	</div>
	<a href="#" class="menu-close"><i class="fas fa-times"></i></a>
</div>
<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

		</div>
	</header><!-- #masthead -->
