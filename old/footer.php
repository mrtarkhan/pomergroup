


<!-- header section second -->
<div class="header-image-container">
    <div class="left-header-img">
        <img src="<?php bloginfo('template_directory'); ?>/images/header-right.png" />
    </div>
    <div class="right-header-img">
        <img src="<?php bloginfo('template_directory'); ?>/images/sag-dovom.png" />
    </div>
</div>


<!-- shop-section -->
<div class="full-section">
    <div class="container container-margin-side-120">
        <div class="shop-section">
            <!--/.products-->
            <div class="owl-carousel last-items">


                <?php
                        
                        $taxonomy     = 'product_cat';
                        $orderby      = 'name';  
                        $show_count   = 0;      // 1 for yes, 0 for no
                        $pad_counts   = 0;      // 1 for yes, 0 for no
                        $hierarchical = 1;      // 1 for yes, 0 for no  
                        $title        = '';  
                        $empty        = 0;
                        $childof      = 26;

                        $args = array(
                                'taxonomy'     => $taxonomy,
                                'orderby'      => $orderby,
                                //'show_count'   => $show_count,
                                //'pad_counts'   => $pad_counts,
                                'hierarchical' => $hierarchical,
                                'title_li'     => $title,
                                'hide_empty'   => $empty,
                                'child_of'     => $childof
                        );
                        $all_categories = get_categories( $args );
                        foreach ($all_categories as $category) {
                                $category_id = $category->term_id;    
                                echo '<div class="last-item flex-start"><a href="'. 
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
        <img src="<?php bloginfo('template_directory'); ?>/images/last-sag.png" />
    </div>
    <div class="right-header-img">
        <img src="<?php bloginfo('template_directory'); ?>/images/header-right.png" />
    </div>
</div>

<style>
.final-sag-holder {
    background-image: url("<?php bloginfo('template_directory'); ?>/images/final-sag-back.png");
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-position: top;
    margin-top: -150px;
}

.final-sag-holder img {
    width: 600px;
}
</style>


<!-- tire akhar -->
<div class="final-sag-holder" style="padding-top: 35%;">
    <div class="full-section bg-white">


        <!-- shop-section top -->
        <div class="full-section">
            <div class="container container-margin-side-120" style="margin-top: -95px;">
                <div class="shop-section">
                    <!--/.products-->
                    <div class="owl-carousel shop-section-top">
                        <?php
                $args = array( 'post_type' => 
                    'product', 
                    'posts_per_page' => 10, 
                    'product_cat' => 'dogshop',
                    'orderby' => 'rand' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                        <div class="shop-section-top-item">
                            <a href="<?php echo get_permalink( $loop->post->ID ) ?>"
                                title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                                <?php 
                        if (has_post_thumbnail( $loop->post->ID )) 
                            echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                        else 
                            echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>

                                <h3><?php the_title(); ?></h3>

                                <span class="price"><?php echo $product->get_price_html(); ?></span>

                            </a>

                            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                        </div>

                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-margin-side-120 flex-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/final-sag.png" />
        </div>



    </div>
</div>


<!-- footer-social -->
<div class="full-section box-shadow-top">
    <div class="container container-margin-side-120">
        <div class="footer-social">
            <p>جهت ارتباط با گروه پامر بر روی دکمه پایین سمت چپ کلیک کنید.</p>
            <p>می توانید از طریق اینستاگرام، تلگرام، واتساپ یا تماس تلفنی با ما در ارتباط باشید.</p>
        </div>
    </div>
</div>


<hr class="hrclass" />

<!-- footer-copyright -->
<div class="full-section bg-yellow">
    <div class="container container-margin-side-120">
        <div class="footer-copyright">
            <p>All rights reserved for Pommer group. designed by Mehdi Tavasoli</p>
        </div>
    </div>
</div>

<footer class="compact-footer">
    <div class="footer-layer0">
        &nbsp;
    </div>
    <div id="footerlayer5" class="footer-layer5">
        &nbsp;
    </div>
    <div class="footer-layer1">
        <div class="footer-left">
            <div class="burger-button-footer" onclick="compactFooter(this)">
                <div class="bar-footer1"></div>
                <div class="bar-footer2"></div>
                <div class="bar-footer3"></div>
            </div>
        </div>
    </div>

    <div id="footerlayer3" class="footer-layer3">
        <div class="footer-body">
            <div class="social-holder-bottom">
                <div class="owl-carousel social-icons">
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png" />
                            <span>خط 1</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png" />
                            <span>خط 2</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png" />
                            <span>خط 3</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/telegram.png" />
                            <span>تلگرام 1</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/telegram.png" />
                            <span>تلگرام 2</span>
                        </a>

                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/telegram.png" />
                            <span>تلگرام 3</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/whatsapp.png" />
                            <span>واتساپ 1</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/whatsapp.png" />
                            <span>واتساپ 2</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/whatsapp.png" />
                            <span>واتساپ 3</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" />
                            <span>اینستاگرام 1</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" />
                            <span>اینستاگرام 2</span>
                        </a>
                    </div>
                    <div class="footer-carousel-item">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" />
                            <span>اینستاگرام 3</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</footer>



<?php wp_footer(); ?>
</body>

</html>