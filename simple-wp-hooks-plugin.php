<?php
/**
 * Plugin Name: Simple WP Hooks Plugin
 * Description: Demonstrates basic WordPress actions and filters.
 * Version: 1.0
 * Author: Yasshaswi Gullipalli
 */

if (!defined('ABSPATH')) {
    exit;
}

// Action Hook Example
add_action('wp_footer', 'add_custom_footer_text');
function add_custom_footer_text() {
    echo '<p style="text-align:center;">Powered by Simple WP Hooks Plugin</p>';
}

// Filter Hook Example
add_filter('the_title', 'modify_post_title');
function modify_post_title($title) {
    if (is_admin()) return $title;
    return '🔥 ' . $title;
}
