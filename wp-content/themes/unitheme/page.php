<?php
    get_header();
        while(have_posts()){
            $title ='';
            $subtitle ='';
            the_post();
            pageBanner($title,$subtitle,'https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');?>
      <?php
        
        $theParent = wp_get_post_parent_id(get_the_id()); 
        if($theParent){ ?>
             <ul class="breadcrumb">
            <li><a href="<?php echo get_permalink($theParent) ;?>">Back to <?php echo get_the_title($theParent);?></a></li>
            <li><a href="<?php echo get_permalink(the_title()) ;?>"><?php the_title(); ?></a></li>
            <li><a href="#">Summer 15</a></li>
            <li>Italy</li>
            </ul>
            <?php   
        }    

        ?>

           <div class="content">
           <div class="content-description">
                
                What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               
            </div>

            <div class="menu">
                <h2><a href="<?php echo get_permalink($theParent) ;?>"><?php echo get_the_title($theParent) ?></a></h2>
                <ul>
                    <?php 
                        if($theParent){
                            $findChildrenOf = $theParent;
                        }else{
                            $findChildrenOf=get_the_id();
                        }
                        wp_list_pages(array(

                            'title_li'=> NULL,
                            'child_of'=>$findChildrenOf
                        ));
                    
                    ?>
                </ul>
            </div>
           </div>

            
                  
            </div>
        <?php }
        get_footer();
    ?>
    