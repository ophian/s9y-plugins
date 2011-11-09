<?php # lang_cs.inc.php 1.0 2009-05-22 19:51:39 VladaAjgl $

/**
 *  @version 1.0
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/05/22
 */

@define('PLUGIN_DOWNLOADMANAGER_TITLE', 'Downloadmanager');
@define('PLUGIN_DOWNLOADMANAGER_DESC', 'Zaji��uje instalaci Serendipity v�echny funkce download managera. P�i odinstalov�n� jsou odstran�ny v�echny tabulky z datab�ze (ztr�ta v�ech dat)!!!');
@define('PLUGIN_DOWNLOADMANAGER_PAGETITLE', 'Titulek');
@define('PLUGIN_DOWNLOADMANAGER_PAGETITLE_BLAHBLAH', 'tj. to, co se zobrazuje v informa�n�m pruhu okna prohl�e�e je�t� nad menu');
@define('PLUGIN_DOWNLOADMANAGER_HEADLINE', 'Nadpis');
@define('PLUGIN_DOWNLOADMANAGER_HEADLINE_BLAHBLAH', 'tj. to, co je naps�no tu�n�m velk�m p�smem jako n�zev str�nky blogu');
@define('PLUGIN_DOWNLOADMANAGER_PAGEURL', 'Statick� URL adresa');
@define('PLUGIN_DOWNLOADMANAGER_PAGEURL_BLAHBLAH', 'Definuje URL, pod kterou je download mana�er p��stupn� (index.php?serendipity[subpage]=zde_zadan�_jm�no)');
@define('PLUGIN_DOWNLOADMANAGER_PERMALINK', 'Permalink (st�l� odkaz)');
@define('PLUGIN_DOWNLOADMANAGER_PERMALINK_BLAHBLAH', 'Definuje st�lou zkratku, kter� m��e b�t krat�� a srozumiteln�j�� ne� statick� URL adresa (nastaven� v��e). Je t�eba zadat absolutn� HTTP cestu, nav�c mus� kon�it .htm nebo .html! (V�choz� nastaven�: [http://vas_blog.cz/]downloads.html]');
@define('PLUGIN_DOWNLOADMANAGER_ABSINCOMINGPATH', 'Cesta pro p��choz� data');
@define('PLUGIN_DOWNLOADMANAGER_ABSINCOMINGPATH_BLAHBLAH', 'Pln� absolutn� cesta k adres��i, do kter�ho nahr�v�te soubory. Plugin pracuje tak, �e do tohoto adres��e se nahraj� soubory a teprve pak ur��te, kter� maj� b�t nab�zen� ke sta�en�. Ty si pak plugin p�em�st� do adres��e s downloady. (Adres�� mus� b�t vytvo�en a webserver do n�j mus� m�t pr�vo z�pisu!)');
@define('PLUGIN_DOWNLOADMANAGER_ABSDOWNLOADPATH', 'Absolutn� cesta adres��e s downloady');
@define('PLUGIN_DOWNLOADMANAGER_ABSDOWNLOADPATH_BLAHBLAH', 'Pln� absolutn� cesta k adres��i, do kter�ho si bude downloadmanager um�s�ovat soubory, kter� pak budou p��stupn� z blogu. (Adres�� mus� b�t vytvo�en a webserver do n�j mus� m�t pr�vo z�pisu!)');
@define('PLUGIN_DOWNLOADMANAGER_HTTPPATH', 'HTTP cesta k pluginu');
@define('PLUGIN_DOWNLOADMANAGER_HTTPPATH_BLAHBLAH', 'aboslutn� http cesta k pluginu (obvykle "/plugins/serendipity_event_downloadmanager").');
@define('PLUGIN_DOWNLOADMANAGER_DATEFORMAT', 'Form�t data, podle pravidel PHP funkce date(). (v�choz�: "Y/m/d, h:ia")');
@define('PLUGIN_DOWNLOADMANAGER_SHOWFILEDATE', 'Zobrazovat datum souboru');
@define('PLUGIN_DOWNLOADMANAGER_SHOWFILEDATE_BLAHBLAH', 'M� se v seznamu soubor� zobrazovat datum souboru?');
@define('PLUGIN_DOWNLOADMANAGER_SHOWFILENAME', 'Zobrazovat jm�no souboru');
@define('PLUGIN_DOWNLOADMANAGER_SHOWFILENAME_BLAHBLAH', 'M� se v seznamu soubor� zobrazovat jm�no souboru?');
@define('PLUGIN_DOWNLOADMANAGER_SHOWFILESIZE', 'Zobrazovat velikost');
@define('PLUGIN_DOWNLOADMANAGER_SHOWFILESIZE_BLAHBLAH', 'M� se v seznamu soubor� zobrazovat velikost souboru?');
@define('PLUGIN_DOWNLOADMANAGER_SHOWDOWNLOADS', 'Po�et sta�en� souboru');
@define('PLUGIN_DOWNLOADMANAGER_SHOWDOWNLOADS_BLAHBLAH', 'M� se v seznamu soubor� zobrazovat po�et sta�en� souboru?');
@define('PLUGIN_DOWNLOADMANAGER_FILENAME_FIELD', 'Popis pol��ka se jm�nem souboru');
@define('PLUGIN_DOWNLOADMANAGER_FILENAME_FIELD_BLAHBLAH', 'Zde m��ete zm�nit popis pol��ka se jm�nem souboru');
@define('PLUGIN_DOWNLOADMANAGER_FILESIZE_FIELD', 'Popis pol��ka s velikost�');
@define('PLUGIN_DOWNLOADMANAGER_FILESIZE_FIELD_BLAHBLAH', 'Zde m��ete zm�nit popis pol��ka s velikost� souboru');
@define('PLUGIN_DOWNLOADMANAGER_FILEDATE_FIELD', 'Popis pol��ka s datem');
@define('PLUGIN_DOWNLOADMANAGER_FILEDATE_FIELD_BLAHBLAH', 'Zde m��ete zm�nit popis pol��ka s datem vytvo�en� souboru');
@define('PLUGIN_DOWNLOADMANAGER_DLS_FIELD', 'Popis pol��ka s po�tem sta�en�');
@define('PLUGIN_DOWNLOADMANAGER_DLS_FIELD_BLAHBLAH', 'Zde m��ete zm�nit popis pol��ka s po�tem sta�en� souboru');
@define('PLUGIN_DOWNLOADMANAGER_ICONWIDTH', '���ka ikony');
@define('PLUGIN_DOWNLOADMANAGER_ICONWIDTHBLAH', '���ka ikon typu souboru v seznamu soubor�');
@define('PLUGIN_DOWNLOADMANAGER_ICONHEIGHT', 'V��ka ikony');
@define('PLUGIN_DOWNLOADMANAGER_ICONHEIGHT_BLAHBLAH', '���ka ikon typu souboru v seznamu soubor�');
@define('PLUGIN_DOWNLOADMANAGER_SHOWHIDDEN_REGISTERED', 'Zobrazovat registrovan�m u�ivatel�m skryt� kategorie?');
@define('PLUGIN_DOWNLOADMANAGER_SHOWHIDDEN_REGISTERED_BLAHBLAH', 'Maj� se skryt� kategorie zobrazovat registrovan�m a p�ihl�en�m u�ivatel�m?');

