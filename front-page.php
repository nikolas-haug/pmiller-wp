<?php get_header(); ?>

<!-- Main/Landing page -->

<h1>Front-Page.php</h1>

<?php

$args = array(
    'post_type' => 'main_post'
);
$main_posts = new WP_Query($args);

while ($main_posts->have_posts()) {
    $main_posts->the_post();

    ?>

    <!-- Main Bg image -->
    <div class="bg-img__container" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')"></div>

    <h1><?php the_title(); ?></h1>

    <div>
        <?php the_content(); ?>
    </div>

    <p><?php the_excerpt(); ?></p>


<?php

}
wp_reset_query();

?>

<?php get_footer(); ?>