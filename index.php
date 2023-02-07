<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        Header
    </header>
    <nav>
        Nav
    </nav>
    <main>
        <?php
            while ( have_posts() ) :
            the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>');?></h1>
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
    <footer>
        Footer
    </footer>
</body>
</html>