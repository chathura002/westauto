<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbesnz_theme
 */
get_header();
?>

<div class="main-container" id="container-wrap">
    <!--section-1 services, category- small business-->
    <div class="blue-bar margin-maker" style="margin-bottom: 0px;"><h4>Welcome to West Auto</h4></div>
    <p class="text-center inro">We are a complete one stop solution for your needs on Automotive Collision repairs (Insurance & Private),<br> Repair Certification, Panel beating, Painting and touch-ups, Rust repairs,<br> Mechanical repairs and Diagnosing & Electrical repairs.</p>
    <section class="row">
        <?php
        $args = array(
            'post_type' => 'services',
            'post_status' => 'publish',
            'showposts' => -1,
            'orderby' => 'post_date',
            'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        //var_dump($loop);
        //echo get_post_meta($post->ID, "email", true); 
        if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();?>
                <div class="col-sm-6 col-md-3" id="service-wrap">
                    <?php echo wp_get_attachment_image(get_post_meta($post->ID, "home_image", true))?>
                    <h4><?php echo the_title(); ?></h4>
                    <?php echo get_post_meta($post->ID, "summery", true);?>
<!--                    <p><?php echo the_excerpt(); ?></p>-->
<!--                    <a href="<?php echo get_permalink(); ?>"> Read More...</a>-->
                </div>
                <?php
            endwhile;
        endif;
        ?> 
    </section><!--end of section-1-->
    <!--section-2 Testimonials-->
    <div class="blue-bar margin-maker"><h4>RECENT FEEDBACKS</h4></div>
    <section class="row">
        <?php
        $args = array(
            'post_type' => 'testimonials',
            'post_status' => 'publish',
            'showposts' => 2);
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="col-md-6" id="testimonial-wrap">
                    <div class="col-md-3">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail( array('class' => 'img-responsive'));
                        }
                        else{?>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/default_thumbnail.gif" class="img-responsive">
                        <?php }
                        ?>
                    </div>
                    <div class="col-md-9">
                        <?php echo the_excerpt(); ?>
                        <div class="col-md-12" id="title-name"><h5><?php echo the_title(); ?></h5></div>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </section><!--end of section-3-->
    <!--section-3.1 Partners-->
<!--    <section class="row">
        <div class="blue-bar margin-maker"><h4>OUR PARTNERS</h4></div>
        <div class="col-md-12">
            
        </div>
    </section>end of section-3.1 Partners-->
<!--section-4 Blog post-->
<!--    <section class="row">
        <div class="blue-bar margin-maker"><h4>RECENT BLOG POST</h4></div>
        <?php
        $postslist = get_posts('numberposts=4&order=DESC&orderby=date');
        foreach ($postslist as $post) {
            setup_postdata($post);
            ?>
            <div class="col-md-3 col-xs-6" id="blog-wrap">
                <?php
                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('medium');
                }
                ?>
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php echo get_permalink(); ?>"> Read More...</a>
            </div>
        <?php } ?>
    </section>end of section-4-->
</div><!--end of main container-->

<?php get_footer(); ?>
