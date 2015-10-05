<?php get_header(); ?>

<section class="row">
    <div class="eight columns">
        <?php 
        if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();?>
            <p><?php the_time('F j, Y'); ?></p>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); 
                } // end while
            } // end if
        ?>
    </div>

        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
</section>

<?php get_footer(); ?>