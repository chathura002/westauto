<?php
/*
 * Template Name: Testimonials
 * @package sbesnz_theme
 */

get_header();
?> 

<div class="main-container" id="container-wrap">
    <div class="blue-bar margin-maker"><h4>RECENT FEEDBACKS</h4></div>
    <section class="row" id="testimonials">
        <div class="column-wrap">
            <?php query_posts(array('post_type' => 'testimonials', 'post_status' => 'publish', 'showposts' => -1)); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="item-wrap">
                        <div class="test">
                            <?php echo the_content(); ?>
                            <hr>
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(array(64, 64));
                            }
                            ?>   
                            <?php 
                            if (has_post_thumbnail()){?>
                                <span class="deco"><?php echo the_title(); ?></span>
                            <?php }
                            else{?> <span class="deco2"><?php echo the_title(); ?></span><?php }?>
                                                        

                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>