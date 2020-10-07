<?php get_header();?>
<?php  
while(have_posts()){
    the_post();?>
     <div class="banner" style="background-image: url(images/hero-bg.png);">
        <h1><?php the_title();?></h1>
        
            </div>
            
             <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/programs') ;?>">Back to Programs Home</a></li>
            <li><?php the_title();?></li>

            </ul>

    <?php the_content();?>
    <br>
    <hr>
    <br>
    <?php
    
                $today = date('Ymd');
                $relatedEvents = new WP_Query(
                    array(
                        'posts_per_page' => 2,
                        'post_type' => 'uni_event',
                        'meta_key'=> 'event_date',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'event_date',
                                'compare' => '>=',
                                'value' => $today,
                                'type' => 'numeric'
                            ),
                            array(
                                'key' => 'related_program',
                                'compare' => 'LIKE',
                                'value' =>'"'.get_the_ID().'"' //related_program is an array of 
                                                                //program post types , Sql cant store 
                                                                //an array in it so wordpress serilises
                                                                // the array in to a long text field, 
                                                                //fortunately wordpress puts the id in 
                                                                //quotation so we can search it. we just have to set the key to the id with quotation mars "".
                            )
                        )


                    )
                );
                while($relatedEvents->have_posts()){
                    $relatedEvents->the_post();?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <span> on <?php 
                    $eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('M');
                    echo $eventDate->format('d');
                    
                    
                    
                    ?></span>
                    <p><?php echo wp_trim_words(get_the_content(), 25);?></p>
               <?php }
}

?>
<?php get_footer();?>

