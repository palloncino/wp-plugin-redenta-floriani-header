<?php
/*
Plugin Name: Strigno Header
Description: Provides the Header through a shortcode.
Version: 1.0
Author: Antonio Guiotto
*/

// Function to enqueue scripts and styles
function header_strigno_scripts() {
    // Optionally, enqueue a CSS file if you have additional styles
    // wp_enqueue_style('my-hello-world-css', plugins_url('/example_1942384.css', __FILE__));
    // Enqueue JavaScript file if necessary
    // wp_enqueue_script('my-hello-world-js', plugins_url('/example_1942384.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'header_strigno_scripts');

// Shortcode function to output HTML
function header_strigno_shortcode() {
    // Output the specified HTML
    return '<div class="hero-container hero-container-400">
                <img class="hero-image" src="http://www.apspstrigno.it/w-images/resized/fademss/img55785cb1a2736.jpg" alt="APSP Pieve" />
                <div class="hero-text-container hero-text-container-show">
                    <div class="text-wrapper">
                        <h1 class="main-title">APSP Strigno</h1>
                        <h3 class="sub-title">Redenta Floriani</h3>
                        <h6 class="sub-title-2">Strigno (TN)</h6>
                    </div>
                </div>
            </div>';
}
add_shortcode('strigno_header', 'header_strigno_shortcode');
?>
