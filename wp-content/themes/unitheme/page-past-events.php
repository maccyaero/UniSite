<?php get_header(); ?>
<div class="banner">
        <h1>Archive: Past Events</h1>
    </div>

        <div class="events">
            <?php 
                $today = date('Ymd');
                $pastEvents = new WP_Query(
                    array(
                        'paged' => get_query_var('paged',1), //To make pagination work properly
                        'post_type' => 'uni_event',
                        'meta_key'=> 'event_date',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'event_date',
                                'compare' => '<',
                                'value' => $today,
                                'type' => 'numeric'
                            )
                        )


                    )
                );

                while($pastEvents->have_posts()){
                    $pastEvents->the_post();?>
                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    <span> on <?php 
                    $eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('M');
                    echo $eventDate->format('d');
                    ?></span>
                    <p><?php echo wp_trim_words(get_the_content(), 25);?></p>
               <?php } ?>
            <?php 
                echo paginate_links(array(
                'total'=>$pastEvents->max_num_pages
                )); ?>



<?php get_footer(); ?>