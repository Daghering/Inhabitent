<?php get_header(); ?>
<?php the_posts_navigation();?>

<div class="adventure-title">
   <h2>Latest Adventures</h2>
</div>
<section class="adventures-container">


<?php
    $args = array( 'numberposts' => 4, 'post_type' => 'adventures', 'order' => 'ASC', 'orderby' => 'date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>

<div class="adventures-posts">
    <div>
   <?php the_post_thumbnail('large');?>
   <p><?php the_title(); ?></p>

   <section>
   <a href="<?php the_permalink(); ?>" class="btn-transparent-btn">READ MORE</a>
   </section>
   </div>

</div>

   <?php endforeach;?>

</section>
<?php get_footer();?>
