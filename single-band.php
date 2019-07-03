<?php get_header(); ?>

<!-- New Layout -->
<div class="band-single__container">

    <div class="band-single__sub-container">

        <?php while (have_posts()) : the_post(); ?>

        <div class="band-single__header">
            <h1><?php the_title(); ?></h1>
            <a href="<?php echo site_url('/bands'); ?>">Go Back < <</a> 
        </div> 
        <div class="band-single__content">
            <div class="band-single__content-media">
                <!-- Spotify goes here -->
                <?php the_content(); ?>
            </div>
            <div class="band-single__content-meta">
                <div class="band-single__meta-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="band-single__meta-excerpt">
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="band-single__meta-social">
                    <div class="meta-social__list">
                        <?php $fbmeta = get_post_meta(get_the_ID(), 'facebook', true); ?>
                        <a href="<?php echo $fbmeta ?>" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <?php $igmeta = get_post_meta(get_the_ID(), 'instagram', true); ?>
                        <a href="<?php echo $igmeta ?>" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <?php $bcmeta = get_post_meta(get_the_ID(), 'bandcamp', true); ?>
                        <a href="<?php echo $bcmeta ?>" target="_blank"><i class="fab fa-bandcamp fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <? endwhile; wp_reset_query(); ?>

    </div>

</div>

<?php get_footer(); ?>