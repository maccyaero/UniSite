
<?php
function create_posttype() {

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
  }
  add_action( 'init', 'create_posttype' );
  ?>