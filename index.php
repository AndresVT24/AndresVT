    <?php get_header();?>
    <div class="maquetarSidebar">
        <div class="maquetarMainSection">
            <main>index.php
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
            <?php the_content();
                the_excerpt() ;
            ?>
            </div><!-- entry-content -->
            </article><hr>
            <?php
                endwhile;
            ?>
            </main>
        </div>
        <?php get_sidebar()?>
    </div>
    <?php get_footer();?>