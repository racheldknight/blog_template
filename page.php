<?php get_header(); ?>

    <section class="row">
        <div class="eight columns">
        <!-- BEGIN PAGE PHP -->
                    <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_post_thumbnail(); ?>
                            <?php the_content();
                        endwhile;
                    endif; ?>
        <!-- END PAGE PHP -->
        </div>

        <div class="four columns">
            <?php dynamic_sidebar('first-widget'); ?>
        </div>
    </section>

<?php get_footer(); ?>