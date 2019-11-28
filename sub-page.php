<?php
/*
Template Name: Subpage
*/
?>
<?php get_header(); ?>
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


    <!-- ACCORDION SECTION, must be inside page loop! -->
<?php 
        if(has_term( 'acc-alm', 'accordion_check' ) ) {
        // if this page has the taxonomy "acc alm": ?> 
        
            <div class="accordion-container">
            <?php 
                $params = array('limit' => -1);
                $acc_reg = pods('acc_reg', $params);
                while ( $acc_reg->fetch() ) {
                ?>
                  <div class="accordion-item-container"> 
                    <div class="accordion-header-container">
                      <h3><?php echo $acc_reg->field( 'overskrift' ); ?></h3>
                      <i class="accordion-icon fas fa-plus"></i> 
                    </div>
                        <div class="accordion-content-container">
                             <p><?php echo $acc_reg->field( 'indhold' ); ?></p>
                        </div>                        
                    </div>
                <?php }; ?>
            
            </div>
    
<?php } else if(has_term( 'acc-podcast', 'accordion_check')){
        // if this page has the taxonomy "acc podcasts": ?>

           <div class="accordion-container podcast">
            <?php 
                $params = array('limit' => -1);
                $acc_podcast = pods('acc_podcast', $params);
                while ( $acc_podcast->fetch() ) {
                ?>
                  <div class="accordion-item-container"> 
                    <div class="accordion-header-container">
                    <img src="<?php echo $acc_podcast->field('promo-billede.guid');?>" alt="Et promoveringsbillede for podcast previewet">
                      <h3><?php echo $acc_podcast->field( 'overskrift' ); ?></h3>
                      <i class="accordion-icon fas fa-plus"></i> 
                    </div>
                        <div class="accordion-content-container">
                            <video  controls name="media">
                            <source src="<?php echo $acc_podcast->field('lydfil.guid'); ?>" type="audio/mpeg" >
                         </video>
                             <p><?php echo $acc_podcast->field( 'indhold' ); ?></p>
                        </div>                        
                    </div>
                <?php }; ?>
            
            </div>


    <?php } else {
        //If this page fails both accordion checks it shows nothing
        };
?>

<!-- END OF ACCORDION -->
    
    <?php
    endwhile; //resetting the page loop

    
    wp_reset_query(); //resetting the page query
    ?>


<?php get_footer(); ?>