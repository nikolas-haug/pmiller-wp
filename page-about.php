<?php get_header(); ?>

<h1>Page-About.php</h1>

<?php while (have_posts()) {
    the_post(); ?>

    <div class="bg-img__container" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')"></div>


<?php }
wp_reset_query(); ?>


<?php get_footer(); ?>