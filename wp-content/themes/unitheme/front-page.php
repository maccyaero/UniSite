

<?php get_header(); ?>
<div class="banner">
        <h1>Welcome!</h1>
        <h2>We think you'll like it here</h2>
        <h3>Why dont you check out the mojhor you are interested in ?</h3>
        <a href="<?php echo get_post_type_archive_link('program');?>" class="button button--blue">Find your major</a>
    </div>

    <div class="content_section">
        <div class="events">
            <h3 class="t-center">Upcoming Events</h3>

            <?php 
                $today = date('Ymd');
                $homepageEvents = new WP_Query(
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
                            )
                        )


                    )
                );

                while($homepageEvents->have_posts()){
                    $homepageEvents->the_post();?>
                    <div class="blogs-section">
<div class="date-section">
  <div class="date date-blue">
  <a href="">
      <?php
      $eventDate = new DateTime(get_field('event_date'));
      ?>
    <span class="month"><?php echo $eventDate->format('M');?></span>
    <span class="day"><?php echo $eventDate->format('d');?></span>
  </a>
    
  </div>
</div>
  
  <div class="event-summary">
    <h3 class= "t-left"><?php the_title(); ?></h3>
    <p>
    <?php echo wp_trim_words(get_the_content(), 25);?>
       <a href="<?php the_permalink(); ?>">Rea more</a>
    </p>
    
  </div>
</div>
               <?php }
            
            ?>
            <a href="<?php echo get_post_type_archive_link('uni_event');?>" class="button--content button--blue t-center">View All Events</a>

        </div>

        <!-- Dont forget to add the circle UI dates Links  -->
        <div class="blogs"> <!-- Blog Section  -->
        <h3>
                From Our Blogs
        </h3>
        <?php 
            $homepagePosts = new WP_Query(array(
                'posts_per_page' => 2
            ));


       while($homepagePosts->have_posts()){
        $homepagePosts->the_post();
           ?>
           
           <div class="blogs-section">
<div class="date-section">
  <div class="date">
  <a href="">
      <?php
      $blogDate = new DateTime(get_the_date());
      ?>
    <span class="month"><?php echo $blogDate->format('M'); ;?></span>
    <span class="day"><?php echo $blogDate->format('d'); ;?></span>
  </a>
    
  </div>
</div>
  
  <div class="event-summary">
    <h3 class= "t-left"><?php the_title(); ?></h3>
    <p>
    <?php echo wp_trim_words(get_the_content(), 25);?>
       <a href="<?php the_permalink(); ?>">Rea more</a>
    </p>
    
  </div>
</div>
            <?php
       }
       ?>
       <a href="<?php echo site_url('/blog')?>" class="button--content button--yellow">View All Blogs</a>

        
        </div>
    </div>
    <?php
 
        get_footer();
    ?>
