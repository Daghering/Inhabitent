<?php get_header(); ?>

<section class = "single-adventure">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content
   while( have_posts() ) :
       the_post(); ?>
       <div class ="adventure-body">
   <?php the_post_thumbnail('large');?>
   </div>
          <section class ="adventure-content"> 
          <h2><?php the_title(); ?></h2>
         <h3> <?php the_author(); ?> </h3> 
         <p> <?php the_content(); ?></p>
          <div class="adventures-links">
       <ul class="adventures-social">
           <button><li><i class="fab fa-facebook-f"></i> Like </li></button>
           <button><li><i class="fab fa-twitter"></i> tweet </li></button>
           <button><li><i class="fab fa-pinterest"></i> pin </li></button>
       </ul>
   </div>
        </section>
   
       
   
   <!-- Loop ends -->
   <?php endwhile;?>
   <?php the_posts_navigation();?>
<?php else : ?>
       <p>No posts found</p>
<?php endif;?>

</section>
<?php get_footer();?>