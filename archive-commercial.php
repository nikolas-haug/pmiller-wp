<?php get_header(); ?>

<h1>Archive-Commercial.php</h1>

<?php while (have_posts()) : the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <div>
        <?php the_content(); ?>
    </div>
    
    <p><?php the_excerpt() ?></p>
    
<? endwhile; wp_reset_query(); ?>


<?php get_footer(); ?>