@define('PLUGIN_DOWNLOADMANAGER_NO_CATS_FOUND', '��dn� kategorie');
@define('PLUGIN_DOWNLOADMANAGER_CATEGORIES', 'Kategorie');
@define('PLUGIN_DOWNLOADMANAGER_SUBCATEGORIES', 'Podkategorie');
@define('PLUGIN_DOWNLOADMANAGER_CATEGORY', 'Kategorie');
@define('PLUGIN_DOWNLOADMANAGER_NUMBER_OF_DOWNLOADS', 'po�et soubor�');
@define('PLUGIN_DOWNLOADMANAGER_CATNAME', 'Jm�no kategorie:');
@define('PLUGIN_DOWNLOADMANAGER_SUBCAT_OF', 'Podkategorie v:');
@define('PLUGIN_DOWNLOADMANAGER_ADD_CAT', 'P�idat novou kategorii');
@define('PLUGIN_DOWNLOADMANAGER_DEL_FILE', 'Smazat soubor...');
@define('PLUGIN_DOWNLOADMANAGER_DEL_CAT', 'Smazat kategorii (a v�echny soubory v n� obsa�en�!)...');
@define('PLUGIN_DOWNLOADMANAGER_DEL_CAT_NOT_ALLOWD', 'Smaz�n� nen� mo�n� - kategorie obsahuje podkategorie!');
@define('PLUGIN_DOWNLOADMANAGER_DELETE_NOT_ALLOWED', 'Tato kategorie nem��e b�t smaz�na, proto�e obsahuje alespo� jednu dal�� podkategorii!');
@define('PLUGIN_DOWNLOADMANAGER_CAT_NOT_FOUND', 'Kategorie nenalezena!');
@define('PLUGIN_DOWNLOADMANAGER_DLS_IN_THIS_CAT', 'Soubory v t�to kategorii');
@define('PLUGIN_DOWNLOADMANAGER_BACK', 'Zp�t...');
@define('PLUGIN_DOWNLOADMANAGER_FILENAME', 'Jm�no souboru');
@define('PLUGIN_DOWNLOADMANAGER_FILESIZE', 'Velikost');
@define('PLUGIN_DOWNLOADMANAGER_FILEDATE', 'Datum');
@define('PLUGIN_DOWNLOADMANAGER_NUM_DOWNLOADS', 'po�et sta�en�');
@define('PLUGIN_DOWNLOADMANAGER_NUM_DOWNLOADS_BLAH', 'Po�et sta�en�');
@define('PLUGIN_DOWNLOADMANAGER_IMPORT_FILE', 'Importovat soubor z p��choz�ho adres��e do aktu�ln� kategorie...');
@define('PLUGIN_DOWNLOADMANAGER_COPY_NOT_ALLOWED', 'Nelze zkop�rovat soubor z p��choz�ho adres��e!<br />D�vodem m��e b�t nap�. aktivovan� safe_mode.<br />Pro pou��v�n� t�to funkce je t�eba deaktivovat safe_mode!');
@define('PLUGIN_DOWNLOADMANAGER_DELETE_IN_INCOMING_NOT_ALLOWED', 'Webserver nem� dostatek opr�vn�n� pro smaz�n� souboru z p��choz�ho adres��e! Sma�te pros�m soubor ru�n� a potom pozm��te p��stupov� pr�va, aby to od p��t� �lo.');
@define('PLUGIN_DOWNLOADMANAGER_DELETE_IN_DOWNLOADDIR_NOT_ALLOWED', 'Webserver nem� dostatek opr�vn�n� pro smaz�n� souboru z  adres��e download�! Pozm��te p��stupov� pr�va, pak opakujte pokus o smaz�n�.');
@define('PLUGIN_DOWNLOADMANAGER_INCOMINGTABLE', 'P��choz� adres��:');
@define('PLUGIN_DOWNLOADMANAGER_INCOMINGTABLE_BLAHBLAH', 'Nahrajte soubor do tohoto adres��e pomoc� FTP, pokud V�m nejde nahr�t pomoc� funkce php-upload. To se m��e st�t nap�. pokud je soubor p��li� velk�. Php m� toti� omezen� na max. velikost uploadovan�ho souboru - nastaven� v php.ini.<br />Aktu�ln� adres��: ');
@define('PLUGIN_DOWNLOADMANAGER_THIS_FILE', 'Vybran� soubor');
@define('PLUGIN_DOWNLOADMANAGER_EDIT_FILE', 'Editovat soubor');
@define('PLUGIN_DOWNLOADMANAGER_MOVE_TO_CAT', 'P�esunout do');
@define('PLUGIN_DOWNLOADMANAGER_EDIT_FILE_DESC', 'Popis souboru');
@define('PLUGIN_DOWNLOADMANAGER_FILE_EDITED', 'Soubor �sp�n� zm�n�n a ulo�en!');
@define('PLUGIN_DOWNLOADMANAGER_DOWNLOAD_FILE', 'St�hnout soubor');
@define('PLUGIN_DOWNLOADMANAGER_UPLOAD_FILE', 'Nahr�t soubory...');
@define('PLUGIN_DOWNLOADMANAGER_FILE', 'Soubor');
@define('PLUGIN_DOWNLOADMANAGER_UPLOAD_NOT_ALLOWED', 'Nahr�v�n� soubor� nen� povoleno!<br />Povolte je v php.ini (file_uploads)!');
@define('PLUGIN_DOWNLOADMANAGER_ERRORS_OCCOURED', 'B�hem nahr�v�n� souboru se vyskytly chyby!');
@define('PLUGIN_DOWNLOADMANAGER_ERRORS_NOTCOPIED', 'N�sleduj�c� soubory nemohly b�t p�ekop�rov�ny:');
@define('PLUGIN_DOWNLOADMANAGER_ERRORS_TOOBIG', 'N�sleduj�c� soubory jsou p��li� velk�:');
@define('PLUGIN_DOWNLOADMANAGER_NO_FILES_UPLOADED', '��dn� uploadovan� soubory nebyly nalezeny!');
@define('PLUGIN_DOWNLOADMANAGER_MEDIA_LIBRARY', 'Soubory z knihovny m�di�');
@define('PLUGIN_DOWNLOADMANAGER_MEDIA_LIBRARY_BLAHBLAH', 'Do downloadmanagera m��ete p�idat soubory, kter� jsou ji� nahran� v knihovn� m�di�. Pozn.: Tyto soubory se nebudou p�em�s�ovat, pouze se zkop�ruj� a z�stanou i v p�vodn�m adres��i!<br />Aktu�ln� adres��: ');
@define('PLUGIN_DOWNLOADMANAGER_HIDE_TREE', 'Skr�t cel� podstrom t�to kategorie...');
@define('PLUGIN_DOWNLOADMANAGER_UNHIDE_TREE', 'Zobrazit cel� podstrom t�to kategorie...');
@define('PLUGIN_DOWNLOADMANAGER_OPEN_CAT', 'Kliknut� otev�e kategorii pro upload a editaci soubor�...');

