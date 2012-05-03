<?php # lang_cs.inc.php 1501.2 2012-01-08 19:58:45 VladaAjgl $

/**
 *  @version 1501.2
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/30
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/05/06
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/15
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2012/01/08
 */

@define('PLUGIN_EVENT_NL2BR_NAME',              'Markup: NL2BR');
@define('PLUGIN_EVENT_NL2BR_DESC',              'M�n� znaky konce ��dku na tagy <br />');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS',      'Seznam html tag�, uvnit� kter�ch nemaj� b�t konce ��dk� nahrazov�ny.');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', 'N�vrhy: "code,pre,geshi,textarea". N�zvy tag� odd�lujte ��rkou. Tip: Zad�van� tagy jsou vyhodnocov�ny jako regul�rn� v�raz.');
@define('PLUGIN_EVENT_NL2BR_PTAGS',              'Pou��t tagy &lt;p&gt;');
@define('PLUGIN_EVENT_NL2BR_PTAGS_DESC',              'Vkl�dat tagy &lt;p&gt; m�sto tag� &lt;br /&gt;');

// Next lines were translated on 2012/01/08
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP',              'Kontrolovat dal�� zna�kovac� pluginy?');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP_DESC',              'Automaticky zkontroluje, jestli jsou nainstalov�ny jin� zna�kovac� pluginy. To je pravda, pokud je pou�it WYSIWYG editor nebo specifick� zna�kovac� pluginy. Pak je plugin NL2BR vypnut.');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG',              'IOSBR izolace - v�choz� nastaven� BR');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG_DESC',              'Tento nov� NE-HTML tag <nl> </nl> umo��uje vypnout p�evod nov�ch ��dk� na tag BR v kusu textu uzav�en�m uvnit� tag�. M��ete ho pou��t v�cekr�t v jednom p��sp�vku, ale nem��ete ho vno�ovat! P��klad: <nl>v tomto textu nebudou p�ev�d�ny znaky nov�ho ��dku na tag BR</nl>');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS',              'Pou��t BR-�ist�-tagy jak n�vratovou hodnotu, pokud je ISOBR zak�z�no');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS_DESC',              'Pokud pou��v�te v p��sp�vku <html-tagy>, kter� nelze �sp�n� pou��t spole�n� s nastaven�m ISOBR, pak tato volba zapnut� bude m�t za n�sledek ignorov�n� znak� nov�ch ��dk� bezprost�edn� za <html-tagy>. V�choz�: (table|thead|tbody|tfoot|th|tr|td|caption|colgroup|col|ol|ul|li|dl|dt|dd)');
@define('PLUGIN_EVENT_NL2BR_CONFIG_ERROR',              'Varov�n�: Nepo��dek v nastaven�! Nastaven� "%s" bylo nastaveno zp�t na "NE", pokud je aktivn� \'%s\'! Je p��pustn� pou��t pouze jednu z t�chto voleb.');