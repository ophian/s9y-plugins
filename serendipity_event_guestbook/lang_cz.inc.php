<?php # lang_cz.inc.php 1.1 2011-04-17 14:21:59 VladaAjgl $

/**
 *  @version 1.1
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/02/20
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/04/17
 */
@define('PLUGIN_GUESTBOOK_HEADLINE',		'Hlavn� nadpis');
@define('PLUGIN_GUESTBOOK_HEADLINE_BLAHBLAH',		'Hlavn� nadpis str�nky s n�v�t�vn� knihou.');
@define('PLUGIN_GUESTBOOK_TITLE',		'N�v�t�vn� kniha');
@define('PLUGIN_GUESTBOOK_TITLE_BLAHBLAH',		'Zobrazuje n�v�t�vn� knihu jako str�nku blogu. Vzhled je toto�n� s ostatn�mi str�nkami.');
@define('PLUGIN_GUESTBOOK_PERMALINK',		'St�l� odkaz');
@define('PLUGIN_GUESTBOOK_PERMALINK_BLAHBLAH',		'Definuje st�l� URL odkaz. (N�v�t�vn� knihu pak m��ete odkazovat pomoc� tohoto odkazu a ne pomoc� nep�ehledn�ho vnit�n�ho odkazu, kter� pou��v� Serendipity.) Je t�eba zadat absolutn� HTTP cestu, v�etn� ukon�ovac�ho .htm nebo .html!');
@define('PLUGIN_GUESTBOOK_PAGETITLE',		'Nadpis statick� str�nky a URL');
@define('PLUGIN_GUESTBOOK_PAGETITLE_BLAHBLAH',		'Nadpis str�nky pro modul "Statick� str�nky". Pozor: tento nadpis tak� definuje URL adresu statick� str�nky (index.php?serendipity[subpage]=jmeno)');
@define('PLUGIN_GUESTBOOK_FORMORDER',		'Formul�� n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_FORMORDER_BLAHBLAH',		'Kde m� b�t um�st�n formul�� pro posl�n� vzkazu.');
@define('PLUGIN_GUESTBOOK_FORMORDER_TOP',		'Naho�e');
@define('PLUGIN_GUESTBOOK_FORMORDER_BOTTOM',		'Dole');
@define('PLUGIN_GUESTBOOK_FORMORDER_POPUP',		'Vyskakovac� okno');

@define('PLUGIN_GUESTBOOK_EMAILADMIN',		'Poslat mail administr�torovi?');
@define('PLUGIN_GUESTBOOK_EMAILADMIN_BLAHBLAH',		'Pokud nastaveno na "Ano", pak bude administr�tor mailem upozorn�n na ka�d� nov� p��sp�vek.');
@define('PLUGIN_GUESTBOOK_TARGETMAILADMIN',		'Email administr�tora');
@define('PLUGIN_GUESTBOOK_TARGETMAILADMIN_BLAHBLAH',		'Zadejte pros�m platnou emailovou adresu, na kterou maj� b�t pos�l�na ozn�men� o nov�ch vzkazech.');
@define('PLUGIN_GUESTBOOK_SHOWEMAIL',		'Po�adovat email u�ivatel�?');
@define('PLUGIN_GUESTBOOK_SHOWEMAIL_BLAHBLAH',		'M� se zobrazovat pole, kter� ��d� po u�ivateli zad�n� emailov� adresy?');
@define('PLUGIN_GUESTBOOK_SHOWURL',		'Po�adovat domovskou str�nku?');
@define('PLUGIN_GUESTBOOK_SHOWURL_BLAHBLAH',		'M� se zobrazovat pole, kter� ��d� po u�ivateli zad�n� domovsk� (www) str�nky?');
@define('PLUGIN_GUESTBOOK_SHOWCAPTCHA',		'Zobrazovat kryptogramy?');
@define('PLUGIN_GUESTBOOK_SHOWCAPTCHA_BLAHBLAH',		'Maj� se p�i zad�v�n� vzkaz� pou��vat KRYPTOGRAMY? (vy�aduje aktivn� modul Spamblock)');
@define('PLUGIN_GUESTBOOK_NUMBER',		'Po�et vzkaz� na str�nku');
@define('PLUGIN_GUESTBOOK_NUMBER_BLAHBLAH',		'Kolik vzkaz� se m� zobrazovat na jedn� str�nce?');
@define('PLUGIN_GUESTBOOK_WORDWRAP',		'Znak� na ��dku (pro zalamov�n�)');
@define('PLUGIN_GUESTBOOK_WORDWRAP_BLAHBLAH',		'Po kolika znac�ch m� b�t vlo�en znak nov� ��dky?');
@define('PLUGIN_GUESTBOOK_ERROR_DATA',		'Jm�no, email ani vlastn� text vzkazu nesm� b�t pr�zdn�.');

