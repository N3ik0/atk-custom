<?php 

// Chargements de scripts
function api_scripts(){
        wp_enqueue_script('js-jquery', get_template_directory_uri(  ).'/assets/vendor/jquery.min.js', array(), false, true);
        wp_enqueue_script('js-jquery-migrate', get_template_directory_uri(  ).'/assets/vendor/jquery-migrate.min.js', array(), false, true);
        wp_enqueue_script('js-bootstrap', get_template_directory_uri(  ).'/assets/vendor/bootstrap/js/bootstrap.min.js', array(), false, true);
        wp_enqueue_script('js-jquery-easing', get_template_directory_uri(  ).'/assets/vendor/jquery.easing.js', array(), false, true);
        wp_enqueue_script('js-jquery-parallax', get_template_directory_uri(  ).'/assets/vendor/jquery.parallax.min.js', array(), false, true);
        wp_enqueue_script('js-backtotop', get_template_directory_uri(  ).'/assets/vendor/jquery.back-to-top.js', array(), false, true);
        wp_enqueue_script('js-smooth-scroll', get_template_directory_uri(  ).'/assets/vendor/jquery.smooth-scroll.js', array(), false, true);
        wp_enqueue_script('js-wow', get_template_directory_uri(  ).'/assets/vendor/jquery.wow.min.js', array(), false, true);
        wp_enqueue_script('js-swiper', get_template_directory_uri(  ).'/assets/vendor/swiper/js/swiper.jquery.min.js', array(), false, true);
        wp_enqueue_script('js-masonry', get_template_directory_uri(  ).'/assets/vendor/masonry/jquery.masonry.pkgd.min.js', array(), false, true);
        wp_enqueue_script('js-masonry-2', get_template_directory_uri(  ).'/assets/vendor/masonry/imagesloaded.pkgd.min.js', array(), false, true);
        wp_enqueue_script('js-layout', get_template_directory_uri(  ).'/assets/js/layout.min.js', array(), false, true);
        wp_enqueue_script('js-compo-wow', get_template_directory_uri(  ).'/assets/js/components/wow.min.js', array(), false, true);
        wp_enqueue_script('js-compo-swiper', get_template_directory_uri(  ).'/assets/js/components/swiper.min.js', array(), false, true);
        wp_enqueue_script('js-compo-masonry', get_template_directory_uri(  ).'/assets/js/components/masonry.min.js', array(), false, true);
        wp_enqueue_script('js-compo-masonry', get_template_directory_uri(  ).'/assets/js/components/masonry.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'api_scripts');



// Chargements de styles
function api_styles(){
        wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700', array(), null);
        wp_enqueue_style('css-icons', get_template_directory_uri(  ).'/assets/vendor/simple-line-icons/simple-line-icons.min.css', array(), null);
        wp_enqueue_style('css-bootstrap', get_template_directory_uri(  ).'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), null);
        wp_enqueue_style('css-animate', get_template_directory_uri(  ).'/assets/css/animate.css', array(), null);
        wp_enqueue_style('css-swiper', get_template_directory_uri(  ).'/assets/vendor/swiper/css/swiper.min.css', array(), null);
        wp_enqueue_style('css-layout', get_template_directory_uri(  ).'/assets/css/layout.css', array(), null);
        wp_enqueue_style('css-custom', get_template_directory_uri(  ).'/assets/css/custom.css', array(), null);
        wp_enqueue_style('icons-shortcut', 'favicon.ico', array(), null);
}
add_action('wp_enqueue_scripts', 'api_styles');


//Activation mise en avant
add_theme_support('post-thumbnails');

// Activation generation automatique balise title
add_theme_support('title-tag');

//Modification de la longueur de l'éxtrait
function new_excerpt_length($length) {
        return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');


// Register custom nav
require_once get_template_directory() . '/assets/vendor/wp-bootstrap-navlist-walker.php';


// Enregistrement des menus
register_nav_menus(array(
     // Id du menu => Nom affiché dans l'admin, text-domain
     'Header' => __('Header-menu', 'Atk-custom'),
     'Footer' => __('Footer', 'Atk-custom')
)); 

function api_post_type() 
{
    register_post_type(
        // Nom du post type - Slug
        'service', array
        (
            'label' => 'service',
            'labels' => array
            (
                'name' => 'Services',
                'singular_name' => 'Service'
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => false,
            'menu_icon' => 'dashicons-format-status',
            'show_in_rest' => true
        )
    );
}
add_action('init', 'api_post_type');

