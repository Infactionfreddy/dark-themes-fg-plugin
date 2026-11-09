# Entwicklung

[← Zurück zur README](../README.md)

## Lokale Entwicklungsumgebung

1. Lokale WordPress-Instanz bereitstellen (z. B. Local, wp-env oder Docker; im Repo ist keine Umgebung vorgegeben).
2. Repository nach `wp-content/plugins/dark-mode-toggle` klonen bzw. verlinken.
3. Plugin aktivieren und `WP_DEBUG` einschalten.

Es gibt keinen Build-Schritt; PHP, CSS und JS werden direkt ausgeliefert.

## Code-Struktur

- `dark-mode-toggle.php`: lädt automatisch alle Dateien aus `includes/`. Neue Module dort ablegen.
- `includes/assets.php`: Assets und Button-Markup.
- `includes/settings.php`: Einstellungen.
- `js/` und `css/`: Frontend- und Admin-Varianten getrennt.
- Präfix `dmt_` für Funktionen und Optionen, Text Domain `dark-mode-toggle`.

## Tests

Es sind keine automatisierten Tests vorhanden. Manuell prüfen:

- Standard an/aus im Frontend und im Admin, jeweils ohne gespeicherte Nutzerwahl
- Umschalten und Neuladen (localStorage)
- Option *Umschalter ausblenden*
- Konsole auf JavaScript-Fehler prüfen (insbesondere `dmtAdminSettings` im Admin)

## Coding-Standards

- Empfehlung (Annahme): WordPress Coding Standards (PHPCS).
- Texte immer mit `__()` bzw. `_e()` und Text Domain ausgeben; `.pot` danach z. B. mit `wp i18n make-pot . languages/dark-mode-toggle.pot` aktualisieren.
- Ausgaben escapen (`esc_html__`, `esc_attr`), Optionen mit Sanitize-Callback registrieren.

## Bekannte Verbesserungspunkte

- Doppelter `wp_localize_script`-Aufruf und unnötiger `glob()`-Aufruf in `assets.php`
- `console.log` und fehlende Existenzprüfung in `admin-toggle.js`
- Auskommentierter Block in `toggle.js`
- `.DS_Store` aus dem Repository entfernen und in `.gitignore` aufnehmen

## Release-Ablauf

Nicht definiert (Annahme, empfohlen):

1. Version im Plugin-Header (`dark-mode-toggle.php`, aktuell 1.2) erhöhen.
2. `.pot`-Datei aktualisieren.
3. Manuell testen.
4. Git-Tag setzen und ein ZIP des Plugin-Ordners als Release bereitstellen.
