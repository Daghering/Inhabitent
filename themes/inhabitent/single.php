<?php get_header(); ?>
<section class = "single-journal">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <div class = "single-journal-content">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>
    <p><?php the_content(); ?></p>
    <div class="single-journal-tags">
    <p>POSTED IN <i class="fas fa-long-arrow-alt-right"></i><span> CONTESTS</span></p>
    <p>TAGGED <i class="fas fa-long-arrow-alt-right"></i><span> PHOTOGRAPHY, VANS</span></p>
    </div>
    <ul class="adventures-social">
           <button><li><i class="fab fa-facebook-f"></i> Like </li></button>
           <button><li><i class="fab fa-twitter"></i> tweet </li></button>
           <button><li><i class="fab fa-pinterest"></i> pin </li></button>
       </ul>
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