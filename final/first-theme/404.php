<?php get_header() ; ?>
<!-- our question of the day is If we have any posts or pages, show them!-->

<div id="wrapper">
    <!-- add wrong page imgage -->
<main>
<h2>This is somewhat embarrassing, isn't it?</h2>
<p>It looks like nothing was found in this location! Maybe try a different search?</p>
<?php get_search_form(); ?>
<h3>Or, please feel free to browse our pages</h3>
<?php wp_list_pages(); ?>
</main>

<aside>
This is my 404 page!
</aside>



</div> <!--close wrapper-->

<?php get_footer(); ?>