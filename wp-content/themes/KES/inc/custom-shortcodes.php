<?php 
// configure a shortcode for content-testimonial-slider.php

function testimonial_slider() {

    ob_start();
  
    get_template_part( 'template-parts/content', 'testimonial-slider' );
  
    return ob_get_clean();
  }
  
  function register_shortcodes(){
    add_shortcode('testimonial-slider', 'testimonial_slider');
  }

  add_action( 'init', 'register_shortcodes');