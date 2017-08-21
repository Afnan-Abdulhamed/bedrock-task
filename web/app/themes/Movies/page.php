<?php global $post;
$args = array( 'numberposts' => 10, 'category_name' => 'movie' );
$posts = get_posts( $args );

?>
<div class="row">
    
    <?php foreach( $posts as $post ){ 
    $movie_id =get_the_title();
    ?>
        <div class="col s12 m3"> 
            <img src="">
            <a target="_blank" href="singlemovie.php">trhjbghjrbg</a> 
          <?php echo'<a target="_blank" href="singlemovie.php?movie_id='.$movie_id.'">' ;the_title(); echo '</a>';   ?>
        </div>
 <?php    }  ?>
<?php