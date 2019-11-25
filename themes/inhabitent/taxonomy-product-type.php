<?php get_header(); ?>
<div class="taxonomy-product-type-header">

<?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$phrase  = $term->slug;
$healthy = ("STUFF");
$yummy   = ("");
$output = str_replace($healthy, $yummy, $phrase);?>

<h1><?php echo $output;?></h1>
<?php echo category_description($term->term_id);?>

</div>

<hr style = "border: 1px dashed lightgrey;">

<section class = "taxonomy-products">
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
    <h2 id = "taxonomy-products-name"><?php echo "$ " . get_field('price'); ?></h2></a>
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