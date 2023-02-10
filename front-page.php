    <?php get_header();?>
    <main>front-page.php
        <?php
            while ( have_posts() ) :
            the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>');?>
        <div class="entry-content">
        <?php the_content();
            the_excerpt() ;
        ?>
        </div><!-- entry-content -->
        </article>
        <?php
            endwhile;
        ?>
    </main>
    <?php get_sidebar()?>


    <?php get_footer();?>