<?php
add_theme_support( 'post-thumbnails' );
if ( ! function_exists( 'andresvt_register_nav_menu' ) ) {

    function andresvt_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'andresvt' ),
            'footer_menu'  => __( 'Footer Menu', 'andresvt' ),
        ) );
    }
    add_action( 'after_setup_theme', 'andresvt_register_nav_menu', 0 );
}