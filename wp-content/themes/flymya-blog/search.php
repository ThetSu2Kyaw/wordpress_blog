<?php get_header(); ?>

<?php
    if (is_search()) {
        // Handle search query
        $search_query = get_search_query();
        $args = array(
            's' => $search_query,
            'post_type' => 'any', // Adjust as necessary to limit post types
        );
        $search = new WP_Query($args);

        if ($search->have_posts()) : ?>
            <div class="container mt-2 mb-2 pt-5 pb-5" id="article-grid">
	            <div class="row justify-content-center">
                    <h2><?php printf(__('Search Results for: %s', 'textdomain'), '<span>' . esc_html($search_query) . '</span>'); ?></h2> 
                </div>
            </div>

            <!-- Article Grid -->
            <?php get_template_part('includes/section', 'article'); ?>
            <!-- Article Grid Container Ends -->

        <?php else : ?>

            <div class="container mt-2 mb-2 pt-5 pb-5" id="article-grid">
	            <div class="row justify-content-center text-center">
                    <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'textdomain'); ?></p>
                </div>
            </div>

        <?php endif;

        wp_reset_postdata();
    } else {
        // Your regular homepage content
        ?>
        <!-- hero section -->
        <?php get_template_part('includes/section', 'hero'); ?>
        <!-- hero ends -->

        <!-- Article Grid -->
        <?php get_template_part('includes/section', 'article'); ?>
        <!-- Article Grid Container Ends -->
    <?php } ?>

    </main>
</div>

<!-- Footer section  -->
<?php get_footer(); ?>