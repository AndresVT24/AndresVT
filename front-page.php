        <?php get_header();?>
    <div class="maquetarSidebar">
        <div class="maquetarMainSection">
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
            <section>
                <h3>Últimas entradas de XXXX</h3>
            <?php
            $args = array(
            'numberposts' => 3,
            'category' => 2,
            );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <li>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h4>
            <div class="entry-content">
            <p><strong><small><?php the_date(); ?></small></strong></p>
            <p><?php the_excerpt(); ?></p>
            </div><!-- entry-content -->
            </article>
            </li>
            <?php endforeach;
            wp_reset_postdata();
            ?>
            </section>
        </div>
        
        <?php get_sidebar()?>
    </div>

    <?php get_footer();?>