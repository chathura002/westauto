<?php
/*
 * Template Name: Services
 * @package sbesnz_theme
 */
get_header();
?> 
<div class="main-container" id="container-wrap">
    <section class="row" id="sbes-services">
        <div class="blue-bar margin-maker" style="margin-top: 0!important;"><h4>SMALL BUSINESS SERVICES</h4></div>
        <?php
        $args = array(
            'post_type' => 'services',
            'post_status' => 'publish',
            'showposts' => -1,
            'tax_query' => array(array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'small-business'
                )),
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="col-md-3" id="service-wrap">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                    <h4><?php echo the_title(); ?></h4>
                    <button type="button" class="btn btn-default" data-container="#popover-wraper" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<?php the_content();?>">
                        Read more
                    </button>
                </div>
                <?php
            endwhile;
        endif;
        ?> 
    </section>
    
    <section class="row" id="sbes-service">
        <div class="blue-bar margin-maker"><h4>EMPLOYMENT SERVICES</h4></div>
        <?php
        $args = array(
            'post_type' => 'services',
            'post_status' => 'publish',
            'showposts' => -1,
            'tax_query' => array(array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'Employment'
                )),
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="col-md-3" id="service-wrap">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                    <h4><?php echo the_title(); ?></h4>
                    <button type="button" class="btn btn-default" data-container="#popover-wraper" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<?php the_content();?>">
                        Read more
                    </button>
                </div>
                <?php
            endwhile;
        endif;
        ?> 
    </section>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('[data-toggle="popover"]').popover({container: 'body'});
    });
</script>

<?php get_footer();?>

