<?php get_header(); ?>

<div class="shows-archive__header">
    <h1>Upcoming Shows</h1>
</div>

<div class="shows-archive__container">

    <?php while (have_posts()) : the_post(); ?>

    <div class="shows-archive__content">
        <div class="shows-archive__content-header">
            <!-- Band -->
            <h1><?php the_title(); ?></h1>
            <!-- Optional description -->
            <?php if(the_excerpt()) { ?>
            <p><?php the_excerpt(); ?></p>
            <?php } ?>
        </div>
        <div class="shows-archive__content-listing">
            <!-- Put Bandsintown info here -->
            <?php the_content(); ?>
        </div>
    </div>

    <? endwhile; wp_reset_query(); ?>

</div>


<?php get_footer(); ?>