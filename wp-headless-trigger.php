<?php
/**
 * Plugin Name: WP Headless Trigger
 * Plugin URI: https://github.com/iamtimsmith/wp-trigger-netlify-build
 * Description: A plugin which helps you using WordPress as a Headless CMS, takes a webhook url and triggers a build on your front end.
 * Version: 1.0.0
 * Author: Quema Labs
 * Author URI: https://quemalabs.com
 * Text Domain: wp-headless-trigger
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

require plugin_dir_path( __FILE__ ) . 'inc/options-page.php';
require plugin_dir_path( __FILE__ ) . 'inc/trigger-webhook.php';

/**
 * Create Admin Panel
 */
function wp_headless_trigger_menu() {
    add_submenu_page( 'tools.php', esc_html__( 'WP Headless Trigger', 'wp-headless-trigger' ), esc_html__( 'Headless Trigger', 'wp-headless-trigger' ), 'manage_options', 'wp-headless-trigger', 'wp_headless_trigger_options_page' );
}
add_action( 'admin_menu', 'wp_headless_trigger_menu' );

/**
 * Create Settings
 */
function wp_headless_trigger_settings_init() {
    register_setting( 'wp_headless_trigger', 'wp_headless_trigger_settings' );
    add_settings_section(
        'wp_headless_trigger_section',
        esc_html__( 'Settings', 'wp-headless-trigger' ),
        '',
        'wp_headless_trigger'
    );
    add_settings_field(
        'wp_headless_trigger_webhook_url',
        esc_html__( 'Webhook URL', 'wp-headless-trigger' ),
        'wp_headless_trigger_webhook_url_render',
        'wp_headless_trigger',
        'wp_headless_trigger_section'
    );
}
add_action( 'admin_init', 'wp_headless_trigger_settings_init' );