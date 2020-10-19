
<?php
function create_posttype() {

  //Campus Post Type
  register_post_type( 'campus',
  array(
    'supports' => array('title','editor','excerpt' ),
    'labels' => array(
      'name' => __( 'Campuses' ),
      'singular_name' => __( 'Campus' ),
      'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => "All Campuses"
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'campuses'),
    'menu_icon'=>'dashicons-location-alt'
  )
);

    //Event Post Type
    register_post_type( 'uni_event',
      array(
        'supports' => array('title','editor','excerpt' ),
        'labels' => array(
          'name' => __( 'Events' ),
          'singular_name' => __( 'Event' ),
          'add_new_item' => 'Add New Event',
          'edit_item' => 'Edit Event',
          'all_items' => "All Events"
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'event'),
        'menu_icon'=>'dashicons-calendar'
      )
    );
    //Program Post Type
    register_post_type( 'program',
    array(
      'supports' => array('title','editor' ),
      'labels' => array(
        'name' => __( 'Programs' ),
        'singular_name' => __( 'Program' ),
        'add_new_item' => 'Add New Program',
        'edit_item' => 'Edit Program',
        'all_items' => "All Programs"
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'programs'),
      'menu_icon'=>'dashicons-awards'
    )
  );
    //Professor Post Type

  register_post_type( 'professor',
    array(
      'supports' => array('title','editor','thumbnail'), 
      'labels' => array(
        'name' => __( 'Professors' ),
        'singular_name' => __( 'Professor' ),
        'add_new_item' => 'Add New Professor',
        'edit_item' => 'Edit Professor',
        'all_items' => "All Professors"
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'professors'),
      'menu_icon'=>'dashicons-welcome-learn-more'
    )
  );
  }
  add_action( 'init', 'create_posttype' );
  ?>