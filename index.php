<?php get_header(); ?>


<?php query_posts('post_type=post&post_status=publish&posts_per_page=8&paged='. get_query_var('paged')); ?>

<section class="row">
    <div class="eight columns">
        <!-- BEGIN PAGE PHP -->
                    <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?>
                            <p><?php the_date(); ?></p>
                            <h4><?php the_title(); ?></h4>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <?php the_excerpt(); ?>
                        <?php endwhile; ?>

                        <!-- Navigation -->
                        <div class="nav">
                            <span class="newer"><?php previous_posts_link(__('<< Newer', 'example')) ?></span>
                            <span class="older"><?php next_posts_link(__('Older >>', 'example')) ?></span>
                        </div>
                    <?php endif; 
                        wp_reset_query();
                    ?>
    </div>

        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
</section>

<?php get_footer(); ?>