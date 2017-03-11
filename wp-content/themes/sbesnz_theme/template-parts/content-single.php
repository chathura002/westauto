<?php
/**
 * Template part for displaying single posts.
 *
 * @package sbesnz_theme
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php // the_title( '<h1 class="entry-title">', '</h1>' );  ?>
            <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail(array(350, 350, 'class' => 'img-responsive'));
                    }
                    ?>
            <div class="entry-meta">
                <?php sbesnz_theme_posted_on(); ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'sbesnz_theme'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php // sbesnz_theme_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </article><!-- #post-## --> 


