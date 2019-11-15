<?php get_header(); ?>
<?php the_posts_navigation();?>

<div class="adventure-title">
   <h2>Latest Adventures</h2>
</div>
<div class="adventures-container">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content
   while( have_posts() ) :
       the_post(); ?>
<div class="adventures-posts">
   <p><?php the_title(); ?></p>
   <?php the_post_thumbnail('large');?>
   <a href="<?php the_permalink(); ?>" class="btn-transparent-btn">Read more</a>
</div>
   <?php endwhile;?>
<?php else : ?>
       <p>No posts found</p>
<?php endif;?>
</div>
<?php get_footer();?>
