<?php get_header(); ?>

<section class = "single-adventure">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content
   while( have_posts() ) :
       the_post(); ?>
       <div class ="adventure-body">
   <?php the_post_thumbnail('large');?>
   </div>
   <h2><?php the_title(); ?></h2>
   

          <section class ="adventure-content"> 
         <h3> <?php the_author(); ?> </h3> 
          <?php the_content(); ?></section>
   <div class="adventures-links">
       <ul class="adventures-social">
           <li><i class="fab fa-facebook-f"></i> Like </li>
           <li><i class="fab fa-twitter"></i> tweet </li>
           <li><i class="fab fa-pinterest"></i> pin </li>
       </ul>
   </div>
       
   
   <!-- Loop ends -->
   <?php endwhile;?>
   <?php the_posts_navigation();?>
<?php else : ?>
       <p>No posts found</p>
<?php endif;?>

</section>
<?php get_footer();?>