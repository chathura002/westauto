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
        <div class="col-lg-12 top-red">
            <div class="row" id="top-red-wrap">
                <div class="col-md-9 hidden-xs">
                    <?php
                    wp_reset_query();
                    query_posts(array('post_type' => 'contact', 'post_status' => 'publish', 'showposts' => -1));
                    if (have_posts()) : while (have_posts()) : the_post();
                            ?>
                            <div class="col-md-4 col-sm-4"><i class="fa fa-phone fa-fw"></i><?php echo get_post_meta($post->ID, "phone", true); ?></div>
                            <div class="col-md-4 col-sm-4"><a href="mailto:<?php echo get_post_meta($post->ID, "email", true); ?>" target="_top"><i class="fa fa-paper-plane fa-fw"></i><?php echo get_post_meta($post->ID, "email", true); ?></a></div>
                            <div class="col-md-4 col-sm-4"><i class="fa fa-map-marker fa-fw"></i><?php echo get_post_meta($post->ID, "address-christchurch", true); ?></div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                    <?php wp_reset_query(); ?>
                </div>
                <div class="col-md-3 pull-text"><a href="<?php echo get_bloginfo('name'); ?>/register-with-us"><i class="fa fa-file-text fa-fw"></i>REGISTER HERE</a></div>
            </div>
        </div>

        <!--master navigation and header-->
        <header class="navbar navbar-default">
            <div class="row">
<!--                    <div class="col-sm-6">-->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                                <img alt="Brand" src="<?php echo get_bloginfo('template_directory'); ?>/images/logoV6.png" class="img-responsive">
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
            <?php echo do_shortcode('[crellyslider alias="main_slider"]'); ?>
        </div>
        <!--slider ends-->
        <div class="col-lg-12 blue-bar">
            <div class="row">
                <?php
//                $a = $_SERVER["REQUEST_URI"]; 
//                $b = str_replace('/SBESNZ/','',$a);
//                $c = str_replace('/','',$b);
                $postid = url_to_postid($_SERVER["REQUEST_URI"]);
                ?>
                <?php
                if ($postid == 0) {
                    ?>
                    <h1>This is my home</h1>
                    <?php
                } else if ($postid != 0) {
//                    the_title('<h1>&ldquo;', '&rdquo;</h1>');
                    ?>
                    <h1>&ldquo;<?php echo get_the_title($postid); ?>&rdquo;</h1> 
                <?php }
                ?>
            </div>
        </div>
