<?php
// Get three variables, the title, subtitile , background image)
// output html 
function pageBanner($title=null, $subtitle=null,$image=null){
    if(!$title){
        $title = get_the_title();
    }
    if(!$subtitle){
        $subtitle = get_field('page_banner_subtitlle');
    }
    if(!$image){
        $imagearray=get_field('page_banner_background_image');
        if($imagearray){
            $image = $imagearray['sizes']['pageBanner'];
        }else{
            $image=get_theme_file_uri('/images/library-hero.jpg');
        }
    }
    // var_dump($pageBannerImage['sizes']['thumbnail']);
    ?>
    <div class="banner" style="background-image:url(<?php echo $image ;?>);"> <!-- Banner -->
        <h1><?php echo $title;?></h1>         <!-- //Banner Heading  -->
        <h2><?php echo $subtitle; ?></h2>
    </div>
    <?php
}
function university_files(){
    wp_enqueue_script("jquery");
    wp_enqueue_script('main-university-js', '/wp-content/themes/unitheme/js/scripts.js', NULL, microtime(), true );
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-custom-font','https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic');
    wp_enqueue_style('university_main_style',get_stylesheet_uri());
    wp_localize_script('main-university-js','universityData',array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts','university_files');

function university_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); // To enable featured image in the post type 
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPotrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);


}
add_action('after_setup_theme','university_features');


function university_adjust_queries($query) //$query is the universal query object in WOrdpress
{
    //Manipulating Default Query for The Events Post Type to Order by event_date and only show Events happening in the future / Excluding Past Events.
    if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
        $today = date('Ymd');
        $query -> set( 'meta_key', 'event_date');
        $query -> set( 'orderby', 'meta_value_num');
        $query -> set( 'order', 'DSC');
        $query -> set( 'meta_query', array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
    ));
     }
     //Manipulating Default Query for The Programs Post Type to Order by Title in Ascendinf Order and sho all Program Post Types  in one page 
     if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
        $query -> set( 'orderby', 'title ');
        $query -> set( 'order', 'ASC');
        $query -> set( 'posts_per_page', -1);
    }
              
}


add_action('pre_get_posts','university_adjust_queries'); //When Wordpress querries the database based on the URL we want it to run the university_adjust_queries function so we can edit the default querry 

function universityMapKey($api){

    $api['key'] = 'AIzaSyB3eknowYrD6Ddjz00MRXG8YBAiUqGBkus';
    return $api;
}


add_filter('acf/fields/google_map/api','universityMapKey');


?>