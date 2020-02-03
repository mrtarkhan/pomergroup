<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

<div class="full-section">
    <div class="container container-margin-side-120">
            <p>برای جستجو از فرم زیر استفاده کنید</p>

            <?php get_search_form(); ?>
            <?php

                global $query_string;

                wp_parse_str( $query_string, $search_query );
                $search = new WP_Query( $search_query );

            ?>
            <?php
                global $wp_query;
                $total_results = $wp_query->found_posts;
            ?>
    </div>
</div>

<?php get_footer();