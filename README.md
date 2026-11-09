# Dark Mode Toggle

WordPress-Plugin, das einen Dark Mode für das Frontend und den Admin-Bereich bereitstellt. Besucher und Admins können ihn per Button umschalten, und die Voreinstellung lässt sich in den Einstellungen festlegen.

![PHP](https://img.shields.io/badge/PHP-WordPress--Plugin-777BB4?logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?logo=javascript&logoColor=black)
![CSS](https://img.shields.io/badge/CSS-Dark%20Theme-1572B6?logo=css3&logoColor=white)

## Features

- Umschalter (Button unten rechts) für das Frontend und den Admin-Bereich
- Getrennte Standardeinstellung (an/aus) für Frontend und Admin
- Speicherung der Nutzerwahl im Browser (`localStorage`), sie hat Vorrang vor der Voreinstellung
- Der Frontend-Umschalter lässt sich über die Einstellungen ausblenden
- Einstellungsseite unter *Einstellungen → Dark Mode*
- Übersetzbar (Text Domain `dark-mode-toggle`, `.pot`-Datei vorhanden)
- Cache-Busting der Assets über `filemtime()`

## Tech-Stack

- PHP (WordPress Plugin API, Settings API)
- Vanilla JavaScript (Admin-Skript hängt von `jquery` ab, nutzt es aber nicht aktiv)
- CSS
- Gettext (`languages/dark-mode-toggle.pot`)

## Schnellstart

### Voraussetzungen

- Laufende WordPress-Installation (die Mindestversionen für WordPress und PHP sind im Code nicht angegeben)
- Zugriff auf das Verzeichnis `wp-content/plugins/`

### Installation

```bash
cd wp-content/plugins
git clone https://github.com/Infactionfreddy/dark-themes-fg-plugin.git dark-mode-toggle
```

### Start

1. Im WordPress-Backend unter *Plugins* **Dark Mode Toggle** aktivieren.
2. Unter *Einstellungen → Dark Mode* die Standardwerte festlegen.
3. Im Frontend und im Admin-Bereich erscheint unten rechts der Umschalter.

## Konfiguration

Das Plugin nutzt keine Umgebungsvariablen. Alle Einstellungen liegen als WordPress-Optionen in der Datenbank:

| Option | Werte | Standard | Beschreibung |
|---|---|---|---|
| `dmt_admin_dark_mode_default` | `on` / `off` | `off` | Dark Mode im Admin-Bereich standardmäßig aktiv |
| `dmt_site_dark_mode_default` | `on` / `off` | `off` | Dark Mode im Frontend standardmäßig aktiv |
| `dmt_hide_toggle_button` | `1` / leer | leer | Umschalter im Frontend ausblenden |

Details: [docs/KONFIGURATION.md](docs/KONFIGURATION.md)

## Projektstruktur

```
.
├── dark-mode-toggle.php        # Plugin-Header, Loader, Textdomain
├── includes/
│   ├── assets.php              # Einbindung von CSS/JS, Toggle-Buttons
│   └── settings.php            # Einstellungsseite und Optionen
├── css/
│   ├── dark-mode.css           # Frontend-Styles
│   └── admin-dark.css          # Admin-Styles
├── js/
│   ├── toggle.js               # Frontend-Umschalter
│   └── admin-toggle.js         # Admin-Umschalter
└── languages/
    └── dark-mode-toggle.pot    # Übersetzungsvorlage
```

## Dokumentation

- [Architektur](docs/ARCHITEKTUR.md)
- [Installation](docs/INSTALLATION.md)
- [Konfiguration](docs/KONFIGURATION.md)
- [Entwicklung](docs/ENTWICKLUNG.md)
- [API / Schnittstellen](docs/API.md)
