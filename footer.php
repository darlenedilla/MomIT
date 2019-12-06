
<footer>

    <div id="footer-sidebar" class="secondary">

        <div id="footer-sidebar1">
            <p class="footer-sidebar-text">Skabt i samarbejde med:</p>
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
            }
            ?>
        </div>

        <span class="footerLongLine"></span>

        <div class="footer-sidebar2">
            <div class="footer-download">
                    <a href="https://apps.apple.com/dk/app/mit-sygehus/id836616671?l=da" target="_blank">
                        <img class="download-buttons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/appstore.png" alt="Appstore link">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=dk.medware.mitforloeb&hl=da" target="_blank">
                        <img class="download-buttons" src="<?=get_stylesheet_directory_uri(); ?>/img/googleplay.png" alt="Google play link">
                    </a>
                </div>
        </div>

    </div>
</footer>
</body>
</html>
