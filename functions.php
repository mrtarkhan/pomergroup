<?php


function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    
    wp_register_style('owl', get_template_directory_uri() . '/styles/owl.carousel.min.css', '', 1, 'all');
    wp_enqueue_style('owl');

    
    wp_register_style('owl.default', get_template_directory_uri() . '/styles/owl.theme.default.min.css', '', 1, 'all');
    wp_enqueue_style('owl.default');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_javascript() {    
    wp_register_script('owl', get_template_directory_uri() . '/scripts/owl.carousel.min.js', array( 'jquery' ),  1, false);
    wp_enqueue_script('owl');

    wp_register_script('main', get_template_directory_uri() . '/scripts/main.js', array( 'jquery' ), 1, true);
    wp_enqueue_script('main');
    
}

add_action('wp_enqueue_scripts', 'load_javascript');


//Menus 
add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'navigation-menu' => 'Navigation Menu'
    )
);



//WooCommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'main', 10);
add_action('woocommerce_after_main_content', 'main', 10);


function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', 
        array (
            'thumbnail_image_width' => 250,
            'single_image_width'    => 300,

            'product_grid'          => 
                array(
                    'default_rows'    => 3,
                    'min_rows'        => 2,
                    'max_rows'        => 8,
                    'default_columns' => 4,
                    'min_columns'     => 2,
                    'max_columns'     => 5,
                ),
        ) 
    );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
remove_theme_support( 'wc-product-gallery-slider' );


add_filter( 'woocommerce_enqueue_styles', '__return_false' );


function main() {
    
}

function get_custom_post_type_template($single_template) {
    global $post;
   
    if ($post->post_type == 'product') {
         $single_template = dirname( __FILE__ ) . '/single-template.php';
    }
    return $single_template;
   }
   add_filter( 'single_template', 'get_custom_post_type_template' );

   add_filter( 'template_include', 'portfolio_page_template', 99 );

function portfolio_page_template( $template ) {

    if ( is_page( 'slug' )  ) {
        $new_template = locate_template( array( 'single-template.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }

    return $template;
}


add_action( 'woocommerce_after_shop_loop_item', 'rs_show_weights', 9 );

function rs_show_weights() {

    global $product;
    echo wc_display_product_attributes( $product );
}

?>