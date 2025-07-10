<?php

add_action('wp_enqueue_scripts', function () {
    $base = plugin_dir_path(__DIR__) . '/';

    wp_enqueue_style(
        'dmt-frontend-style',
        plugins_url('css/dark-mode.css', __DIR__),
        [],
        filemtime($base . 'css/dark-mode.css')
    );

    // WICHTIG: Der Handle 'dmt-frontend-script' muss gleich bleiben
    wp_enqueue_script(
        'dmt-frontend-script',
        plugins_url('js/toggle.js', __DIR__),
        [],
        filemtime($base . 'js/toggle.js'),
        true
    );

    // Jetzt korrekt verbunden
    wp_localize_script('dmt-frontend-script', 'dmtSiteSettings', [
        'darkModeDefault' => get_option('dmt_site_dark_mode_default', 'off'),
    ]);

    wp_localize_script('dmt-frontend-script', 'dmtSiteSettings', [
    'darkModeDefault' => get_option('dmt_site_dark_mode_default', 'off'),
    'hideToggle' => get_option('dmt_hide_toggle_button') === '1',
    ]);

});


add_action('admin_enqueue_scripts', function () {
    $base = plugin_dir_path(__DIR__) . '/';

    wp_enqueue_style(
        'dmt-admin-style',
        plugins_url('css/admin-dark.css', __DIR__),
        [],
        filemtime($base . 'css/admin-dark.css')
    );

    wp_enqueue_script(
        'dmt-admin-script',
        plugins_url('js/admin-toggle.js', __DIR__),
        ['jquery'],
        filemtime($base . 'js/admin-toggle.js'),
        true
    );

    wp_localize_script('dmt-admin-script', 'dmtAdminSettings', [
        'darkModeDefault' => get_option('dmt_admin_dark_mode_default', 'off'),
        'toggleLabel' => __('Admin Dark Mode umschalten', 'dark-mode-toggle'),
    ]);

    wp_enqueue_script(
        'dmt-frontend-script',
        plugins_url('js/toggle.js', __DIR__),
        [],
        filemtime($base . 'js/toggle.js'),
        true
    );

    wp_localize_script('dmt-frontend-script', 'dmtSiteSettings', [
        'darkModeDefault' => get_option('dmt_site_dark_mode_default', 'off'),
        'toggleLabel' => __('Dark Mode umschalten', 'dark-mode-toggle'),
    ]);

});

add_action('wp_footer', function () {
    echo '<button id="darkModeToggle" style="position:fixed;bottom:20px;right:20px;z-index:1000;">🌙 Dark Mode</button>';
});

add_action('admin_footer', function () {
    echo '<button id="adminDarkToggle" style="position:fixed;bottom:20px;right:20px;z-index:1000;">🌙 Admin Dark</button>';
});

foreach (glob(plugin_dir_path(__FILE__) . 'includes/*.php') as $file) {
    require_once $file;
}
