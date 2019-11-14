<?php get_header(); ?>

<section class = "single-products-grid">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class ="single-product-image">
    <?php the_post_thumbnail('large');?>
    </div>
    <div class = "single-product-description">
    <h2><?php the_title(); ?></h2>
    <span><?php echo "$ " . get_field('price'); ?></span>
    <?php the_content(); ?>
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
    
<?php get_footer();?>