<?php
/*
 * Template Name: Registration
 * @package sbesnz_theme
 */
get_header();
?> 

<div class="main-container" id="container-wrap">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content();?>
            <?php
        endwhile;
    endif;
    ?>
</div>
<?php get_footer();?>
