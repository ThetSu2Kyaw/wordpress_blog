<?php
/*
Template Name: Blog Page
*/
get_header(); ?>

<div class="container mt-2 mb-2 pt-5 pb-5" id="article-grid">
    <div class="row justify-content-center">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="col-xl-6 col-lg-12 text-center">
            <a href="<?php the_permalink();?>">
            <div class="article-card">
                <?php if(has_post_thumbnail()): ?>
                    <div class="article-img">
                        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>

                <div class="article-meta text-left">
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
            </a>
        </div>
        <?php endwhile; else: endif; ?>
    </div> <!-- Article Grid Row Ends -->
</div>

<?php get_footer(); ?>
