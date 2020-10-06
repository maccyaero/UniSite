<?php get_header();?>


<div class="banner" style="background-image: url(images/hero-bg.png);">
    <h1><?php the_archive_title(); ?></h1>
    <h2><?php the_archive_description(); ?></h2>
</div>
<div class="">
    <?php 
        while(have_posts()){
            the_post();
            ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h3>
                <div class = "meta-data">
                    <p>Written by <?php echo get_the_author_link();?> on <?php the_time(Y) ?> in <?php the_category(', '); ?></p>
                </div>
                <div>
                    <?php  the_excerpt();?>
                </div>
                <br>
       <?php }  
    ?>
    
<?php echo paginate_links();

;?>
</div>
<?php get_footer(); ?>