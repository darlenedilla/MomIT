<?php 
/*
Template Name: Om MomIT
*/
?>

<?php get_header(); ?>
<header>
    <?php if ( get_header_image() ) : ?>
        <div id="site-header">
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
            <i id="scroll-arrow" class="fas fa-chevron-down"></i>
        </div>
    <?php endif; ?>
</header>
<div id="sub-page-button-section">
<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>
<?php get_footer(); ?>