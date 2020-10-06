
<?php
function create_posttype() {
    register_post_type( 'uni_event',
      array(
        'supports' => array('title','editor','excerpt','custom-fields'),
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
  }
  add_action( 'init', 'create_posttype' );
  ?>