@define('PLUGIN_GUESTBOOK_EMAIL',		'Emailov� adresa');
@define('PLUGIN_GUESTBOOK_INTRO',		'�vodn� text (nepovinn�)');
@define('PLUGIN_GUESTBOOK_MESSAGE',		'Vzkaz');
@define('PLUGIN_GUESTBOOK_SENT',		'Text kter� se m� zobrazit po odesl�n� vzkazu');
@define('PLUGIN_GUESTBOOK_SENT_HTML',		'V� vzkaz byl �sp�n� odesl�n!');
@define('PLUGIN_GUESTBOOK_ERROR_HTML',		'P�i odes�l�n� vzkazu se objevila chyba!');
@define('PLUGIN_GUESTBOOK_ERROR_DATA',		'Jm�no, email ani vlastn� text vzkazu nesm� b�t pr�zdn�.');
@define('PLUGIN_GUESTBOOK_ARTICLEFORMAT',		'Form�tovat jako �l�nek?');
@define('PLUGIN_GUESTBOOK_ARTICLEFORMAT_BLAHBLAH',		'Pokud je zapnuto, v�stup je automaticky form�tov�n jako b�n� �l�nek/p��sp�vek (co se t��e barev, okraj�, atd.) (v�choz�: ano)');
@define('PLUGIN_GUESTBOOK_CAPTCHAWARNING',		'Pozor, kryptogramy jsou pou��v�ny!!!');
@define('PLUGIN_GUESTBOOK_PROTECTION',		'Emailov� adresa bude p�em�n�na do form�tu: "u�ivatel at email dot com"');
@define('PLUGIN_GUESTBOOK_DBDONE',		'Vzkaz do n�v�t�vn� knihy byl ulo�en!');
@define('PLUGIN_GUESTBOOK_USER_LOGGEDOFF',		'U�ivatel se odhl�sil.');
@define('PLUGIN_GUESTBOOK_USERSDATE_OF_ENTRY',		'napsal');
@define('PLUGIN_GUESTBOOK_UNKNOWN_ERROR',		'Neo�et�en� chyba! Kontaktujte pros�m administr�tora str�nek.');
@define('PLUGIN_GUESTBOOK_TIMESTAMP_THE',		' ');
@define('PLUGIN_GUESTBOOK_ALTER_OLDTABLE_DONE',		'Datab�zov� tabulka �sp�n� aktualizov�na (ALTER).');
@define('PLUGIN_GUESTBOOK_INSTALL_NEWTABLE_DONE',		'Datab�zov� tabulka �sp�n� vytvo�ena.');
@define('PLUGIN_GUESTBOOK_SUBMITFORM',		'Vlo�te nov� vzkaz do n�v�t�vn� knihy');

@define('BODY',		'Vzkaz');
@define('SUBMIT',		'Odeslat vzkaz');
@define('REFRESH',		'Obnovte pros�m str�nku, pak uvid�te V� vzkaz.');

@define('GUESTBOOK_NEXTPAGE',		'dal�� str�nka');
@define('GUESTBOOK_PREVPAGE',		'p�edchoz� str�nka');

