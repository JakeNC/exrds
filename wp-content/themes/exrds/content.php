<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } elseif ( is_front_page() && is_home() ) {
            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
        } else {
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content col-md-9">
        <?php
        /* translators: %s: Name of current post */
        the_content( sprintf(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
            get_the_title()
        ) );

        wp_link_pages( array(
            'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
            'after'       => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after'  => '</span>',
        ) );
        ?>
    </div><!-- .entry-content -->
    <div class="col-md-3">
        <?php if ( is_active_sidebar( 'posts-side-bar' ) ) : ?>
            <?php dynamic_sidebar( 'posts-side-bar' ); ?>
        <?php endif; ?>
    </div>
    <?php
    if ( is_single() ) {
        twentyseventeen_entry_footer();
    }
    ?>

</article><!-- #post-## -->
