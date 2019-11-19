<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <header>
        <?php
            // Navbar
            wp_nav_menu();

            // Logo
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }

            // Searchbar
            if(is_active_sidebar('navigation-searchbar')){
                dynamic_sidebar('navigation-searchbar');
            }
        ?>
    </header>