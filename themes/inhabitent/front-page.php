<?php get_header(); ?>

<section class = "home-page" >

    <section>
<div class = "banner">
<img class="background" src="<?php echo get_stylesheet_directory_uri();?>/images/home-hero.jpg">
<img class="main-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg">
</div>
</section>

<section>
<h2>SHOP STUFF</h2>
<div class= "shop-stuff">
<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide-empty' => false,
));?>
<?php foreach($terms as $term):?>

<div>
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/<?php echo $term->slug;?>.svg">
<?php echo category_description($term->term_id);?>
 <a href="<?php echo get_home_url() . '/product-type/' . $term->slug;?>">
 <button><?php echo $term->name ;?></button></a>
</div>

<?php endforeach; ?>

</div>
</section> 

<section>
<h2>INHABITENT JOURNAL</h2>
 <div class= "inhabitent-journal">
<?php if( have_posts( ) ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <!-- <?php the_title();
    the_content();?> -->

      
  
    <?php endwhile;?>

    <?php the_posts_navigation();?>

    <!-- Blog posts -->
    <?php
    $args = array('numberposts' => 3, 'order'=> 'DSC', 'orderby' =>'date');
    $postslist = get_posts($args);
    // print_r($postslist);
    foreach ($postslist as $post) : setup_postdata($post); ?>
     <section class="journal-div">
    <?php the_post_thumbnail('large');?>
    <div>
    <?php echo get_the_date() . ' / ';?><?php echo get_comments_number() . ' Comments ';?>
        <br />
        <h3><?php the_title(); ?></h3>
   
    <section>
    <a href="<?php echo get_permalink();?>"><button>Read entry</button></a>
    </section>

    </div>
    </section>
    <?php endforeach; ?>

    <!-- End of blogs -->

    </section>
    

    <h2>LATEST ADVENTURES</h2>
<section class = "adventures-frontpage">


<?php
    $args = array('numberposts' => 4, 'post_type' => 'adventures', 'order'=> 'ASC', 'orderby' =>'date');
    $postslist = get_posts($args);
    foreach ($postslist as $post) : setup_postdata($post); ?>
     <section class="adventures-homeposts">
         <div>
    <?php the_post_thumbnail('large');?>
    <p><?php the_title(); ?></p>
   
    <a href="<?php echo get_permalink();?>"><button>Read More</button></a>
   
    </div>
    
    </section>
    
    <?php endforeach; ?>
   
</section>

<section class = "more-adventures-button">
    <a href="<?php echo get_home_url() . '/adventures/';?>"><button>More adventures</button></a>
    </section>

   

    <?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    </section>



<?php get_footer();?>