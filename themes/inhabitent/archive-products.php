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
<section class= "products">

   
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class= product-posts>
    <?php the_post_thumbnail('large');?>
     <div>
    <h2><?php the_title(); ?></h2>
    <hr />
    <?php echo "$ " . get_field('price'); ?>
    </div>
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>

    
<?php get_footer();?>