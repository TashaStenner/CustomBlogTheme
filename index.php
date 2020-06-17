<?php get_header(); ?>

<?php 
while (have_posts()) {
    the_post(); 
?>
<div class="single-post">
    <h2> <?php the_title(); ?> </h2> 
    <p>
        <?php
           the_content('<span class="moretext">Continue reading...</span>' ) 
        ?>
    </p>
</div>

<?php
    }
?>

<?php get_footer(); ?>