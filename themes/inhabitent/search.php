<?php get_header(); ?>
<section class="find-us">
    
    <section class = "find-us-content">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
<div class = "sidebar">
<?php get_sidebar();?>
</div>

</section>



<?php get_footer();?>