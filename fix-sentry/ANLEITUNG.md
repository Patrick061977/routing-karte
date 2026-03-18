# Taschenlokal.de - PHP 8.0+ Fixes

## Schnellste Loesung (empfohlen fuer sofort)

### Option A: .htaccess (einfachste Methode)
Folgende Zeilen ganz oben in die `.htaccess` im Root-Verzeichnis einfuegen:

```
php_value error_reporting 22519
php_flag display_errors Off
```

### Option B: error_suppress.php einbinden
1. `error_suppress.php` nach `/includes/error_suppress.php` hochladen
2. In `/includes/application_top.php` ganz oben (nach `<?php`) einfuegen:
   ```php
   require_once('includes/error_suppress.php');
   ```

## Bereits gefixt

| Datei | Problem | Fix |
|-------|---------|-----|
| `compatibility.php` | `get_magic_quotes_gpc()` entfernt in PHP 8.0 | `function_exists()` Check |

## Bekannte Warnungen (werden durch error_suppress unterdrückt)

- `Undefined global variable $coo_debugger` - Gambio Debugger nicht initialisiert
- `Undefined array key "file"` in LogEvent.inc.php:756 - Logging-Backtrace-Problem
- `Trying to access array offset on value of type bool` - Array-Zugriffe auf bool
- `Undefined array key "p_fsk18"`, `"p_attributes"`, etc. - Produkt-Template-Variablen
