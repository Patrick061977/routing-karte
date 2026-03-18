<?php
/**
 * PHP 8.0+ Kompatibilitaets-Fix fuer Gambio
 *
 * Diese Datei ganz oben in /includes/application_top.php einbinden:
 *   require_once('includes/error_suppress.php');
 *
 * ODER alternativ in die .htaccess im Root-Verzeichnis:
 *   php_value error_reporting 22519
 *   php_flag display_errors Off
 */

// Warnungen und Notices auf der Live-Seite nicht anzeigen.
// E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED = 22519
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);

// Fehler NICHT im Browser anzeigen (Produktiv-Umgebung)
ini_set('display_errors', '0');

// Fehler trotzdem ins Server-Log schreiben (fuer Debugging)
ini_set('log_errors', '1');
