<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sbesnz_theme
 */
?>

</div><!-- #content -->

<footer class="col-lg-12 top-red" id="footer-row">
    <div class="row">
        <div class="col-md-4">
            <h4>SOMETHING ABOUT COMPANY</h4>
            <p><?php
                $qry = new WP_Query('page_id=5');
                if ($qry->have_posts()) : while ($qry->have_posts()) : $qry->the_post();
                        echo wp_trim_words(get_the_content(), 53, '...');
                    endwhile;
                endif;
                ?></p>
        </div>

        <div class="col-md-8">
            <div id="footer-menu">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav nav-pills hidden-xs', 'container' => false)); ?>  
                <ul class="fa-ul">
                    <li><i class="fa fa-facebook-official"></i>facebook</li>
                    <li><i class="fa fa-twitter"></i>Twitter</li>
                    <li><i class="fa fa-linkedin"></i>LinkedIn</li>

                </ul>
            </div>
            <div class="col-lg-12" id="site-info">
                <small>© 2015 Small Business & Employment Solutions New Zealand | Designed by C-Creations</small>
            </div><!-- .site-info -->
        </div>

    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
