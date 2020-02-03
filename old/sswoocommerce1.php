<?php get_header(); ?>



<!-- special-offer seveom -->
<div class="full-section">
    <div class="container container-margin-side-120">
        <div class="special-offer flex-end">
            <?php
                    $arms = array(
                        'post_type' => 'product',
                        'posts_per_page' => '1',
                        'orderby' => 'rand',
                        'post_status' => 'publish',
                        'meta_query' => array(
                            'key'   => '_featured',
                            'value' => 'yes'
                        )
                    );
                    $the_query = new WP_Query($arms); ?>
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <p class="special-offer-content margin-left-20p pull-left">
                <a href='<?php the_permalink(); ?>'>
                    SPECIAL OFFER <BR> <?php the_title(); ?>
                </a>
            </p>
            <a href='<?php the_permalink(); ?>'>
                <img class="pull-right" src="<?php the_post_thumbnail_url(); ?>" />
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<section id="primary" class="full-section">
    <main id="main" class="container container-margin-side-120">
        <?php woocommerce_content(); ?>
    </main>
</section>
<?php get_footer(); ?>