@define('TEXT_DELETE',		'smazat');
@define('TEXT_SAY',		'�ekl');
@define('TEXT_EMAIL',		'Email');
@define('TEXT_NAME',		'Jm�no');
@define('TEXT_HOMEPAGE',		'WWW str�nka');
@define('TEXT_EMAILSUBJECT',		'Nov� vzkaz do n�v�t�vn� knihy');
@define('TEXT_EMAILTEXT',		"%s pr�v� napsal do Tv� n�v�t�vn� knihy:\n%s");
@define('TEXT_CONVERTBOLDUNDERLINE',		'Text mezi hv�zdi�kami bude tu�n� (*slovo*), mezi podtr��tky podtr�en� (_slovo_).');
@define('TEXT_CONVERTSMILIES',		'B�n� smajl�ci jako :-) a ;-) budou nahrazeni obr�zky.');
@define('TEXT_IMG_DELETEENTRY',		'Smazat vzkaz');
@define('TEXT_IMG_LASTMODIFIED',		'naposledy zm�n�no');
@define('TEXT_USERS_HOMEPAGE',		'Domovsk� str�nka');
@define('ERROR_NAMEEMPTY',		'Zadejte pros�m sv� jm�no.');
@define('ERROR_TEXTEMPTY',		'Zadejte pros�m text vzkazu.');
@define('ERROR_EMAILEMPTY',		'Zadejte pros�m platnou emailovou adresu.');
@define('ERROR_DATATOSHORT',		'V� vzkaz mus� m�t alespo� 3, v poli pro koment�� pak 10 znak�.');
@define('ERROR_NOVALIDEMAIL',		'Va�e emailov� adresa vypad� neplatn�: ');
@define('ERROR_NOINPUT',		'Zadejte pros�m jm�no, emailovou adresu a vzkaz');
@define('ERROR_ISFALSECAPTCHA',		'Nespr�vn� zadan� KRYPTOGRAM!');
@define('ERROR_NOCAPTCHASET',		'Nastaven� KRYPTOGRAM� nejsp� nen� spr�vn�!');
@define('ERROR_UNKNOWN',		'Vyskytla se neo�et�en� chyba. Zkuste akci znovu, nebo kontaktujte administr�tora str�nky. D�ky za pochopen�.');
@define('ERROR_OCCURRED',		'Vyskytly se chyby:');

@define('THANKS_FOR_ENTRY',		'Pod�kov�n� za vzkaz:');
@define('WINDOW_CLOSE',		'Zav��t okno');
@define('QUESTION_DELETE',		'Opravdu si p�ejete smazat vzkaz od %s?');

@define('PAGINATOR_TO',		'Do');
@define('PAGINATOR_FIRST',		'Prvn�');
@define('PAGINATOR_PREVIOUS',		'P�edchoz�');
@define('PAGINATOR_NEXT',		'N�sleduj�c�');
@define('PAGINATOR_LAST',		'Posledn�');
@define('PAGINATOR_PAGE',		'Str�nka.');
@define('PAGINATOR_RANGE',		' do ');
@define('PAGINATOR_OFFSET',		', celkem ');
@define('PAGINATOR_ENTRIES',		' vzkaz�. ');

//
//  serendipity_plugin_guestbook.php
//
@define('PLUGIN_GUESTSIDE_NAME',		'N�v�t�vn� kniha - postrann� blok');
@define('PLUGIN_GUESTSIDE_BLAHBLAH',		'Zobrazuje nejnov�j�� vzkazy z n�v�t�vn� knihy v bloku v postrann�m sloupci');
@define('PLUGIN_GUESTSIDE_TITLE',		'Nadpis bloku');
@define('PLUGIN_GUESTSIDE_TITLE_BLAHBLAH',		'Zadejte nadpis bloku se vzkazy');
@define('PLUGIN_GUESTSIDE_SHOWEMAIL',		'Zobrazovat email');
@define('PLUGIN_GUESTSIDE_SHOWEMAIL_BLAHBLAH',		'Maj� se zobrazovat emailov� adresy p�isp�vatel�?');
@define('PLUGIN_GUESTSIDE_SHOWHOMEPAGE',		'Zobrazovat domovsk� str�nky');
@define('PLUGIN_GUESTSIDE_SHOWHOMEPAGE_BLAHBLAH',		'Maj� se zobrazovat domovsk� (www) str�nky p�isp�vatele?');
@define('PLUGIN_GUESTSIDE_MAXCHARS',		'Maxim�ln� znak�');
@define('PLUGIN_GUESTSIDE_MAXCHARS_BLAHBLAH',		'Nejv�t�� povolen� d�lka (po�et znak�) p��sp�veku');
@define('PLUGIN_GUESTSIDE_MAXITEMS',		'Maxim�ln� vzkaz�');
@define('PLUGIN_GUESTSIDE_MAXITEMS_BLAHBLAH',		'Zadejte po�et vzkaz�, kter� se m� zobrazovat v bloku v postrann�m sloupci');
@define('PLUGIN_GUESTSIDE_NOENTRIES',		'Je�t� nikdo nezanechal vzkaz v n�v�t�vn� knize.');

