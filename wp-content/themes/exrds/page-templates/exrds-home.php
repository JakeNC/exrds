<?php
/*
Template Name: ExRDS - Home
Template Post Type: post, page
*/
get_header();
?>
<div class="exrds-masthead">
    <div class="exrds-title">
        <h1>ExRDS</h1>
        <h3>Extended Range Diving Services</h3>
    </div>
    <img src="/wp-content/themes/exrds/assets/images/chain.jpg" class="img-responsive"/>
</div>
<div class="container">
    <div class="row exrds-mission">
        <div class="col-sm-6 col-md-4">
            <div class="exrds-statement">
                <h3><a href="/services/training" style="color: #fff"><button class="exrds-circle" id="statement-0">Training</button></a></h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="exrds-statement">
                <h3><a href="/philosophy" style="color: #fff"><button class="exrds-circle" id="statement-1">Philosophy</button></a></h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="exrds-statement">
                <h3><a href="/services/trips" style="color: #fff"><button class="exrds-circle" id="statement-2">Trips</button></a></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="exrds-header">
                <h2>
                    <?php
                    if (get_field('home-heading')) {
                        the_field('home-heading');
                    }
                    ?>
                </h2>
                <div class="exrds-header">
                    <hr align="left">
                </div>
            </div>
            <div class="exrds-p">
                <?php
                if (get_field('home-intro')) {
                    the_field('home-intro');
                }
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php if ( is_active_sidebar( 'posts-side-bar' ) ) : ?>
                <?php dynamic_sidebar( 'posts-side-bar' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>