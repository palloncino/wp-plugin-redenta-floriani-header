<?php
/*
Plugin Name: Redenta Floriani (Strigno) Header
Description: Provides the Header through a shortcode.
Version: 1.1
Author: Antonio Guiotto
*/

// Function to enqueue scripts and styles
function header_strigno_scripts() {
    // Optionally, enqueue a CSS file if you have additional styles
    wp_enqueue_style('my-hello-world-css', plugins_url('/hero-header-strigno.css', __FILE__));
    // Enqueue JavaScript file if necessary
    // wp_enqueue_script('my-hello-world-js', plugins_url('/example_1942384.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'header_strigno_scripts');

// Shortcode function to output HTML
function header_strigno_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'bg_url' => ''
    ), $atts, 'strigno_header');

    // Check if the URL contains "amministrazione-trasparente"
    if (strpos($_SERVER['REQUEST_URI'], 'amministrazione-trasparente') !== false) {
        $bg_url = 'http://apspstrigno.chebellagiornata.it/wp-content/uploads/2024/08/AlboAPSPCesareBenedetti1.jpg';
    } else {
        // Use the original bg_url logic
        $bg_url = get_field('bg_url', 'option');
        if (empty($bg_url)) {
            $bg_url = get_template_directory_uri() . '/assets/img/bg.jpg';
        }
    }

    // Determine background style
    $bg_style = $bg_url ? 'style="background: url(' . esc_url($bg_url) . ') no-repeat center center; background-size: cover;"' : '';

    // Output the specified HTML
    return '<div class="hero-container" ' . $bg_style . '>
                <div class="hero-text-container hero-text-container-show">
                    <div class="text-wrapper">
                        <h1 class="main-title">APSP Redenta Floriani</h1>
                        <h3 class="sub-title">Strigno (TN)</h3>
                    </div>
                </div>
            </div>';
}
add_shortcode('strigno_header', 'header_strigno_shortcode');

