<?php get_header(); ?>

<h1>SHOP STUFF</h1>
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