<?php get_header(); ?>

<!-- <h1><i class="fas fa-air-freshener"></i></h1> -->

<section class = "banner">
<img class="background" src="images/home-hero.jpg" width="100%" height="100%">
       <img class="main-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg" >

</section>

<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide-empty' => false,
));
foreach($terms as $term):?>
   <a href="<?php echo "product-type/" . $term->$slug;?>"><?php echo $term->name ;?></a>
    <?php endforeach; ?>

    

<?php if( have_posts( ) ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <?php the_title();
    the_content();?>

      
  
    <?php endwhile;?>

    <?php the_posts_navigation();?>

    <!-- Blog posts -->
    <?php
    $args = array('numberposts' => 3, 'order'=> 'ASC', 'orderby' =>'title');
    $postslist = get_posts($args);
    // print_r($postslist);
    foreach ($postslist as $post) : setup_postdata($post); ?>
    <div>
        <?php the_date(); ?>
        <br />
        <?php the_title(); ?>
        <?php echo wp_trim_words(get_the_excerpt(), 10, "..."); ?>
    </div>
 
    <?php endforeach; ?>

    <!-- End of blogs -->



<?php else : ?>
        <p>No posts found</p>
<?php endif;?>



    
<?php get_footer();?>