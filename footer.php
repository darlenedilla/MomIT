
<footer>

<div id="footer-sidebar" class="secondary">

    <div id="footer-sidebar1">
        <p class="">Skabt i samarbejde med:</p>
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
    </div>

    <span class="footerLongLine"></span>

    <div class="footer-sidebar2">
        <p class="kontakt-sidebar">Kontaktoplysninger:</p>
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
    ?>
    </div>

</div>
</body>
</footer>
</html>
