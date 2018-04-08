<?php
/*
Template Name: ExRDS - About Us
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
                    if (get_field('about_exrds')) {
                        the_field('about_exrds');
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 exrds-escape-container">
                <h2>
                    ExRDS Crew
                </h2>
                <div class="exrds-header">
                    <hr align="left">
                </div>
            </div>
            <div class="row exrds-crew">
                <div class="col-md-12">
                    <div class="exrds-crew-left">
                        <h3>Jon Belisario</h3>
                        <div class="col-md-4">
                            <img src="/wp-content/themes/exrds/assets/images/profile-placeholder.png" alt="profile pic" class="img-responsive"/>
                        </div>
                        <div class="col-md-8 exrds-about-bio">
                            <?php
                            if (get_field('about_jon')) {
                                the_field('about_jon');
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row exrds-crew">
                <div class="col-md-12">
                    <div class="exrds-crew-left">
                        <h3>Kelsey Kelly</h3>
                        <div class="col-md-4">
                            <img src="/wp-content/themes/exrds/assets/images/profile-placeholder.png" alt="profile pic" class="img-responsive"/>
                        </div>
                        <div class="col-md-8 exrds-about-bio">
                            <?php
                            if (get_field('about_kelsey')) {
                                the_field('about_kelsey');
                            }
                            ?>
                        </div>
                    </div>
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