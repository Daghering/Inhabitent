<?php get_header(); ?>
<section class = "journal">
    <div class = "journal-entry">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
   <div>
     <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>
    <h3><?php echo get_the_date() . ' / ';?><?php echo get_comments_number() . ' Comments ' . ' / ' . ' By ';?><?php echo get_the_author()?></h3>

    </div>
    <p><?php echo wp_trim_words(get_the_content(), 50, "[...]"); ?></p>
    <a href="<?php echo get_permalink();?>"> <button class="read-more">READ MORE <i class="fas fa-long-arrow-alt-right"></i></button></a>
    <br /><br />

    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>
<div class = "sidebar"><?php get_sidebar();?></div>
</section>


<?php get_footer();?>