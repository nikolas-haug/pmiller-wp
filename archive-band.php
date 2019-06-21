<?php get_header(); ?>

<h1>Archive-Band.php</h1>

<?php while (have_posts()) : the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

    <p><?php the_excerpt() ?></p>

    <div>
        <?php the_content(); ?>
    </div>

<? endwhile; wp_reset_query(); ?>


<?php get_footer(); ?>