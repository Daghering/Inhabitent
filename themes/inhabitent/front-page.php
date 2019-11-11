<?php get_header(); ?>

<!-- <h1><i class="fas fa-air-freshener"></i></h1> -->
<section >
<div class = "banner">
<img class="background" src="<?php echo get_stylesheet_directory_uri();?>/images/home-hero.jpg">
<img class="main-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg">
</div>
<h2>SHOP STUFF</h2>
<div class= "shop-stuff">
<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide-empty' => false,
));
foreach($terms as $term):?>
<div>
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/<?php echo $term->slug;?>.svg">
   <button href="<?php echo "product-type/" . $term->$slug;?>"><?php echo $term->name ;?></button>
</div>

    <?php endforeach; ?>

</div>

<?php if( have_posts( ) ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <!-- <?php the_title();
    the_content();?> -->

      
  
    <?php endwhile;?>

    <?php the_posts_navigation();?>

    <!-- Blog posts -->
    <?php
    $args = array('numberposts' => 5, 'order'=> 'ASC', 'orderby' =>'title');
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

</section>

    
<?php get_footer();?>