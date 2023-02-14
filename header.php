<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="/path/to/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libSlider/src/css/jquery.bxslider.css">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head() ?>
</head>
<body <?php body_class()?>>
<?php wp_body_open()?>
    
    <header id="header" role="banner">
        <h2><a href="<?php echo home_url(); ?>/"><?php bloginfo( 'name' ); ?></a></h2>
        <div class="description"><?php bloginfo( 'description' ); ?></div>
    </header>

    <nav>
    <?php
        wp_nav_menu( array(
            'theme_location' => 'primary_menu'
        ) );
    ?>
    </nav>