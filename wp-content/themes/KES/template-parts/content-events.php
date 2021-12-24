<?php
global $post;
$query_args = array(
    'posts_per_page'   => 3,
    'post_type'  => 'events',
    'meta_key' => 'event_date', // name of custom field
    'orderby' => 'meta_value_num',
    'order' => 'DSC'

);

$loop = new WP_Query($query_args);
if ($loop->have_posts()) :
?>


    <?php
    while ($loop->have_posts()) : $loop->the_post();
    ?>
        <?php

        // Load field value.
        $date_string = get_field('event_date');

        // Create DateTime object from value (formats must match).
        $date = DateTime::createFromFormat('Ymd', $date_string);

        ?>


        <div class="event">
            <div class="event-date">
                <div class="event-date-day"><div class="day"><?php echo $date->format('j'); ?></div><div class="month"><?php echo $date->format('M'); ?></div></div>
                <div class="detail"><span>Detail</span> </div>
            </div>
            <div class="event-details">
                <div class="event-details-title"><?php the_field('event_title') ?></div>
                <p class="event-description"><?php the_field('event-excerpt') ?></p>
                <a href="#" class="btn-1" id="event-btn">Read More</a>
            </div>
        </div>

    <?php
    endwhile;
    wp_reset_postdata();
    ?>



<?php endif; ?>