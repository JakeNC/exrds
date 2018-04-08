<?php
/*
Template Name: ExRDS - Services
Template Post Type: post, page
*/
get_header();
?>
<div class="container">
    <h2>
        <?php wp_title('');?>
    </h2>
    <div class="exrds-header">
        <hr align="left">
    </div>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="exrds-about-us">
                    <?php
                    if (get_field('about_us')) {
                        the_field('about_us');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <?php if ( is_active_sidebar( 'posts-side-bar' ) ) : ?>
            <?php dynamic_sidebar( 'posts-side-bar' ); ?>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>