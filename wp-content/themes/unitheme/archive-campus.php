<?php get_header(); ?>


<?php

pageBanner(get_the_archive_title(), "", 'https://future-students.uq.edu.au/sites/default/files/styles/card_image/public/2020-04/campuses-st-lucia-art-museum-courtyard.jpg?h=6acbff97&itok=LhlbYrNm');

?>
<div class="events_archive_content">
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
    <?php }
    ?>

    <?php echo paginate_links(); ?>
    <hr>
    <p>Looking for the past events? Visit our past events archive <a href="<?php echo site_url('/past-events') ?>">here</a></p>

</div>
<?php get_footer(); ?>