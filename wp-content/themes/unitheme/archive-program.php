<?php get_header();?>

<?php 

pageBanner(get_the_archive_title(),"There is something for everyone have a look around" );

?>
<!-- <div class="banner" style="background-image: url(images/hero-bg.png);">
    <h1></h1>
    <h2>There is something for everyone have a look around</h2>
</div> -->
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
</div>
<?php get_footer(); ?>