<?php
define('ALNUUR_THEME_DIR', get_template_directory());
define('ALNUUR_URI', get_template_directory_uri());
$alnuur_upload_dir = wp_upload_dir();
define('ALNUUR_IMAGES', $alnuur_upload_dir['baseurl'] . '/2026/06');

function alnuur_img($path) {
    return ALNUUR_IMAGES . '/' . basename($path);
}

add_action('after_setup_theme', 'alnuur_setup');
function alnuur_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo', ['height' => 80, 'width' => 200]);
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    register_nav_menus([
        'primary' => __('Primary Menu', 'alnuur'),
        'furniture' => __('Furniture Categories', 'alnuur'),
        'appliances' => __('Appliances Categories', 'alnuur'),
        'footer' => __('Footer Menu', 'alnuur'),
    ]);
}

add_action('wp_enqueue_scripts', 'alnuur_assets');
function alnuur_assets() {
    wp_enqueue_style('alnuur-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap', [], null);
    wp_enqueue_style('alnuur-style', ALNUUR_URI . '/assets/css/style.css', ['alnuur-fonts'], '1.0.0');
    wp_enqueue_script('alnuur-main', ALNUUR_URI . '/assets/js/main.js', [], '1.0.0', true);
    wp_enqueue_script('alnuur-booking', ALNUUR_URI . '/assets/js/booking.js', [], '1.0.0', true);
    wp_localize_script('alnuur-main', 'alnuurData', [
        'themeUri' => ALNUUR_URI,
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'whatsapp' => '+254758289578',
    ]);
}

require_once ALNUUR_THEME_DIR . '/inc/product-data.php';
require_once ALNUUR_THEME_DIR . '/inc/pest-control-data.php';
