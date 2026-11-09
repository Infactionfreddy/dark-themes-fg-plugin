# API / Schnittstellen

[← Zurück zur README](../README.md)

Das Plugin stellt keine REST- oder AJAX-Endpunkte bereit. Dokumentiert sind die öffentlichen PHP-Funktionen, Optionen und JavaScript-Objekte.

## PHP-Funktionen

| Funktion | Datei | Beschreibung |
|---|---|---|
| `dmt_load_textdomain()` | `dark-mode-toggle.php` | Lädt die Übersetzungen aus `languages/` (Hook `plugins_loaded`) |
| `dmt_render_settings_page()` | `includes/settings.php` | Rendert die Einstellungsseite |

## Optionen (`get_option`)

| Name | Werte | Standard |
|---|---|---|
| `dmt_admin_dark_mode_default` | `on` / `off` | `off` |
| `dmt_site_dark_mode_default` | `on` / `off` | `off` |
| `dmt_hide_toggle_button` | `1` / leer | leer |

Beispiel:

```php
$default = get_option('dmt_site_dark_mode_default', 'off');
```

## Script- und Style-Handles

| Handle | Typ | Datei |
|---|---|---|
| `dmt-frontend-style` | Style | `css/dark-mode.css` |
| `dmt-frontend-script` | Script | `js/toggle.js` (Handle muss für `wp_localize_script` stabil bleiben) |
| `dmt-admin-style` | Style | `css/admin-dark.css` |
| `dmt-admin-script` | Script | `js/admin-toggle.js` |

## JavaScript

| Objekt / Element | Beschreibung |
|---|---|
| `dmtSiteSettings` | `{ darkModeDefault, hideToggle }` für das Frontend |
| `dmtAdminSettings` | `{ darkModeDefault, toggleLabel }` für den Admin |
| `#darkModeToggle` | Frontend-Button, schaltet Klasse `dark-mode` am `<body>` |
| `#adminDarkToggle` | Admin-Button, schaltet Klasse `admin-dark` am `<body>` |

Themes können eigene Styles über die Klassen `body.dark-mode` bzw. `body.admin-dark` ergänzen.
