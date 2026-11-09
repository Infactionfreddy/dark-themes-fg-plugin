# Konfiguration

[← Zurück zur README](../README.md)

## Einstellungsseite

Zu finden unter *Einstellungen → Dark Mode* (Slug `dmt-settings`, Berechtigung `manage_options`).

## Optionen

| Option | Feld | Werte | Standard | Wirkung |
|---|---|---|---|---|
| `dmt_admin_dark_mode_default` | Admin-Bereich Dark Mode Standard | `on`, `off` | `off` | Voreinstellung für den Admin-Bereich, wenn der Nutzer noch nichts gewählt hat |
| `dmt_site_dark_mode_default` | Frontend Dark Mode Standard | `on`, `off` | `off` | Voreinstellung für das Frontend |
| `dmt_hide_toggle_button` | Umschalter im Frontend ausblenden | `1` oder leer | leer | Blendet `#darkModeToggle` per JS aus und deaktiviert das Klick-Verhalten |

Alle Optionen gehören zur Gruppe `dmt_options_group`.

## Umgebungsvariablen

Keine.

## Clientseitige Speicherung

| Schlüssel (localStorage) | Werte | Bereich |
|---|---|---|
| `darkMode` | `enabled` / `disabled` | Frontend |
| `adminDarkMode` | `enabled` (Eintrag wird sonst entfernt) | Admin |

Die Nutzerwahl hat Vorrang vor der Voreinstellung.

## An JS übergebene Werte

| Objekt | Schlüssel | Quelle |
|---|---|---|
| `dmtSiteSettings` | `darkModeDefault`, `hideToggle` (nur Frontend), `toggleLabel` (nur im Admin-Kontext) | Optionen |
| `dmtAdminSettings` | `darkModeDefault`, `toggleLabel` | Option, Übersetzung |

## Hooks und Filter

Das Plugin definiert keine eigenen Hooks oder Filter. Verwendete WordPress-Hooks:

| Hook | Datei | Zweck |
|---|---|---|
| `plugins_loaded` | `dark-mode-toggle.php` | Textdomain laden |
| `admin_menu` | `settings.php` | Optionsseite registrieren |
| `admin_init` | `settings.php` | Optionen registrieren |
| `wp_enqueue_scripts` | `assets.php` | Frontend-Assets |
| `admin_enqueue_scripts` | `assets.php` | Admin-Assets |
| `wp_footer` / `admin_footer` | `assets.php` | Buttons ausgeben |
