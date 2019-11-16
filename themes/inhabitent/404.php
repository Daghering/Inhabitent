<?php get_header(); ?>
<section class = "error">
 <section class ="error-content">
<div class ="error-message">
<h1>OOPS! THAT PAGE CAN'T BE FOUND</h1>
<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
</div>

<input type="text" placeholder="Type and hit enter...">


<div class="error-posts">

<h2>RECENT POSTS</h2>

<?php 
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
 
    <!-- Posts Loop -->
<ul> 
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( "Sorry, no posts matched what you are looking for." ); ?></p>
<?php endif; ?>
</div>

<div class="error-categories">

<h2>MOST USED CATEGORIES</h2>

<ul>
    <?php wp_list_categories( array(
        'orderby'            => 'name',
        'show_count'         => true,
        'title_li' =>  ''
    ) ); ?>
</ul>

</div>

<divc class="error-archives">
    <h2>Archives</h2>
    <p>Try looking into the monthly archives. 🙂</p>

    <div class="options">
          <select class="error-menu">
            <option value="">Select Month</option>
            <option value="november">April 2016</option>
            <option value="november">March 2016</option>
          </select>
    </div>

</div>

</div>

</section>   

<div class="sidebar">
<?php get_sidebar();?>
</div>
</section>
<?php get_footer();?>