<?php

// Register Menus
if ( !function_exists('mayoHospital_register_nav_menu') ) {

    function mayoHospital_register_nav_menu(){
        register_nav_menus( array(
            'primary-menu' => __( 'Primary Menu', 'mayohospital' ),
            'footer-menu' => __( 'Footer Menu', 'mayohospital' ),
        ));
    }

    add_action('after_setup_theme', 'mayoHospital_register_nav_menu');
}