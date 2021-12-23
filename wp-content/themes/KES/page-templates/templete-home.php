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
			<div class="testimonial-title"><span>Testimonials</span> </div>
			<img id="quotes-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/quotes.svg" alt="">
			<?php echo do_shortcode("[testimonial-slider]"); ?>
		</div>
		<div class="why-kes">
			<h3 class="h3"><span>Why</span> Kes?</h3>
			<p class="description">Khaptad English School associated exclusively with an esteemed organization PABSON, Nepal, is composite of highly qualified and intellectual teaching faculties. Since, its inception, it has been thriving with the aspiration of quality education of international standard. Moreover, Khaptad takes pride in providing best teaching faculties who can best understand the psychological need along with emotional stages of the learners and unearth the hidden abilities of them in order to embellish the learners with resources, skills and dexterity. Nelson Mandela once said, "Education is the most powerful weapon which you can use to change the world." As right observed by Mandela, Khaptad envisions of empowering students for social transformation and to contribute to the progress of the nation. It is often stated that a good management should act like a facilitator and we resolutely believe on it and we do not let the students feel the lack of it.</p>
			<!-- insert a button to continue reading  -->
			<a href="#" class="btn-1">Read More</a>
		</div>
	</section>
	<section class="news-and-events-container">
		<div class="heading">
			<h4 class="h4">News & Events</h4>
			<h2 class="h2">From the news</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider-2.svg" alt="">
		</div>
		<div class="events-container">
			
		</div>
	</section>
</main>
<?php
get_footer();
