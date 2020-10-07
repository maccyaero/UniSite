<?php get_header();?>


<div class="banner" style="background-image: url(images/hero-bg.png);">
    <h1><?php the_archive_title(); ?></h1>
    <h2>Welcome to our world !</h2>
</div>
<div class="events_archive_content">
    <?php 
        while(have_posts()){
            the_post();
            ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    <p><?php echo wp_trim_words(get_the_content(), 25);?></p>
       <?php }  
    ?>
    
<?php echo paginate_links();


;?>
<hr>
<p>Looking for the past events? Visit our past events archive <a href="<?php echo site_url('/past-events') ?>">here</a></p>

</div>
<?php get_footer(); ?>