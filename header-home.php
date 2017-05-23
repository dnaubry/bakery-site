<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <script>
            function loadJS(u){var r = document.getElementsByTagName("script")[0], s = document.createElement("script");s.src = u;r.parentNode.insertBefore( s, r );}

            if(!window.HTMLPictureElement){
                document.createElement('picture');
                loadJS("http://cdn.jsdelivr.net/g/respimage(respimage.min.js+plugins/mutation/ri.mutation.min.js+plugins/intrinsic-dimension/ri.intrinsic.min.js+plugins/typesupport/ri.type.min.js)");
            }
        </script>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <!-- container -->
    <div class="container">

        <!-- site-header -->
        <header class="site-header">
            <div class="site-header__title">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>

            <?php get_search_form(); ?>
            
            <nav class="site-nav">
                <?php

                $args = array(
                    'theme_location' => 'primary'
                );

                ?>

                <?php wp_nav_menu( $args ); ?>
            </nav>

            <div class="menu-icon"><span id="menu-icons" class="dashicons dashicons-menu"></span><div>

        </header><!-- site-header -->

        <!-- site-header-home -->
        <div class="site-header-home">
                <img  
                    srcset="wp-content/themes/sweets/images/pies-medium-c.jpg 1200w, 
                            wp-content/themes/sweets/images/pies-large-c.jpg 1920w, 
                            wp-content/themes/sweets/images/pies-large-hi-dpi-c.jpg 3840w" 
                            src="wp-content/themes/sweets/images/pies-small-c.jpg"
                    alt="Pies" />
                <div class="site-header-home__titles">
                    <h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
                    <h5><?php bloginfo('description'); ?></h5>
                </div>
            </div><!-- site-header-home -->
                    