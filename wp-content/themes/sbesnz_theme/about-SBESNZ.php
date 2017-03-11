<?php
/*
 * Template Name: AboutSBESNZ
 * @package sbesnz_theme
 */

get_header();
?> 
<div class="main-container" id="container-wrap">
    <section class="row">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </section>
    
    <section class="row">
        <div class="blue-bar margin-maker"><h4>OUR TEAM</h4></div>
        <?php
        $args = array(
            'post_type' => 'team',
            'post_status' => 'publish',
            'showposts' => -1);
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
                ?>
                        <div class="col-md-6" id="testimonial-wrap">
                    <div class="col-md-3">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail( array('class' => 'img-responsive'));
                        }
                        ?>
                    </div>
                    <div class="col-md-9">
                        <div class="col-md-12" id="title-name"><h5><?php echo the_title(); ?></h5></div>
                        <?php echo the_content(); ?>
                        
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </section>
</div>

<?php get_footer(); ?>
