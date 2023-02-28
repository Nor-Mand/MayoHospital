<?php

// Register Menus
if ( !function_exists('mayo_hospital_register_nav_menu') ) {

    function mayo_hospital_register_nav_menu(){
        register_nav_menus( array(
            'primary-menu' => esc_html__( 'Primary Menu', 'mayohospital' ),
            'footer-menu' => __( 'Footer Menu', 'mayohospital' ),
        ));
    }

    add_action('after_setup_theme', 'mayo_hospital_register_nav_menu');
}

// Register styles
function mayo_hospital_scripts_styles(){

    // Theme
    wp_enqueue_style('mayo-hospital-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js',['jquery'], 1.0,0);

    // bootstrap
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css', 5.0);
    wp_enqueue_style('bootstrap-map', get_stylesheet_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css.map', 5.0);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', 5.0);
    wp_enqueue_script('bootstrapjs-map', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js.map', 5.0);

}

add_action('wp_enqueue_scripts', 'mayo_hospital_scripts_styles');