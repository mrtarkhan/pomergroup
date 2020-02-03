<?php get_header(); ?>


<!-- header section first -->
<div class="header-image-container">
    <div class="left-header-img">
        <img class="sag-header-bala" src="<?php bloginfo('template_directory'); ?>/images/header.png" />
    </div>
    <div class="right-header-img">
        <img class="matn-header-bala" src="<?php bloginfo('template_directory'); ?>/images/header-right.png" />
    </div>
</div>


<!-- shop-section top -->
<div class="full-section">
    <div class="container container-margin-side-120" style="margin-top: -95px;">
        <div class="shop-section">
            <!--/.products-->

            <div class="shop-section-top">
                <?php
                        
                        $taxonomy     = 'product_cat';
                        $orderby      = 'name';  
                        $show_count   = 0;      // 1 for yes, 0 for no
                        $pad_counts   = 0;      // 1 for yes, 0 for no
                        $hierarchical = 1;      // 1 for yes, 0 for no  
                        $title        = '';  
                        $empty        = 0;
                        $childof      = 17;

                        $args = array(
                                'taxonomy'     => $taxonomy,
                                'orderby'      => $orderby,
                                //'show_count'   => $show_count,
                                //'pad_counts'   => $pad_counts,
                                'hierarchical' => $hierarchical,
                                'title_li'     => $title,
                                'hide_empty'   => $empty,
                                'child_of' => $childof
                        );
                        $all_categories = get_categories( $args );
                        foreach ($all_categories as $category) {
                                $category_id = $category->term_id;    
                                echo '<div class="shop-section-top-item"><a href="'. 
                                        get_category_link($category_id) . '"' . 
                                        'title="' . $category->name . '">';

                                $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                if ( $image ) 
                                    echo '<img src="' . $image . '" alt="' . $category->name . '" />';
                                else 
                                    echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />';
                                
                                echo '</a>';

                                echo'<a href="'. get_category_link($category_id) .'" class="button product_type_simple add_to_cart_button" rel="nofollow">' . 
                                 $category->name
                                . '</a>';

                                echo '</div>';
                        }
                    ?>


            </div>

        </div>
    </div>
</div>

<!-- header section second -->
<div class="header-image-container">
    <div class="left-header-img">
        <img src="<?php bloginfo('template_directory'); ?>/images/header-right.png" />
    </div>
    <div class="right-header-img">
        <img src="<?php bloginfo('template_directory'); ?>/images/sag-dovom.png" />
    </div>
</div>


<?php get_footer(); ?>