<?php get_header() ;
/* Template Name: About Page */
?>

<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images-final/header-home.jpg"  alt="header-home">

</div> <!--end hero-->

<div id="wrapper">
<main>

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post() ; ?>
<?php the_content() ; ?>

<?php endwhile ; ?> 
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif ; ?>
</main>

<aside id="secondary"  class="widget-area">
<?php dynamic_sidebar('sidebar-about'); ?>
</aside>




</div> <!--close wrapper-->

<?php get_footer(); ?>