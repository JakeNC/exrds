<?php
/*
Template Name: ExRDS - Full Width
Template Post Type: post, page
*/
get_header();
?>
<div class="row" style="background-color:black;">
    hello world
</div>
<div class="container">
    <div class="col-lg-12">
        <?php
        if (get_field('test')) {
            the_field('test');
        }
        ?>
    </div>
</div>

<?php
get_footer();
?>