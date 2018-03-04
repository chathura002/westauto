<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sbesnz_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!-- top red bar and content -->
        <div class="top-red">
            <div class="row" id="top-red-wrap">
                <?php
                wp_reset_query();
                query_posts(array('post_type' => 'contact', 'post_status' => 'publish', 'showposts' => -1));
                if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <div class="col-sm-4 col-md-4 text-left"><a href="mailto:<?php echo get_post_meta($post->ID, "email", true); ?>" target="_top"><i class="fa fa-paper-plane fa-fw"></i><?php echo get_post_meta($post->ID, "email", true); ?></a></div>
                        <div class="col-sm-4 col-md-4 text-center"><a href="//www.google.co.nz/maps/place/58+Bruce+Mclaren+Rd,+Henderson,+Auckland+0612/@-36.894817,174.6263616,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d41bfa0bf6b43:0xe53ab2fd7b71b887!8m2!3d-36.894817!4d174.6285503?hl=en" target="blank"><i class="fa fa-map-marker fa-fw"></i><?php echo get_post_meta($post->ID, "address-auckland", true); ?></a></div>
                        <div class="col-sm-4 col-md-4 text-right"><i class="fa fa-phone fa-fw"></i><?php echo get_post_meta($post->ID, "phone", true); ?></div>
                        <?php
                    endwhile;
                endif;
                ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>

        <!--master navigation and header-->
        <header class="navbar navbar-default">
            <div class="row">
                <!--                    <div class="col-sm-6">-->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                        <img alt="Brand" src="<?php echo get_bloginfo('template_directory'); ?>/images/west-auto-logo.png" class="img-responsive">
                    </a>
                    <!--                        </div>-->
                    <!--                        <div class="col-sm-6">-->
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--                        </div> -->
                </div>                    
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation"> 
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right navbar-center', 'container' => false)); ?> 
                </nav>

            </div>  
        </header>
        <!--end of header-->

        <!--slider-->
        <div class="col-lg-12" style="padding: 0 !important;">
            <?php echo do_shortcode("[smartslider3 slider=2]"); ?>
        </div>
        <!--slider ends-->
