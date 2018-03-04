<?php
/*
 * Template Name: AboutSBESNZ
 * @package sbesnz_theme
 */

get_header();
?> 
<div class="main-container" id="container-wrap">
    <div class="col-md-9">
        <section class="row" style="margin-top: 20px;">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </section>
        <div class="blue-bar margin-maker"><h4>OUR WORK</h4></div>
        <section class="row">
            <?php echo do_shortcode("[smartslider3 slider=3]"); ?>
        </section>
    </div>
    <div class="col-md-3">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
