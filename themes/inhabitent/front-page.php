<?php get_header(); ?>

<section class = "home-page" >
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
<?php echo category_description($term->term_id);?>
 <a href="<?php echo get_home_url() . '/product-type/' . $term->slug ;?>">
 <button><?php echo $term->name ;?></button></a>
</div>
<?php endforeach; ?>
</div>


<h2>INHABITENT JOURNAL</h2>
 <div class= "inhabitent-journal">
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
    $args = array('numberposts' => 3, 'order'=> 'ASC', 'orderby' =>'date');
    $postslist = get_posts($args);
    // print_r($postslist);
    foreach ($postslist as $post) : setup_postdata($post); ?>
     <div>
    <?php the_post_thumbnail('large');?>
        <?php the_date(); ?>
        <br />
        <?php the_title(); ?>
        <?php echo wp_trim_words(get_the_excerpt(), 10, "..."); ?>
    </div>
 
    <?php endforeach; ?>

    <!-- End of blogs -->

    </div>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


<h2>LATEST ADVENTURES</h2>
<div class = "adventures">
<?php
    $args = array('numberposts' => 4, 'order'=> 'ASC', 'orderby' =>'date');
    $postslist = get_posts($args);
    foreach ($postslist as $post) : setup_postdata($post); ?>
     <div>
    <?php the_post_thumbnail('large');?>
    <?php the_title(); ?>
    <button><?php echo $term->name ;?></button></a>

    </div>
 
    <?php endforeach; ?>

</section>

<?php get_footer();?>