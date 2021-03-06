<?php get_header(); ?>
<section class="search-grid">

<section class="search-content">

<h4>Search results for: </h4>

<hr>

<?php if( have_posts() ) :
 
    while( have_posts() ) :
        the_post(); ?>
    
    <h1><?php the_title(); ?></h1>
    <p><?php echo wp_trim_words(get_the_content(), 50, ' [...]');?></p>
    <section>
    <a href="<?php echo get_permalink();?>"><button>Read more <i class="fas fa-long-arrow-alt-right"></i></button></a>
    </section>
    
    
   
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<hr>

<section class="search-button">
    <button id="grey-button" class="search-button">1</button>
    <button class="search-button">2</button>
    <button class="search-button">Next  <i class="fas fa-long-arrow-alt-right"></i></button>
</section>

</section>

<div class = "sidebar">
<?php get_sidebar();?>
</div>

</section>



<?php get_footer();?>