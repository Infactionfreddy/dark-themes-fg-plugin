# Installation

[← Zurück zur README](../README.md)

## Voraussetzungen

- WordPress-Installation mit Administratorzugriff
- PHP in einer von WordPress unterstützten Version (genaue Mindestversion nicht im Code angegeben – Annahme)
- Dateizugriff auf `wp-content/plugins/` (FTP, SSH oder Git)

## Schritt für Schritt

1. Repository in den Plugin-Ordner klonen oder als ZIP herunterladen und entpacken:
   ```bash
   cd wp-content/plugins
   git clone https://github.com/Infactionfreddy/dark-themes-fg-plugin.git dark-mode-toggle
   ```
2. Im WordPress-Backend *Plugins* öffnen.
3. **Dark Mode Toggle** aktivieren.
4. Unter *Einstellungen → Dark Mode* die gewünschten Standardwerte wählen und speichern.

## Update

```bash
cd wp-content/plugins/dark-mode-toggle
git pull
```

Einstellungen bleiben in der Datenbank erhalten. Die Assets werden über `filemtime()` automatisch neu geladen. Nutzer müssen ihren Browser-Cache nicht manuell leeren.

## Deinstallation

1. Plugin im Backend deaktivieren und löschen (oder Ordner entfernen).
2. Das Plugin besitzt keine `uninstall.php`; die Optionen `dmt_admin_dark_mode_default`, `dmt_site_dark_mode_default` und `dmt_hide_toggle_button` bleiben in `wp_options` und können manuell entfernt werden, z. B. mit `wp option delete <name>` (WP-CLI).
3. Gespeicherte Nutzerwahl liegt im Browser (`darkMode`, `adminDarkMode` im localStorage).
