<?php get_header(); ?>
<section class = "taxonomy-products">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <!-- <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    <?php echo "$ " . get_field('price'); ?> -->


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