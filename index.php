<?php 
/*
Template Name: Forside
*/
?>

<?php get_header(); ?>
<header>
    <?php if ( get_header_image() ) : ?>
        <div class="site-header">
            <img id="header-img" src="<?php header_image(); ?>" width="<?= absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <p id="header-text"><?= get_bloginfo('description')?></p>
            <div id="download">
                <a href="https://apps.apple.com/dk/app/mit-sygehus/id836616671?l=da" target="_blank">
                    <img class="download-buttons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/appstore.png" alt="Appstore link">
                </a>
                <div id="divider"></div>
                <a href="https://play.google.com/store/apps/details?id=dk.medware.mitforloeb&hl=da" target="_blank">
                    <img class="download-buttons" src="<?=get_stylesheet_directory_uri(); ?>/img/googleplay.png" alt="Google play link">
                </a>
            </div>
        </div>
    <?php endif; ?>
</header>
<?php get_footer(); ?>