<html>
    <head>
        <?php wp_head(); ?>

         <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/script.js?ver=<?php echo rand(111,999)?>" defer></script>
    </head>
    <body>
    <header>
        <nav>
            <div id="header-container">
                <div class="burger-menu">
                    <div class="burgerMenuIcon" id="burgerMenuIcon">
                        <span id="burgerLine1" class="burgerLine"></span>
                        <span id="burgerLine2" class="burgerLine"></span>
                        <span id="burgerLine3" class="burgerLine"></span>
                        <span id="burgerLongLine"></span>
                    </div>

                    <div class="burgerContent" id="burgerContent">
                        <?php
                            // Navbar
                            wp_nav_menu();
                            ?>
                            
                            <div class="footer-sidebar2">
                                <p class="kontakt-sidebar">Kontaktoplysninger:</p>
                            <?php
                            if(is_active_sidebar('footer-sidebar-2')){
                            dynamic_sidebar('footer-sidebar-2');
                            }
                            ?>
                            </div>

                    </div>
            
                </div>

            <?php
                // Logo
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }

                ?> 
                
                <div id="searchBarInitial"></div>
                <?php
                // Searchbar
                if(is_active_sidebar('navigation-searchbar')){
                    dynamic_sidebar('navigation-searchbar');
                }
                
            ?>
            </div>
        </nav>
