<?php

// setup
if ( ! function_exists( 'mayo_hospital_setup' )) {
	
	function mayo_hospital_setup() {

		add_theme_support('post-thumbnails');
	}

	add_action( 'after_setup_theme', 'mayo_hospital_setup' );
}

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

	// owl
    wp_enqueue_style('owl', get_stylesheet_directory_uri() . '/plugins/owl/owl.carousel.min.css', 2.3);
    wp_enqueue_style('owlTheme', get_stylesheet_directory_uri() . '/plugins/owl/owl.theme.default.min.css', 2.3);
    wp_enqueue_script('owl', get_template_directory_uri() . '/plugins/owl/owl.carousel.min.js',['jquery'], 2.3);

}

add_action('wp_enqueue_scripts', 'mayo_hospital_scripts_styles');

// Register Custom Post Type
function specialities_post_type() {

	$labels = array(
		'name'                  => _x( 'Specialities', 'Post Type General Name', 'mayohospital' ),
		'singular_name'         => _x( 'Speciality', 'Post Type Singular Name', 'mayohospital' ),
		'menu_name'             => __( 'Specialities', 'mayohospital' ),
		'name_admin_bar'        => __( 'Post Type', 'mayohospital' ),
		'archives'              => __( 'Item Archives', 'mayohospital' ),
		'attributes'            => __( 'Item Attributes', 'mayohospital' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mayohospital' ),
		'all_items'             => __( 'All Specialities', 'mayohospital' ),
		'add_new_item'          => __( 'Add New Specialities', 'mayohospital' ),
		'add_new'               => __( 'Add New', 'mayohospital' ),
		'new_item'              => __( 'New Speciality', 'mayohospital' ),
		'edit_item'             => __( 'Edit Speciality', 'mayohospital' ),
		'update_item'           => __( 'Update Specialitys', 'mayohospital' ),
		'view_item'             => __( 'View Specialities', 'mayohospital' ),
		'view_items'            => __( 'View Specialities', 'mayohospital' ),
		'search_items'          => __( 'Search Specialities', 'mayohospital' ),
		'not_found'             => __( 'Not found', 'mayohospital' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mayohospital' ),
		'featured_image'        => __( 'Featured Image', 'mayohospital' ),
		'set_featured_image'    => __( 'Set featured image', 'mayohospital' ),
		'remove_featured_image' => __( 'Remove featured image', 'mayohospital' ),
		'use_featured_image'    => __( 'Use as featured image', 'mayohospital' ),
		'insert_into_item'      => __( 'Insert into item', 'mayohospital' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mayohospital' ),
		'items_list'            => __( 'Items list', 'mayohospital' ),
		'items_list_navigation' => __( 'Items list navigation', 'mayohospital' ),
		'filter_items_list'     => __( 'Filter items list', 'mayohospital' ),
	);
	$args = array(
		'label'                 => __( 'Speciality', 'mayohospital' ),
		'description'           => __( 'Post Type Description', 'mayohospital' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
        'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'specialities', $args );

}
add_action( 'init', 'specialities_post_type', 0 );

// Register Custom Post Type Testimonial
function testimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'mayohospital' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'mayohospital' ),
		'menu_name'             => __( 'Testimonials', 'mayohospital' ),
		'name_admin_bar'        => __( 'Post Type', 'mayohospital' ),
		'archives'              => __( 'Item Archives', 'mayohospital' ),
		'attributes'            => __( 'Item Attributes', 'mayohospital' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mayohospital' ),
		'all_items'             => __( 'All Testimonials', 'mayohospital' ),
		'add_new_item'          => __( 'Add New Testimonial', 'mayohospital' ),
		'add_new'               => __( 'Add New', 'mayohospital' ),
		'new_item'              => __( 'New Testimonial', 'mayohospital' ),
		'edit_item'             => __( 'Edit Testimonial', 'mayohospital' ),
		'update_item'           => __( 'Update  Testimonial', 'mayohospital' ),
		'view_item'             => __( 'View Testimonials', 'mayohospital' ),
		'view_items'            => __( 'View Testimonials', 'mayohospital' ),
		'search_items'          => __( 'Search Testimonials', 'mayohospital' ),
		'not_found'             => __( 'Not found', 'mayohospital' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mayohospital' ),
		'featured_image'        => __( 'Featured Image', 'mayohospital' ),
		'set_featured_image'    => __( 'Set featured image', 'mayohospital' ),
		'remove_featured_image' => __( 'Remove featured image', 'mayohospital' ),
		'use_featured_image'    => __( 'Use as featured image', 'mayohospital' ),
		'insert_into_item'      => __( 'Insert into item', 'mayohospital' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mayohospital' ),
		'items_list'            => __( 'Items list', 'mayohospital' ),
		'items_list_navigation' => __( 'Items list navigation', 'mayohospital' ),
		'filter_items_list'     => __( 'Filter items list', 'mayohospital' ),
	);
	$args = array(
		'label'                 => __( 'Testimonail', 'mayohospital' ),
		'description'           => __( 'Post Type Description', 'mayohospital' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
        'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'testimonials_post_type', 0 );

// Register Custom Post Type News
function news_post_type() {

	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'mayohospital' ),
		'singular_name'         => _x( 'News', 'Post Type Singular Name', 'mayohospital' ),
		'menu_name'             => __( 'News', 'mayohospital' ),
		'name_admin_bar'        => __( 'Post Type', 'mayohospital' ),
		'archives'              => __( 'Item Archives', 'mayohospital' ),
		'attributes'            => __( 'Item Attributes', 'mayohospital' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mayohospital' ),
		'all_items'             => __( 'All News', 'mayohospital' ),
		'add_new_item'          => __( 'Add NewNews', 'mayohospital' ),
		'add_new'               => __( 'Add New', 'mayohospital' ),
		'new_item'              => __( 'NewNews', 'mayohospital' ),
		'edit_item'             => __( 'EditNews', 'mayohospital' ),
		'update_item'           => __( 'Update News', 'mayohospital' ),
		'view_item'             => __( 'View News', 'mayohospital' ),
		'view_items'            => __( 'View News', 'mayohospital' ),
		'search_items'          => __( 'Search News', 'mayohospital' ),
		'not_found'             => __( 'Not found', 'mayohospital' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mayohospital' ),
		'featured_image'        => __( 'Featured Image', 'mayohospital' ),
		'set_featured_image'    => __( 'Set featured image', 'mayohospital' ),
		'remove_featured_image' => __( 'Remove featured image', 'mayohospital' ),
		'use_featured_image'    => __( 'Use as featured image', 'mayohospital' ),
		'insert_into_item'      => __( 'Insert into item', 'mayohospital' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mayohospital' ),
		'items_list'            => __( 'Items list', 'mayohospital' ),
		'items_list_navigation' => __( 'Items list navigation', 'mayohospital' ),
		'filter_items_list'     => __( 'Filter items list', 'mayohospital' ),
	);
	$args = array(
		'label'                 => __( 'News', 'mayohospital' ),
		'description'           => __( 'Post Type Description', 'mayohospital' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
        'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );


// Register Custom Post Type News
function doctors_post_type() {

	$labels = array(
		'name'                  => _x( 'Doctors', 'Post Type General Name', 'mayohospital' ),
		'singular_name'         => _x( 'Doctors', 'Post Type Singular Name', 'mayohospital' ),
		'menu_name'             => __( 'Doctors', 'mayohospital' ),
		'name_admin_bar'        => __( 'Post Type', 'mayohospital' ),
		'archives'              => __( 'Item Archives', 'mayohospital' ),
		'attributes'            => __( 'Item Attributes', 'mayohospital' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mayohospital' ),
		'all_items'             => __( 'All Doctors', 'mayohospital' ),
		'add_new_item'          => __( 'Add Doctor', 'mayohospital' ),
		'add_new'               => __( 'Add New', 'mayohospital' ),
		'new_item'              => __( 'New Doctor', 'mayohospital' ),
		'edit_item'             => __( 'Edit Doctor', 'mayohospital' ),
		'update_item'           => __( 'Update Doctor', 'mayohospital' ),
		'view_item'             => __( 'View Doctor', 'mayohospital' ),
		'view_items'            => __( 'View Doctor', 'mayohospital' ),
		'search_items'          => __( 'Search Doctor', 'mayohospital' ),
		'not_found'             => __( 'Not found', 'mayohospital' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mayohospital' ),
		'featured_image'        => __( 'Featured Image', 'mayohospital' ),
		'set_featured_image'    => __( 'Set featured image', 'mayohospital' ),
		'remove_featured_image' => __( 'Remove featured image', 'mayohospital' ),
		'use_featured_image'    => __( 'Use as featured image', 'mayohospital' ),
		'insert_into_item'      => __( 'Insert into item', 'mayohospital' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mayohospital' ),
		'items_list'            => __( 'Items list', 'mayohospital' ),
		'items_list_navigation' => __( 'Items list navigation', 'mayohospital' ),
		'filter_items_list'     => __( 'Filter items list', 'mayohospital' ),
	);
	$args = array(
		'label'                 => __( 'Doctors', 'mayohospital' ),
		'description'           => __( 'Post Type Description', 'mayohospital' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail','custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'doctors', $args );

}
add_action( 'init', 'doctors_post_type', 0 );


function mayo_custom_types_loop($customPostType, $qty, $cardPostType, $contentPostType){

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$args = array(
		'post_type' => $customPostType,
		'posts_per_page' => $qty,
		'paged' => $paged,
	);
	$loop = new WP_Query($args);
	while ($loop->have_posts()): 
		$loop->the_post();
		
		$html = '<div class="col-sm-4"><div class="'.$cardPostType.'">';
		$html .= '<a href="'.get_the_permalink().'"> '. get_the_post_thumbnail(). '</a>';
		$html .= '<div class="'.$contentPostType.'"><h5>' .get_the_title(). '</h5></div>';
		$html .= '</div></div>';
		
		echo $html;
		
	$total_pages = $loop->max_num_pages;

	if ($total_pages > 1) {

		$current_page = max(1, get_query_var('paged'));
		echo '<div class="col-sm-12 paginator">';
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		echo'</div>';
	}

	endwhile;
	wp_reset_postdata();

}

