<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">


		<!-- ******************* The Navbar Area ******************* -->
		<header>
		<nav id="main-nav" class="navbar" aria-labelledby="main-nav-label">



			<!-- insert logo.svg  -->
			<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" class="logo">
			</a>
			<div class="nav-container">
				<ul class="navbar">
					<li class="nav-item"><a href="#">Home</a></li>
					<li class="nav-item"><a href="#">About Us</a></li>
					<li class="nav-item"><a href="#">Admission</a></li>
					<li class="nav-item"><a href="#">Facilities</a></li>
					<li class="nav-item"><a href="#">Khaptad Eyes</a></li>
					<li class="nav-item"><a href="#">Alumni</a></li>

				</ul>
				<div class="call-us">
				<a href="tel:+977-1-4444444">
					Call Us
				</a>
			</div>
			</div>
			<!-- call to action for telephone -->
			



		</nav>
	</header>