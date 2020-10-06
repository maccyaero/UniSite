<?php get_header();?>
<?php  
while(have_posts()){
    the_post();?>
     <div class="banner" style="background-image: url(images/hero-bg.png);">
        <h1><?php the_title();?></h1>
        <h2>We think you'll like it here</h2>
        <h3>Why dont you check out the mojhor you are interested in ?</h3>
        <a href="" class="button blue">Find your major</a>
            </div>
            
             <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/blog') ;?>">Back to Events Home</a></li>
            <li><?php the_title();?></li>

            </ul>

    <?php the_content();
}

?>
<?php get_footer();?>

