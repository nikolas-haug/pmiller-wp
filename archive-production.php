<?php get_header(); ?>

<div class="fixed__bg">
    <div class="fixed__bg-image archive-production__bg-image"></div>
</div>

<!-- Main grid wrapper -->
<div class="archive-production__container">

    <!-- Scrolling content column -->
    <div class="archive-production__content">

        <!-- Scrolling content header -->
        <div class="archive-production__header">
            <h1>Production Header</h1>
            <p class="archive-production__subtext">Even the all-powerful Pointing has no control about the blind texts
            </p>
        </div>

        <?php while (have_posts()) : the_post(); ?>

        <!-- Posted content stacked here -->
        <div class="archive-production__content-title">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="archive-production__content-media">
            <!-- Content can be img or iframe -->
            <?php the_content(); ?>
        </div>
        <div class="archive-production__content-excerpt">
            <p><?php the_excerpt(); ?></p>
        </div>
        <!-- end single post content -->

        <? endwhile; wp_reset_query(); ?>

        <!-- end scrolling content -->
    </div>

    <!-- end grid wrapper -->
</div>


<?php get_footer(); ?>