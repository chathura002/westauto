<?php
/*
 * Template Name: Blog
 * @package sbesnz_theme
 */
get_header();
?> 

<div class="main-container" id="container-wrap">
    <section class="row" id="blog-wrapper">
        <ul class="col-md-9 col-md-offset-1" id="blog-ul">
            <?php
            $myposts = get_posts(array('posts_per_page' => -1));
            foreach ($myposts as $post) : setup_postdata($post);
                ?>
                <li>
                    <div class="date-wrapper top-red">
                        <div class="month-wrapper"><?php echo get_the_date('M'); ?></div>
                        <?php echo get_the_date('d'); ?> 
                    </div>
                    <h4><?php the_title(); ?></h4>                  
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail(array(100, 100, 'class' => 'img-responsive'));
                    }
                    ?>
                    <?php echo wp_trim_words(get_the_content(), 100, '...'); ?></br> 
                    <a href="<?php echo get_permalink(); ?>"> Read More...</a>
                </li>
                <?php
            endforeach;
            wp_reset_postdata();
            ?>  
           
        </ul>
        <div class="col-md-2 pull-right">
            <?php get_sidebar(); ?>
        </div>
    </section>
</div>


<?php get_footer(); ?>