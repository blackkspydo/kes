<?php
global $post;
$query_args = array(
    'post_type'  => 'testimonials'
);

$loop = new WP_Query($query_args);
if ($loop->have_posts()) :
?>

    <div class="testimonial-slider">
        <?php
        while ($loop->have_posts()) : $loop->the_post();
        ?>


            <div class="testimonial">
                <div class="img-container">
                    <img src="<?php the_field('thumbnail') ?>" alt="">
                </div>
                <div class="testimonial-author">
                    <div class="name"><?php the_field('testimonial_author') ?></div>
                    <div class="testimonial-author-about"><?php the_field('testimonial_author_status') ?> <?php if (get_field('batch')) {
                                                                                                                echo '<span class="batch"> | ' . get_field('batch') . '-Batch</span>';
                                                                                                            } else {
                                                                                                                echo '<span class="batch"></span>';
                                                                                                            }
                                                                                                            ?></div>
                </div>
                <p class="testimonial-text">" <?php the_field('excerpt') ?> "</p>
            </div>
<?php
        endwhile;
        wp_reset_postdata();
?>
    </div>
    

<?php endif; ?>