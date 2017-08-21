<?php 
// get the movie data 
global $posts;
$currentmovie;
echo $currentmovie->ID;

//$wp_query->movie ;
//$movie_id = $movie->ID ;

$posts = get_posts([
  'post_type' => 'articles',
  'post_status' => 'publish',
  'numberposts' => -1
  // 'order'    => 'ASC'
]);/*
// get the movie article post 
 foreach($posts as $art) {
     $article_title =get_the_title(); // movie post title
    $article_id=get_the_id();// movie post id
    
    if($article_title == get_the_title($movie_id)){$atricle = $art;break; }
}
 
  

/*




$movie_img = get_field('image') ; 
$movie_rdate = get_field('release_date') ; 
$movie_budget = get_field('budget') ;
$movie_profit = get_field('profit') ;
$movie_gross = get_field('gross') ;
$movie_language = get_field('_language') ;

// Article 
$content = get_post_field('post_content', $article_id);

get_post_field('post_content', $post_id);
$art_body= get_post_field('post_content', $article_id);
$art_author= get_post_field( 'post_author', $article_id ); 
$art_pdate=get_the_time('Y-m-d', $article_id);


$required_post = get_post($article_id); // getting all information of post 
$content = $required_post->post_content; //get the post content
echo $content;

?>
<div class="row">
    <div class="col m4 s12">
        <h2> <?php the_title($movie_id); ?></h2>
        <?php if ( get_field("image")!=''  ) { ?>
                    <div class="valign-wrapper"><img src="<?php the_field("image"); ?>" /> </div>
        <?php }  ?>
      </div>
    <div class="col m8 s12">
        <ul  class="movie">
            <li><h5>Published Date: </h5><p><?php echo $art_pdate ; ?> </p></li>
            <li><h5>Author: </h5><p><?php echo $art_author ; ?> </p></li>
        </ul>
       
         <ul class="movie">      
            
            <li><h5>Release Date</h5><p<?php echo $movie_rdate ; ?> > </p></li>
            <li><h5>movie Budget: </h5><p><?php echo $movie_budget . "$"; ?> </p></li>
            <li><h5>movie Profit: </h5><p><?php echo $movie_profit . "$"; ?> </p></li>
            <li><h5>movie gross: </h5><p><?php echo $movie_profit . "$" ; ?>  </p></li>
            <li><h5>movie language: </h5><p><?php echo $movie_profit; ?>  </p></li>
            
        </ul>
        
        <p class="summ"><?php echo $art_excerpt ;  ?></p>
        <p class="body"><?php echo do_shortcode( $content ); ?></p>
     
       </div>
</div>*/