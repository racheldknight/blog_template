<?php get_header(); ?>

    <section class="row">
        <div class="eight columns">
        <!-- BEGIN PAGE PHP -->

                    <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                            <p><?php the_date(); ?></p>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();
                        endwhile;
                    endif; ?>

        <!-- END PAGE PHP -->
        </div>

        <!-- SIDEBAR -->
        <div class="four columns">
            <?php dynamic_sidebar('first-widget'); ?>
        </div>

    </section>

<?php get_footer(); ?>