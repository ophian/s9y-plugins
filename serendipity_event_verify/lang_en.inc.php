<?php # $Id: lang_en.inc.php 2011-07-24 14:35:00Z ian $

@define('PLUGIN_VERIFY_OR', 'or');
@define('PLUGIN_VERIFY_NAME', 'Verify Files');
@define('PLUGIN_VERIFY_DESCRIPTION', 'Check and list against core and additional files');
@define('PLUGIN_VERIFY_ADMIN_NAME', 'File verification');//Verify installation files
@define('PLUGIN_VERIFY_ADMIN_NAME_MENU', 'Verification of core and additional files, Plugin v. %s');
@define('PLUGIN_VERIFY_ADMIN_CORE', 'Verify core files by checksum');
@define('PLUGIN_VERIFY_ADMIN_NAV_CORE', 'Verify core files');
@define('PLUGIN_VERIFY_ADMIN_EXFILES', 'View additional files extend this Serendipity Release: %s');
@define('PLUGIN_VERIFY_ADMIN_INFILES', 'Verify possible hacked files extend this S9y Release: %s');
@define('PLUGIN_VERIFY_ADMIN_NAV_EXFILES', 'View additional files');
@define('PLUGIN_VERIFY_ADMIN_NAV_INFILES', 'Verify additional files');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_CORE', 'Missing files from Core');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_EX', 'Additional files in Installation');
@define('PLUGIN_VERIFY_ADMIN_ADD_HEAD_INFECTED', 'Possible infected *.php or *.htm files in Installation');
@define('PLUGIN_VERIFY_ADMIN_ADD_NONE_INFECTED', 'Check done! There are no *.php or *.htm files infected with: "%s".');
@define('PLUGIN_VERIFY_ADMIN_ADD_EXCEPTIONS', 'Be aware! This search did exclude some plugin files using hackish commands as part of their program. If you got some or even no results, this still isn\'t 100% trustable data.');
@define('PLUGIN_VERIFY_ADMIN_TIME_DESC', 'Beware: These checks may take their time and consume some memory.');
@define('PLUGIN_VERIFY_ADMIN_ADD_DESC_INFECTED', 'Please check these files with an editor for strings like: "%s" and inform the \'Serendipty Forum\' board!');
@define('PLUGIN_VERIFY_ADMIN_CHECKSUMS_EMPTY', 'Integrity check and file diff impossible. Checksums file is empty or differs by version! (Possible unstable Serendipity version running.)');
@define('CHECKSUM_FAILED_ABOUT', 'Checksum files can fail if these files were touched somehow. This does not mean they are infected in every case. To be sure, never touch a core file, except you know and remember what you were doing!');
?>
