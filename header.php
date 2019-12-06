<html lang="da">
    <head>
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title><?php wp_title(''); ?></title>
      <link rel="canonical" href="https://momit.1221s.com">
        <?php wp_head(); ?>
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
                                <div class="footer-download">
                                        <a href="https://apps.apple.com/dk/app/mit-sygehus/id836616671?l=da" target="_blank">
                                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/appstore.png" alt="Appstore link">
                                        </a>
                                        <a href="https://play.google.com/store/apps/details?id=dk.medware.mitforloeb&hl=da" target="_blank">
                                            <img class="" src="<?=get_stylesheet_directory_uri(); ?>/img/googleplay.png" alt="Google play link">
                                        </a>
                                    </div>
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
