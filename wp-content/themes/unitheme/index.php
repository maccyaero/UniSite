

<?php get_header(); ?>
<div class="banner">
        <h1>Welcome!</h1>
        <h2>We think you'll like it here</h2>
        <h3>Why dont you check out the mojhor you are interested in ?</h3>
        <a href="" class="button blue">Find your major</a>
    </div>
    <?php
        while(have_posts()){
            the_post();?>
            <h1><a href="<?php the_permalink()?>"><?php the_title();?></a></h1>
            <?php the_content();
        }
        get_footer();
    ?>
