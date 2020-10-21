<?php get_header();?>
<?php  
while(have_posts()){
    the_post();?>
     <?php 

pageBanner();

?>
            
    <ul class="breadcrumb">  <!-- Breadcrumb Navigation -->
        <li><a href="<?php echo site_url('/programs') ;?>">Back to Programs Home</a></li>
        <li><?php the_title();?></li>
    </ul>

  <?php the_content();?>    <!-- The Content  -->
    
    <br>
    <hr>
    <br>
    <?php

    $today = date('Ymd');
    // custom querry for showing events.
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
                //Querry to search the database for events which have the relted program to the current url profgram
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

    // Custom querry for showing professors.
    $programProfessors = get_field('') ;
    $relatedProfessors = new WP_Query(
        array(
            'posts_per_page' => -1,
            'post_type' => 'professor',
            'orderby'=> 'title',
            'order' => 'ASC',
            'meta_query' => array(
                //Querry to search the database for Professors which have the relted program to the current url profgram
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
    // Outputting professors
    echo "<ul>";
    while($relatedProfessors->have_posts()){
        $relatedProfessors->the_post();?>
        <h4>Taught by</h4>
        <hr>
        <li>
            <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
            <img src="<?php the_post_thumbnail_url('professorLandscape');?>" alt="">
        </li>
    <?php 
            }
    echo"</ul>";
    ?>
    <?php

    // Outputting Events

    while($relatedEvents->have_posts()){
        $relatedEvents->the_post();?>
        <h4>Related Events</h4>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <span> on <?php 
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('M');
        echo $eventDate->format('d');
        ?>
        </span>
        <p><?php echo wp_trim_words(get_the_content(), 25);?></p>
    <?php 
            }
    ?>
       
 <?php
 get_footer();
 }
 ?>