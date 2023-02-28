<?php get_header();?>
    <main>single.php
        <?php
            while ( have_posts() ) :
            the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
        ?>
        <?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>');?>
        <div class="entry-content">
            <?php the_content();?>
        </div><!-- entry-content -->
        </article><hr>
        <?php
            endwhile;
        ?>
    </main>
    <?php

            if ( is_singular( 'attachment' ) ) {
                // Parent post navigation.
                the_post_navigation(
                    array(
                        /* translators: %s: Parent post link. */
                        'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
                    )
                );
            } elseif ( is_singular( 'post' ) ) {
                // Previous/next post navigation.
                the_post_navigation(
                    array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
                            '<span class="post-title">%title</span>',
                    )
                );
            }

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        ?>
    <?php get_footer();?>