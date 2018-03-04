<?php
/*
 * Template Name: Services
 * @package sbesnz_theme
 */
get_header();
?> 
<div class="main-container" id="container-wrap">
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
    $x = 0;
    if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="blue-bar margin-maker" style="margin-top: 0!important;"><h4><?php echo the_title(); ?></h4></div>
            <div class="col-md-12">
                <?php if ($x % 2 == 0) { ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); //var_dump($image)?>
            <!--                    <section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>">
                            <div class="row" id="sbes-services">
                                <span class="col-xs-12 col-sm-7"><?php the_content(); ?></span>
                            </div>
                        </section>-->
                    <section class="row" id="sbes-services">
                        <div class="col-xs-12 col-sm-7"><?php the_content(); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-push-1">
                            <div class="img-container">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </div>
                        </div>
                    </section>
                <?php } else { ?>
                    <section class="row" id="sbes-services">
                        <div class="col-xs-12 col-sm-7 col-sm-push-5"><?php the_content(); ?></div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-7">
                            <div class="img-container">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </div>
                        </div>
            <!--                    <p class="img-container"></p>-->
                    </section>
                <?php } ?>
            </div>
            <?php
            $x++;
        endwhile;
    endif;
    ?> 
</div>
<?php get_footer(); ?>
<script>

</script>
