<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<div class="header-nav">
<a href="/inhabitent/"><img class="home-link" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-tent.svg"></a>
<?php wp_nav_menu(array('theme_location' => 'primary'));?>
</div>
<!-- <h1><i class="fas fa-search"></i></h1> -->
<hr/>
<!-- <h1><?php bloginfo('name');?></h1> -->
