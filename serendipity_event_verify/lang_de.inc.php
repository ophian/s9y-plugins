<?php # $Id: utf-8/lang_de.inc.php 2011-07-24 14:40:00Z ian $

@define('PLUGIN_VERIFY_OR', 'oder');
@define('PLUGIN_VERIFY_NAME', 'Datei Integritätsprüfungen');
@define('PLUGIN_VERIFY_DESCRIPTION', 'Überprüfe und liste gegenüber S9y Kern und zusätzlichen Dateien');
@define('PLUGIN_VERIFY_ADMIN_NAME', 'Datei Prüfungen');
@define('PLUGIN_VERIFY_ADMIN_NAME_MENU', 'Abgleich von S9y Freigabe- und zusätzlich installierten Dateien, Verify Plugin v. %s');
@define('PLUGIN_VERIFY_ADMIN_CORE', 'Integritätsprüfung der Kern Dateien (checksum)');
@define('PLUGIN_VERIFY_ADMIN_NAV_CORE', 'Prüfe Kern Dateien (checksum)');
@define('PLUGIN_VERIFY_ADMIN_EXFILES', 'Liste zusätzliche Dateien gegenüber Kern: %s');
@define('PLUGIN_VERIFY_ADMIN_INFILES', 'Prüfe auf ev. gehackte Dateien gegenüber Kern: %s');
@define('PLUGIN_VERIFY_ADMIN_NAV_EXFILES', 'Liste zusätzliche Dateien');
@define('PLUGIN_VERIFY_ADMIN_NAV_INFILES', 'Überprüfe zusätzliche Dateien');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_CORE', 'Vermisste Dateien im Kern');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_EX', 'Zusätzliche Dateien in Installation');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_INFECTED', 'Mögliche infizierte *.php oder *.htm Dateien in Installation');
@define('PLUGIN_VERIFY_ADMIN_ADD_NONE_INFECTED', 'Überprüfung abgschlossen! Es sind keine zusätzlichen *.php oder *.htm Dateien mit "%s" infiziert.');
@define('PLUGIN_VERIFY_ADMIN_ADD_EXCEPTIONS', 'Achtung! Diese Suche musste einige Plugins von der Suche ausnehmen, da diese durch ihre Programmierung eventuell Fehlalarme produzieren. Sie können sich bei den angezeigten Resultaten, auch im Falle keines Resultats, also niemals 100% sicher sein.');
@define('PLUGIN_VERIFY_ADMIN_TIME_DESC', 'Achtung: Diese Prüfungen sind Zeit und Memory intensiv!');
@define('PLUGIN_VERIFY_ADMIN_ADD_DESC_INFECTED', 'Bitte überprüfe diese Dateien in einem Editor auf String wie: "%s" und informiere das \'Serendipty Forum\' board!');
@define('PLUGIN_VERIFY_ADMIN_CHECKSUMS_EMPTY', 'Überprüfung und Datei-Diff unmöglich. Die Checksums Datei ist leer oder weicht vom Original ab! (Möglicherweise unstable Serendipity version installiert.)');
@define('CHECKSUM_FAILED_ABOUT', 'Eine Kern Datei Überprüfung kann fehlschlagen, wenn diese Datei nicht mehr dem Auslieferungszustand entspricht. Dies muss nicht immer auf eine mögliche Infektion zurückzuführen sein. Um sicher zu sein, sollten Kern Dateien niemals verändert oder neu gespeichert werden, außer man weiß und erinnert sich, was man warum getan hat!');

?>
