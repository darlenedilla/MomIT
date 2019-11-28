<?php get_header(); ?>
</header>
    <div class="search-container">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <div class="search-page-form" id="ss-search-page-form"><?php get_search_form(); ?></div>
        <div class="search-results">
            <?php if ( have_posts() ) : ?>
                <h2 class="search-title">
                    <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
                </h2>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink();?>">
                        <div class="result">
                            <span class="search-post-title"><?php the_title(); ?></span>
                            <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
                        </div>
                    </a>
                <?php endwhile; ?>

                <?php else :?>
                    <h2><?= "No search result for found for: "?> <?php the_search_query(); ?></h2>
            <?php endif; ?>
        </div>
        </main><!-- #main -->
    </section><!-- #primary -->
</div>
<?php get_footer(); ?>