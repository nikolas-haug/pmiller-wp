<?php get_header(); ?>

<div class="comm-single__container">

    <div class="comm-single__sub-container">

        <div class="comm-single__header">
            <h1>Single Commercial</h1>
        </div>

        <?php while(have_posts()) : the_post(); ?>

        <div class="comm-single__content">
            <div class="comm-single__content-media">
                <!-- Video goes here -->
                <?php the_content(); ?>
            </div>
            <div class="comm-single__content-meta">
                <div class="comm-single__meta-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="comm-single__meta-excerpt">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    
        <?php endwhile; wp_reset_query(); ?>

    </div>

</div>

<?php get_footer(); ?>