// Next lines were translated on 2011/04/17
@define('PLUGIN_GUESTBOOK_DBDONE_APP',		'(Jakmile bude p��sp�vek odsouhlasen, objev� se v n�v�t�vn� knize.)');
@define('ERROR_DATANOTAGS',		'P��sp�vek nen� platn�. Nejsou povoleny html tagy nebo bbcode.');
@define('PLUGIN_GUESTBOOK_SHOWAPP',		'Schvalovat p��sp�vky?');
@define('PLUGIN_GUESTBOOK_SHOWAPP_BLAHBLAH',		'P��sp�vky do n�v�t�vn� knihy budou p�edkl�dany administr�torovi ke schv�len� p�edt�m, ne� se zobraz� na str�nce (v�choz�: ne).');
@define('PLUGIN_GUESTBOOK_APP_ENTRY',		'V� p��sp�vek %s byl ulo�en');
@define('PLUGIN_GUESTBOOK_CHECKBOXALERT',		'Za�krtn�te pol��ko u p��sp�vku, kter� chcete schv�lit, zm�nit nebo vymazat.');
@define('PLUGIN_GUESTBOOK_ADMINBODY',		'Odpov�� admina');
@define('PLUGIN_GUESTBOOK_FORM_RIGHT_BBC',		'Pou��vejte BBcode (strong, italic, underline, strike, quotes).');
@define('PLUGIN_GUESTBOOK_AUTOMODERATE',		'Pou��t automatick� schvalov�n�?');
@define('PLUGIN_GUESTBOOK_AUTOMODERATE_BLAHBLAH',		'Nastavuje p��sp�vky n�v�t�vn� knihy, aby byly administr�torem schvalov�ny p�e zobrazen�m. Pokud plugin SPAMBLOCK nejd��ve nastav� p��sp�vek ke schv�len�, hled�n� stop-slov v�dy skon�� s pozitivn�m v�sledkem (v�choz�: ne).');
@define('PLUGIN_GUESTBOOK_AUTOMODERATE_ERROR',		'V� p��sp�vek byl ozna�en ke schv�len� administr�torem.');
@define('PLUGIN_GUESTBOOK_CONFIG_ERROR',		'V�straha nevhodn�ho nastaven� konfigura�n�ho souboru! Volba n�v�t�vn� knihy: "Automatick� schvalov�n�" je nastaveno na v�choz� hodnotu "ne", kdy� je "schvalov�n� p��sp�vk�" aktivn�! Lze pou��t pouze jednu ze zm�n�n�ch voleb, ne sou�asn�.');
@define('PLUGIN_GUESTBOOK_FILTER_ENTRYCHECKS',		'Speci�ln� kontrola t�la p��sp�vku');
@define('PLUGIN_GUESTBOOK_FILTER_ENTRYCHECKS_BLAHBLAH',		'Vyjmenujte speci�ln� kontroly t�la p��sp�vk�. Povoleny jsou regu�lrn� v�razy odd�len� st�edn�kem (;). Speci�ln� znaky mus�te escapovat pomoc� "\". Pokud ponech�te toto pole pr�zdn�, nebudou prov�d�ny ��dn� speci�ln� kontroly!');
@define('PLUGIN_GUESTBOOK_ADMIN_NAME',		'N�v�t�vn� kniha');
@define('PLUGIN_GUESTBOOK_ADMIN_NAME_MENU',		'N�v�t�vn� kniha verze %s - Administra�n� menu');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC',		'N�v�t�vn� kniha - administrace datab�zov�ch tabulek pluginu');
@define('PLUGIN_GUESTBOOK_ADMIN_VIEW',		'N�v�t�vn� kniha - zobrazit p��sp�vky');
@define('PLUGIN_GUESTBOOK_ADMIN_VIEW_NORESULT',		'V n�v�t�vn� knize nejsou ��dn� schv�len� p��sp�vky!');
@define('PLUGIN_GUESTBOOK_ADMIN_VIEW_DESC',		'Seskupovat podle data [nejnov�j�� naho�e].');
@define('PLUGIN_GUESTBOOK_ADMIN_APP',		'N�v�t�vn� kniha - schvalov�n� p��sp�vk�');
@define('PLUGIN_GUESTBOOK_ADMIN_APP_DESC',		'Seskupovat podle data [nejnov�j�� naho�e].');
@define('PLUGIN_GUESTBOOK_ADMIN_APP_NORESULT',		'��dn� nov� p��sp�vky ke schv�len�!');
@define('PLUGIN_GUESTBOOK_ADMIN_ERASE',		'N�v�t�vn� kniha - smazat p��sp�vky');
@define('PLUGIN_GUESTBOOK_ADMIN_ADD',		'N�v�t�vn� kniha - p�idat p��sp�vek');
@define('PLUGIN_GUESTBOOK_ADMIN_DROP_SURE',		'Ur�it� chcete smazat celou datab�zovou tabulku n�v�t�vn� knihy v�etn� v�ech p��sp�vk�? Pros�m potvr�te!');
@define('PLUGIN_GUESTBOOK_ADMIN_DROP_OK',		'Datab�zov� tabulka %s byla �sp�n� smaz�na!');
@define('PLUGIN_GUESTBOOK_ADMIN_DUMP_SELF',		'P�ed pokra�ov�n�m byste m�li pro jistotu prov�st mysql dump (z�loha) pomoc� PhpMyAdmina nebo pomoc� z�lohovac�ho odkazu v��e!');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DUMP',		'Administrace datab�ze - z�loha');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DUMP_DESC',		'z�lohujte datab�zovou tabulku n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DUMP_TITLE',		'z�loha hodnot z datab�zov� tabulky');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DUMP_DONE',		'Datab�zov� tabulka n�v�t�vn� knihy byla �sp�n� z�lohov�na!');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_INSERT',		'Administrace datab�za - vlo�en�');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_INSERT_DESC',		'vlo�it do datab�zov� tabulky n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_INSERT_TITLE',		'vlo�it hodnoty do datab�zov� tabulky n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_INSERT_MSG',		'Proto�e tato operace nen� trivi�ln�, pou�ijte pros�m datab�zov� administra�n� n�stroje jako nap��klad PhpMyAdmin pro znovu napln�n� datab�ze!');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_ERASE',		'Administrace datab�ze - vymaz�n�');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_ERASE_DESC',		'Odstranit datab�zovou tabulku n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_ERASE_TITLE',		'Maz�n� datab�zov� tabulky n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DELFILE_MSG',		'Datab�zov� tabulka <u>%s</u> byla �sp�n� vymaz�na');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DOWNLOAD',		'Administrace datab�ze - download');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DOWNLOAD_DESC',		'St�hnout do souboru z�lohu datab�zov� tabulky n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DOWNLOAD_TITLE',		'Sta�en� z�lohy datab�zov� tabulky');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_DOWNLOAD_MSG',		'Neexistuje ��dn� z�loha datab�zov� tabulky n�v�t�vn� knihy!');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_NIXDA_DESC',		'��dn� z�loha tabulky n�v�t�vn� knihy');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_NIXDA_TITLE',		'Adminsitrace - chyba');
@define('PLUGIN_GUESTBOOK_ADMIN_DBC_NIXDA_NOBACKUP',		'Vybran� datab�zov� tabulka nemohla b�t z�lohov�na!');