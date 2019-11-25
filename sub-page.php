<?php
/*
Template Name: Subpage
*/
?>
<?php get_header(); ?>
<header>
    <div class="site-header">
        <img class="sub-page-image" src="<?php header_image(); ?>" width="<?= absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <h1><?= the_title(); ?></h1>
    </div>
</header>
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