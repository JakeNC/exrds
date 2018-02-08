<?php
/*
Template Name: ExRDS - Full Width
Template Post Type: post, page
*/
get_header();
?>

<div class="col-lg-12">
    <?php
        if (get_field('test')) {
            the_field('test');
        }
    ?>
</div>

<?php
get_footer();
?>