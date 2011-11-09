<?php # $Id: utf-8/lang_de.inc.php 2011-07-24 14:40:00Z ian $

@define('PLUGIN_VERIFY_OR', 'oder');
@define('PLUGIN_VERIFY_NAME', 'Datei Integrit�tspr�fungen');
@define('PLUGIN_VERIFY_DESCRIPTION', '�berpr�fe und liste gegen�ber S9y Kern und zus�tzlichen Dateien');
@define('PLUGIN_VERIFY_ADMIN_NAME', 'Datei Pr�fungen');
@define('PLUGIN_VERIFY_ADMIN_NAME_MENU', 'Abgleich von S9y Freigabe- und zus�tzlich installierten Dateien, Verify Plugin v. %s');
@define('PLUGIN_VERIFY_ADMIN_CORE', 'Integrit�tspr�fung der Kern Dateien (checksum)');
@define('PLUGIN_VERIFY_ADMIN_NAV_CORE', 'Pr�fe Kern Dateien (checksum)');
@define('PLUGIN_VERIFY_ADMIN_EXFILES', 'Liste zus�tzliche Dateien gegen�ber Kern: %s');
@define('PLUGIN_VERIFY_ADMIN_INFILES', 'Pr�fe auf ev. gehackte Dateien gegen�ber Kern: %s');
@define('PLUGIN_VERIFY_ADMIN_NAV_EXFILES', 'Liste zus�tzliche Dateien');
@define('PLUGIN_VERIFY_ADMIN_NAV_INFILES', '�berpr�fe zus�tzliche Dateien');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_CORE', 'Vermisste Dateien im Kern');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_EX', 'Zus�tzliche Dateien in Installation');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_INFECTED', 'M�gliche infizierte *.php oder *.htm Dateien in Installation');
@define('PLUGIN_VERIFY_ADMIN_ADD_NONE_INFECTED', '�berpr�fung abgschlossen! Es sind keine zus�tzlichen *.php oder *.htm Dateien mit "%s" infiziert.');
@define('PLUGIN_VERIFY_ADMIN_ADD_EXCEPTIONS', 'Achtung! Diese Suche musste einige Plugins von der Suche ausnehmen, da diese durch ihre Programmierung eventuell Fehlalarme produzieren. Sie k�nnen sich bei den angezeigten Resultaten, auch im Falle keines Resultats, also niemals 100% sicher sein.');
@define('PLUGIN_VERIFY_ADMIN_TIME_DESC', 'Achtung: Diese Pr�fungen sind Zeit und Memory intensiv!');
@define('PLUGIN_VERIFY_ADMIN_ADD_DESC_INFECTED', 'Bitte �berpr�fe diese Dateien in einem Editor auf String wie: "%s" und informiere das \'Serendipty Forum\' board!');
@define('PLUGIN_VERIFY_ADMIN_CHECKSUMS_EMPTY', '�berpr�fung und Datei-Diff unm�glich. Die Checksums Datei ist leer oder weicht vom Original ab! (M�glicherweise unstable Serendipity version installiert.)');
@define('CHECKSUM_FAILED_ABOUT', 'Eine Kern Datei �berpr�fung kann fehlschlagen, wenn diese Datei nicht mehr dem Auslieferungszustand entspricht. Dies muss nicht immer auf eine m�gliche Infektion zur�ckzuf�hren sein. Um sicher zu sein, sollten Kern Dateien niemals ver�ndert oder neu gespeichert werden, au�er man wei� und erinnert sich, was man warum getan hat!');

?>
