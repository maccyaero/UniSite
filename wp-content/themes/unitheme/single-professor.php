<?php get_header();?>
<?php 


while(have_posts()){
    the_post();
    pageBanner('','','https://environmentsdenver.com/wp-content/uploads/2019/07/classroom-design-denver.jpg');
    ?>
    
            
    <ul class="breadcrumb">         <!-- Breadcrumb Navigation -->
        <li><a href="<?php echo get_post_type_archive_link('professor') ;?>">Back to All Professors</a></li>
        <li><?php the_title();?></li>
    </ul>
<!-- Content Section  -->
    <div class="flex-container">
        <div class="logo">
            <?php the_post_thumbnail('professorPotrait');?> 
        </div>
        <div class="nav">
            <?php the_content(); ?>
        </div>
     </div>

    <?php
    //Getting the List of all the subjects taught by the professor.
    $subjectsTaught = get_field('related_program');
    if ($subjectsTaught) {
        echo'<hr>';
        echo '<h2>Related Programs</h2>';
        foreach ($subjectsTaught as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program);?></a></li>
        <?php
        }   
    }    
}

?>
<?php get_footer();?>

