jQuery(function(){
    jQuery("#scroll-arrow").click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery("#sub-page-button-section").offset().top
        }, 2000);
        jQuery("#scroll-arrow").css("animation-play-state", "paused");
    });
})

