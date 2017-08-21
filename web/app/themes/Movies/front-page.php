<?php

    get_header();
    global $post;
    $args = array( 'numberposts' => 100, 'category_name' => 'movie' );
    $posts = get_posts( $args );

?>

<div class="row">
    
    <?php foreach( $posts as $post ){ 
        $movie_title =get_the_title(); // movie post title
        $movie_id=get_the_id(); // movie post id
        
    
    ?>
   <div class="col s12 m3"> 
          <?php // get movie post image
                if ( get_field("image")!=''  ) { ?>
                    <div class="valign-wrapper"><img src="<?php the_field("image"); ?>" /> </div>
                <?php }  ?>
           
       <a href="<?php echo get_permalink($movie_id); ?>"><p class="name"><?php echo get_the_title($movie_id); ?></p></a>
        
    </div>    
       
 <?php    }  ?>
 </div>
