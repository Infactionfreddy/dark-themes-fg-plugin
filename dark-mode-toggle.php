<?php
/**
 * Plugin Name: Dark Mode Toggle
 * Description: Modulares Plugin für Dark Mode mit Admin-Einstellungen.
 * Version: 1.2
 * Author: Dein Name
 * Text Domain: dark-mode-toggle
 * Domain Path: /languages
 */

defined('ABSPATH') || exit;

foreach (glob(plugin_dir_path(__FILE__) . 'includes/*.php') as $file) {
    require_once $file;
}

function dmt_load_textdomain() {
    load_plugin_textdomain('dark-mode-toggle', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'dmt_load_textdomain');
