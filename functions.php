<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
{
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css')) {
            $uri = get_template_directory_uri() . '/rtl.css';
        }

        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

// END ENQUEUE PARENT ACTION

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includes/custom-post-types.php';
require __DIR__ . '/includes/cmb2-for-options.php';
require __DIR__ . '/includes/cmb2.php';

/**
 * Remove Storefront Sidebar
 */
add_action('wp', 'remove_storefront_sidebar');

function remove_storefront_sidebar()
{
    // Condiciones en donde se tiene que remover el sidebar
    if (is_page()) {
        remove_action('storefront_sidebar', 'storefront_get_sidebar');

        add_filter('body_class', function ($classes) {
            $classes[] = 'page-template-template-fullwidth-php';
            return $classes;
        });
    }
}

add_filter('login_display_language_dropdown', '__return_false');

/**
 * Enqueue Styles and Scripts in the Login
 */
function storefront_child_theme_racmanuel()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/assets/css/custom-login.css', array(), '1.0', 'all');
    //Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), '1.0', 'all');
}
add_action('login_enqueue_scripts', 'storefront_child_theme_racmanuel');

/**
 * Equeue custom scripts and styles
 */
function storefront_enqueue_styles_scripts()
{
    //Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), '1.0', 'all');

    //Bootstrap CSS
    //wp_register_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_register_style('bootstrap-css', get_stylesheet_directory_uri() . '/vendor/twbs/bootstrap/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-css');

    //wp_register_script( 'boostrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), '1.0', true );
    wp_register_script('boostrap-js', get_stylesheet_directory_uri() . '/vendor/twbs/bootstrap/dist/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('boostrap-js');

    //boostrap-icons
    wp_register_style('boostrap-icons', get_stylesheet_directory_uri() . '/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css', array(), '1.0', 'all');
    wp_enqueue_style('boostrap-icons');

    // Popper.js
    wp_register_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array(), '1.0', true);
    wp_enqueue_script('popper-js');

    //Typed.JS
    wp_register_script('typed-js', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.12', array(), '2.0.12', true);
    wp_enqueue_script('typed-js');

    //ScrollReveal JS
    wp_register_script('scrollreveal-js', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', array(), '1.0', true);
    wp_enqueue_script('scrollreveal-js');

    // Custom CSS
    wp_register_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-css');
    //Custom JS
    wp_register_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), '1.0', true);
    wp_enqueue_script('custom-js');
}
add_action('wp_enqueue_scripts', 'storefront_enqueue_styles_scripts');

/**
 * Move Storefront to the right
 */
function align_menu_right()
{
    remove_action('storefront_header', 'storefront_secondary_navigation', 30);
    remove_action('storefront_header', 'storefront_primary_navigation', 50);
    add_action('storefront_header', 'storefront_primary_navigation', 30);

    if (function_exists('storefront_header_cart')) {
        remove_action('storefront_header', 'storefront_header_cart', 60);
    }
    remove_action('storefront_header', 'storefront_product_search', 40);
}
add_action('wp_loaded', 'align_menu_right');

/**
 * Change the Colors Defaults in Storefront Child Theme
 */
function colors_default_values($args)
{
    $args = array(
        'storefront_heading_color' => '#25ff00',
        'storefront_text_color' => '#ffffff',
        'storefront_accent_color' => '#25ff00',
        'storefront_header_background_color' => '#000000',
        'storefront_header_text_color' => '#ffffff',
        'storefront_header_link_color' => '#25ff00',
        'storefront_footer_background_color' => '#000000',
        'storefront_footer_heading_color' => '#ffffff',
        'storefront_footer_text_color' => '#ffffff',
        'storefront_footer_link_color' => '#25ff00',
        'storefront_button_background_color' => '#25ff00',
        'storefront_button_text_color' => '#000000',
        'storefront_button_alt_background_color' => '#ffffff',
        'storefront_button_alt_text_color' => '#000000',
        'storefront_layout' => 'right',
        'background_color' => '#000000',
    );
    return $args;
}

add_filter('storefront_setting_default_values', 'colors_default_values');

function racmanuel_admin_color_scheme()
{
    //Get the theme directory
    $theme_dir = get_stylesheet_directory_uri();

    //racmanuel
    wp_admin_css_color('racmanuel', __('racmanuel'),
        $theme_dir . '/assets/css/racmanuel.css',
        array('#000000', '#ffffff', '#25ff00', '#25ff00')
    );
}
add_action('admin_init', 'racmanuel_admin_color_scheme');
