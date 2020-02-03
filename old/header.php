<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>


<body>
    <header>

        <div class="nav-header">
            <div class="nav-header-content">
                <div class="header-container flex flex-with-space">
                    <div style="min-width: 20%">
                        &nbsp;
                    </div>
                    <div class="burger-button" onclick="compactNavigation(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <script>
                    function myFunction(element) {
                        element.classList.toggle("change");
                    }
                    </script>
                    <div style="margin-right: 20px;">
                        <div class="top-header-icon-set">
                            <a>
                                <img src="<?php bloginfo('template_directory'); ?>/images/checkout.png" />
                            </a>
                        </div>
                        <div class="top-header-icon-set">
                            <a onclick="toggleSearch(this)">
                                <img style="height: 36px; width: 36px;"
                                    src="<?php bloginfo('template_directory'); ?>/images/search.png" />
                            </a>
                        </div>
                    </div>



                    <div style="min-width: 20%">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>



        <div class="header-deliminator">
            <div class="nav-header-content">
                &nbsp;
            </div>
        </div>

        <div class="top-header">
            <div class="nav-header-content">
                <div class="header-container flex flex-with-space">

                    <div class="dog-holder-top">
                        <div class="owl-carousel dog-holder-icons">
                            <?php 
                                wp_nav_menu(
                                    array (
                                        'theme_location' => 'top-menu',
                                        'items_wrap'     => '%3$s',
                                        'container'       => false,
                                    )
                                )
                            ?>
                        </div>
                    </div>

                    <div class="logo-holder">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
                    </div>
                </div>
            </div>

            <div id="search-box" class="search_wrapper display-none">
                <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <i class="icon_search icon-search-fine"></i>
                    <a href="#" class="icon_close"><i class="icon-cancel-fine"></i></a>
                    <input type="text" class="field" name="s" placeholder="Enter your search" value="<?php the_search_query(); ?>">
                    <input type="submit" class="display-none" value="">
                </form>
            </div>

        </div>


    </header>
    <!-- <div class="under-header">
        <nav id="topNavigation" class="nav-header-content-box compact-header-nav">
            <div class="container">
                <?php 
                    /* wp_nav_menu(
                        array (
                            'theme_location' => 'navigation-menu'
                        )
                    )
                    */
                ?>
            </div>
        </nav>
    </div> -->

    <body <?php body_class('test'); ?>>