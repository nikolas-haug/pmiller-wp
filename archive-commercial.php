<?php get_header(); ?>

<div class="comm-archive__header">
    <h1>Commercial Scoring Page</h1>
    <p>a short description of this collected content</p>
</div>

<div class="comm-archive__container">

    <?php while (have_posts()) : the_post(); ?>

    <div class="comm-archive__item">
        <div class="comm-archive__item-content">
            <!-- Put video content here -->
            <?php the_content(); ?>
        </div>
        <div class="comm-archive__item-title">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="comm-archive__item-excerpt">
            <p><a href="<?php the_permalink(); ?>"><?php the_excerpt_max_charlength(25); ?></a></p>
        </div>

    </div>

    <? endwhile; wp_reset_query(); ?>

</div>

<?php get_footer(); ?>