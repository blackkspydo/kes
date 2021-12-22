<?php

/**
 * Template Name: Templete Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
	get_template_part('global-templates/hero');
}

?>


<main>
	<section class="hero">
	<div id="photosphere"></div>
	<div class="overlay-photosphere">
		<div class="hero-text">
			<div class="divider">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.svg" alt="">

			</div>
			<div class="h1">Welcome to the</div>
			<div class="h1 h1-bold">Khaptad English School</div>
		</div>
	</div>
	</section>
	<section class="container sub-hero">
		<div class="testimonial-container">
			
			



		</div>
	</section>
</main>




<?php
get_footer();
