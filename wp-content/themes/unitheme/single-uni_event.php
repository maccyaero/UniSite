<?php get_header();?>
<?php  
while(have_posts()){
    the_post();?>
<?php 

pageBanner();

?>
            
             <ul class="breadcrumb">
            <li><a href="<?php echo get_post_type_archive_link('uni_event') ;?>">Back to Events Home</a></li>
            <li><?php the_title();?></li>

            </ul>

    <?php the_content();
    //Getting the List of all the related programs for the Event.
    $relatedPrograms = get_field('related_program');
    if ($relatedPrograms) {
        echo'<hr>';
        echo '<h2>Related Programs</h2>';
        foreach ($relatedPrograms as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program);?></a></li>
        <?php
        }   
    }
    
   
}

?>
<?php get_footer();?>

