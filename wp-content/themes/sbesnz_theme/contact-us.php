<?php
/*
 * Template Name: Contact Us
 * @package sbesnz_theme
 */

get_header();
?> 
<div class="main-container" id="container-wrap">
    <!--Map-->
    <?php query_posts(array('post_type' => 'contact', 'post_status' => 'publish', 'showposts' => -1)); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="row" id="contact-map">
                <?php echo get_post_meta($post->ID, "google-map", true); ?>
            </section><!--end of map section-->
            <!--Contact Details-->
            <section class="row">
                <div class="col-md-3">
                    <h3>CONTACT US</h3>
                    <p><?php echo get_post_meta($post->ID, "address-christchurch", true); ?></p>
                    <p><?php echo get_post_meta($post->ID, "phone", true); ?></p>
                    <p><?php echo get_post_meta($post->ID, "email", true); ?></p>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>

        <div class="col-md-9">
            <?php echo do_shortcode('[contact-form-7 id="95" title="Contact Form"]'); ?>
        </div>
    </section>


</div>

<?php get_footer(); ?>