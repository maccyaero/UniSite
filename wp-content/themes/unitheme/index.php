<?php get_header();?>

<?php 

pageBanner('Welcome to our blog','Keep up with our latest news','https://dorcasthewriter.files.wordpress.com/2012/12/blog-background.jpg');

?>

<div class="">
    <?php 
        while(have_posts()){
            the_post();
            ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h3>
                <div class = "meta-data">
                    <p>Written by <?php echo get_the_author();?> on <?php the_time('Y') ?> in <?php the_category(', '); ?></p>
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