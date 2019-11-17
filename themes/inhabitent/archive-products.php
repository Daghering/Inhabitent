<?php get_header(); ?>

<h1 class="shop-stuff-title">SHOP STUFF</h1>

<?php $terms = get_terms( array(
   'taxonomy' => 'product-type',
   'hide_empty' => false,
));?>
<div class="links">
<?php
foreach ($terms as $term):?>
<a href="<?php echo get_home_url() . '/product-type/' . $term->slug ;?>"> <?php echo $term->name ;?></a>
<?php endforeach;?>
</div>

<hr style="border: 1px dashed lightgrey" />
<section class= "products">

   
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class= product-posts>
    <a href="<?php echo get_permalink();?>">  

    <?php the_post_thumbnail('large');?>
   <figcaption>
    <hr>
     <div class = "title-price">  
    <h2><?php the_title(); ?></h2>
    <h2><?php echo "$ " . get_field('price'); ?></h2></a>
    </div>
    </figcaption>

    </div>


    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>

    
<?php get_footer();?>