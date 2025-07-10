<?php

add_action('admin_menu', function () {
    add_options_page(
        __('Dark Mode Einstellungen', 'dark-mode-toggle'),
        __('Dark Mode', 'dark-mode-toggle'),
        'manage_options',
        'dmt-settings',
        'dmt_render_settings_page'
    );
});

// Einstellungen erweitern
add_action('admin_init', function () {
    register_setting('dmt_options_group', 'dmt_admin_dark_mode_default');
    register_setting('dmt_options_group', 'dmt_site_dark_mode_default'); // NEU
    register_setting('dmt_options_group', 'dmt_hide_toggle_button');
});

// Einstellungsseite aktualisieren
function dmt_render_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php _e('Dark Mode Einstellungen', 'dark-mode-toggle'); ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('dmt_options_group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th><?php _e('Admin-Bereich Dark Mode Standard:', 'dark-mode-toggle'); ?></th>
                    <td>
                        <select name="dmt_admin_dark_mode_default">
                            <option value="off" <?php selected(get_option('dmt_admin_dark_mode_default'), 'off'); ?>><?php _e('Aus', 'dark-mode-toggle'); ?></option>
                            <option value="on" <?php selected(get_option('dmt_admin_dark_mode_default'), 'on'); ?>><?php _e('An', 'dark-mode-toggle'); ?></option>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th><?php _e('Frontend Dark Mode Standard:', 'dark-mode-toggle'); ?></th>
                    <td>
                        <select name="dmt_site_dark_mode_default">
                            <option value="off" <?php selected(get_option('dmt_site_dark_mode_default'), 'off'); ?>><?php _e('Aus', 'dark-mode-toggle'); ?></option>
                            <option value="on" <?php selected(get_option('dmt_site_dark_mode_default'), 'on'); ?>><?php _e('An', 'dark-mode-toggle'); ?></option>
                        </select>
                        <p class="description"><?php _e('Legt fest, ob der Dark Mode standardmäßig aktiv ist (Frontend).', 'dark-mode-toggle'); ?></p>
                    </td>
                </tr>
                <!-- Toggle anzeigen -->
                <tr>
                    <th><?php _e('Dark Mode Umschalter anzeigen:', 'dark-mode-toggle'); ?></th>
                    <td>
                        <input type="checkbox" name="dmt_hide_toggle_button" value="1"
                            <?php checked(get_option('dmt_hide_toggle_button'), '1'); ?> />
                        <label for="dmt_hide_toggle_button"><?php _e('Umschalter im Frontend ausblenden', 'dark-mode-toggle'); ?></label>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}



