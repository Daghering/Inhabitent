<?php get_header(); ?>
<section class = "single-journal">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <div class = "single-journal-content">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>
    <?php the_content(); ?>
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<div class = "sidebar"><?php get_sidebar();?></div>

</section>

    
<?php get_footer();?>