@define('PLUGIN_DOWNLOADMANAGER_SHOWDESC_INLIST',       'Zobrazit popis soubor� v seznamu soubor� ke sta�en�');
@define('PLUGIN_DOWNLOADMANAGER_SHOWDESC_INLIST_DESC',  'Pokud chcete generovat kr�tk� seznam soubor�, vypn�te tuto volbu. Pokud chcete poskytnout ke ka�d�mu souboru podrobn�j�� informace, volbu zapn�te.');
@define('PLUGIN_DOWNLOADMANAGER_DOWNLOAD_INLIST',       'P��m� download');
@define('PLUGIN_DOWNLOADMANAGER_DOWNLOAD_INLIST_DESC',  'V�choz� chov�n� downloadmanagera je, �e p�ed sta�en�m souboru zobraz� str�nku s informacemi. Pomoc� tohoto nastaven� m��ete umo�nit p�esko�it tuto str�nku rovnou na stahov�n� souboru. Stahov�n� za�ne jak po kliknut� na jm�no souboru, tak na ikonku.');
@define('PLUGIN_DOWNLOADMANAGER_DOWNLOAD_INLIST_NO',    'Info-str�nka');
@define('PLUGIN_DOWNLOADMANAGER_DOWNLOAD_INLIST_ICON',  'P��m� stahov�n� po kliknut� na ikonu');
@define('PLUGIN_DOWNLOADMANAGER_DOWNLOAD_INLIST_NAME',  'P��m� stahov�n� po kliknut� na jm�no souboru');
@define('PLUGIN_DOWNLOADMANAGER_DOWNLOAD_INLIST_BOTH',  'P��m� stahov�n� po kliknut� na oboj�');
@define('PLUGIN_DOWNLOADMANAGER_ADD_EXISTING',          'Nov� verze existuj�c�ch soubor�...');
@define('PLUGIN_DOWNLOADMANAGER_ADD_EXISTING_DESC',     'Pokud uploadujete soubor, kter� u� existuje, m� se vytvo�it nov� soubor, nebo jen obnovit informace u ji� existuj�c�ho?');
@define('PLUGIN_DOWNLOADMANAGER_ADD_EXISTING_INSERT',   'vytvo�it nov� soubor');
@define('PLUGIN_DOWNLOADMANAGER_ADD_EXISTING_UPDATE',   'aktualizovat star�');