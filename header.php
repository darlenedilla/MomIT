<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <header>
        <div id="header-container">
     <div class="burger-menu">
            <div class="burgerMenuIcon">
                <span class="burgerLine"></span>
                <span class="burgerLine"></span>
                <span class="burgerLine"></span>
            </div>

            <div class="burgerContent">
                 <?php
                    // Navbar
                    wp_nav_menu();
                    ?>

            </div>
        
        </div>


        <?php
            // Logo
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }

            
            // Searchbar
            if(is_active_sidebar('navigation-searchbar')){
                dynamic_sidebar('navigation-searchbar');
            }
            
        ?>
        </div>
   
    </header>