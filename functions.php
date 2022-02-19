<?php

// Load CSS
function load_css() {
    wp_register_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), false, 'all');
    wp_register_style('inter-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), false, 'all');
    wp_register_style('main-style', get_template_directory_uri() . '/css/main.css', array(), '', false, 'all');
    wp_enqueue_style('normalize-css');
    wp_enqueue_style('inter-google-fonts');
    wp_enqueue_style('main-style');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js() {
    
    wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', array(), '', true, true);
    wp_enqueue_script('main-script');
    wp_localize_script('main-script', 'ajax', array(
        'url' => admin_url('admin-ajax.php') 
    ));
}

add_action('wp_enqueue_scripts', 'load_js');

// AJAX
function ajax_get_posts_by_categoryID() {
    $categoryID = !empty($_POST['categoryID']) ? esc_attr($_POST['categoryID']) : false;
    $args = array(
        'posts_type'=> 'post',
        'posts_per_page' => -1,
        'cat' => $categoryID
    );
    
    $query = new WP_Query($args);
    if($query->have_posts()): 
        while($query->have_posts()): $query->the_post();
            the_title('<div class="wrapper_faq_content"><div class="wrapper_faq_question"><h3>', '</h3> <svg class="icon_arrow" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.87 12.5a1 1 0 0 1-1.74 0L1.07 2A1 1 0 0 1 1.94.5h12.12a1 1 0 0 1 .87 1.5L8.87 12.5Z"/>
        </svg></div>');
            the_content();
            echo '</div>';
        endwhile;
    endif;
    wp_die();
}

add_action('wp_ajax_load_posts', 'ajax_get_posts_by_categoryID');
add_action('wp_ajax_nopriv_load_posts', 'ajax_get_posts_by_categoryID');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'main-menu' => 'Main Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
  
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action( 'admin_head', 'fix_svg' );