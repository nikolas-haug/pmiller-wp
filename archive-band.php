<?php get_header(); ?>


<!-- Main Band Images -->
<div class="band-archive__container">

    <div class="band-archive__header">
        <h1>Archive-Band.php</h1>
    </div>

    <div class="band-archive__image-container">

        <?php while (have_posts()) : the_post(); ?>

        <div class="band-archive__image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">

                <div class="band-archive__image-overlay">
                    <p><?php the_title(); ?></p>
                </div>
            </a>
        </div>

        <?php endwhile; wp_reset_query(); ?>

    </div>
</div>

<?php get_footer(); ?>