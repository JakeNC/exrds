<?php
/*
Template Name: ExRDS - Contact
Template Post Type: page
*/
get_header();
?>
<div class="container">
    <div class="row">
        <h2>
            Contact ExRDS
        </h2>
        <div class="col-md-6">
            <div class="exrds-header">
                <hr align="left">
            </div>
            <?php
            if (get_field('form_shortcode')) {
            the_field('form_shortcode');
            }
            ?>
        </div>
        <div class="col-md-6 exrds-contact-info">
            <div class="row">
                <div class="col-sm-2">
                    EMAIL
                </div>
                <div class="col-sm-10">
                    <a href="mailto:jon@exrds.com">jon@exrds.com</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    PHONE
                </div>
                <div class="col-sm-10">
                    <a href="tel:+11111111111">111.111.1111</a>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-sm-2">
                    FACEBOOK
                </div>
                <div class="col-sm-10">
                    <a href="https://www.facebook.com/ExRDS/" target="_blank">ExRDS on FB</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    INSTAGRAM
                </div>
                <div class="col-sm-10">
                    <a href="https://www.instagram.com/extendedrangedivingservice/" target="_blank">@extendedrangedivingservice</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>