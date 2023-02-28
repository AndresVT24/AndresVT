<?php
add_theme_support( 'post-thumbnails' );

the_post_thumbnail(); // Without parameter ->; Thumbnail
the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' ); // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'medium_large' ); // Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail( 'large' ); // Large resolution (default 1024px x 1024px max)
the_post_thumbnail( 'full' ); // Original image resolution (unmodified)
//the_post_thumbnail( array( 100, 100 ) ); // Other resolutions (height, width)

if ( ! function_exists( 'andresvt_register_nav_menu' ) ) {

    function andresvt_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'andresvt' ),
            'secondary_menu'  => __( 'Footer Menu', 'andresvt' ),
        ) );
    }
    add_action( 'after_setup_theme', 'andresvt_register_nav_menu', 0 );
}