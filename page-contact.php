<?php
get_header();
/* Template Name: Contact Page */
?>
<!-- the index.php is assigned to the blog page!!! -->
<!-- our question of the day is if we have any post or pages, show them!!!-->


<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/images/yellowstone-inner.jpg" alt="Yellowstone">
</div>
<!-- end hero -->

<div id="wrapper">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>
<?php the_content() ; ?>
 <?php endwhile ; ?>
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>



</div>
<!-- close wrapper -->



<?php get_footer();
 ?>