<?php get_header(); ?>

<!-- Main/Landing page -->

<!-- Fixed background for changing images -->
<?php 

$args = array(
    'post_type' => 'mainbg'
);
$main_bg = new WP_Query($args);

while ($main_bg->have_posts()) {
    $main_bg->the_post();

?>

<div class="fixed__bg">
    <div class="fixed__bg-image"
        style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')">
    </div>
</div>

<?php 
} wp_reset_query();
?>

<!-- Main grid wrapper -->
<div class="main__wrapper">

    <!-- Scrolling content column -->
    <div class="main__content">

        <!-- Scrolling content header -->
        <div class="main__header">
            <h1>Main Header</h1>
            <p class="main__subtext">Even the all-powerful Pointing has no control about the blind texts</p>
        </div>

        <?php

        $args = array(
            'post_type' => 'main_post'
        );
        $main_posts = new WP_Query($args);

        while ($main_posts->have_posts()) {
            $main_posts->the_post();

            ?>

        <!-- Posted content stacked here -->
        <div class="post__title">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="post__content">
            <!-- Content can be img or iframe -->
            <?php the_content(); ?>
        </div>
        <div class="post__text">
            <p><?php the_excerpt(); ?></p>
        </div>
        <!-- end single post content -->

        <?php

        }
        wp_reset_query();

        ?>

        <!-- end scrolling content -->
    </div>

    <!-- Main landing links -->
    <div class="main-links__wrapper">
        <ul class="main-links">
            <a href="#!">
                <li>about</li>
            </a>
            <a href="#!">
                <li>shows</li>
            </a>
            <a href="#!">
                <li>bands</li>
            </a>
            <a href="#!">
                <li>comp</li>
            </a>
        </ul>
    </div>

    <!-- end grid wrapper -->
</div>

<?php get_footer(); ?>