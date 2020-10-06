

<?php get_header(); ?>
<div class="banner">
        <h1>Welcome!</h1>
        <h2>We think you'll like it here</h2>
        <h3>Why dont you check out the mojhor you are interested in ?</h3>
        <a href="" class="button blue">Find your major</a>
    </div>

    <div class="content_section">
        <div class="events">
            <h3>Upcoming Events</h3>

            <?php 
                $homepageEvents = new WP_Query(
                    array(
                        'posts_per_page' => 2,
                        'post_type' => 'uni_event'
                    )
                );

                while($homepageEvents->have_posts()){
                    $homepageEvents->the_post();?>
                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    <p><?php echo wp_trim_words(get_the_content(), 25);?></p>
               <?php }
            
            ?>
            <a href="<?php echo get_post_type_archive_link('uni_event');?>">View All Events</a>

        </div>

        <!-- Dont forget to add the circle UI dates Links  -->
        <div class="blogs">
        <h3>
                From Our BLogs
        </h3>
        <?php 
            $homepagePosts = new WP_Query(array(
                'posts_per_page' => 2
            ));


       while($homepagePosts->have_posts()){
        $homepagePosts->the_post();
           ?>
            <a href="<?php the_permalink(); ?>"><?php the_title()?></a>
            <p>
            <?php 
            echo wp_trim_words(get_the_content(), 25);
            ?>
            </p>
            <?php
       }
       ?>
       <a href="<?php echo site_url('/blog')?>">View All Blogs</a>

        
        </div>
    </div>
    <?php
 
        get_footer();
    ?>
