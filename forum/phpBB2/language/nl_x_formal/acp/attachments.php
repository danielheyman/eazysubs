<?php
/**
*
* acp_attachments [Dutch]
*
* @package language
* @version $Id: attachments.php 218 2009-10-12 20:57:40Z Raimon $
* @copyright (c) 2005 phpBB Group, 2007 phpBBservice.nl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Hier kunt u de hoofdinstellingen voor bijlagen en de speciale categorieën configureren.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Hier kunt u extensiegroepen toevoegen, verwijderen, wijzigen of uitschakelen. Met de overige opties kunt u een speciale categorie eraan toevoegen, het download-mechanisme veranderen, en een upload-pictogram opgeven dat weergegeven wordt voor de bijlagen die bij de desbetreffende groep horen.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Hier kunt u alle toegestaande extenties beheren. Om de extenties te activeren gaat u naar het beheerderspaneel van de extentiegroepen. Wij raden u streng aan om geen script-extentsies toe te staan (zoals <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, enzovoort…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Hier kunt u berichtloze bestanden zien. Dit gebeurt meestal als gebruikers bezig zijn met het toevoegen van bestanden, maar ze plaatsen het bericht nog niet. Hier kunt u deze bestanden verwijderen of u kunt ze toevoegen aan bestaande berichten. Voor het toevoegen aan berichten heeft u wel een geldig bericht-ID nodig, u moet dit ID zelf bepalen. Dit zorgt er voor dat de bestaande geüploade bijlagen wordt toegevoegd aan het bericht dat u heeft opgegeven.',
	'ADD_EXTENSION'						=> 'Extensie toevoegen',
	'ADD_EXTENSION_GROUP'				=> 'Extensiegroep toevoegen',
	'ADMIN_UPLOAD_ERROR'				=> 'Er zijn fouten opgetreden bij het toevoegen van het bestand: “%s”.',
	'ALLOWED_FORUMS'					=> 'Toegestaande forums',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'In staat om bestanden met de toegewezen extenties te plaatsen in de geselecteerde ( of in alle indien geselecteerde ) forums.',
	'ALLOWED_IN_PM_POST'				=> 'Toegestaan',
	'ALLOW_ATTACHMENTS'					=> 'Bijlagen toestaan',
	'ALLOW_ALL_FORUMS'					=> 'Toestaan in alle forums',
	'ALLOW_IN_PM'						=> 'Toegestaan in privéberichten',
	'ALLOW_PM_ATTACHMENTS'				=> 'Bijlagen toestaan in privéberichten',
	'ALLOW_SELECTED_FORUMS'				=> 'Alleen de forums die hieronder zijn geselecteerd',
	'ASSIGNED_EXTENSIONS'				=> 'Toegewezen extensies',
	'ASSIGNED_GROUP'					=> 'Toegewezen extensiegroep',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensies',
	'ATTACH_EXT_GROUPS_URL'				=> 'Extensiegroepen',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximale bestandsgrootte',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'De maximale grootte van elk bestand, waarbij 0 ongelimiteerd is.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximale bestandsgrootte voor bijlagen in privéberichten',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'De maximale grootte van elk bestand die kan worden toegevoegd aan een privébericht, waarbij 0 ongelimiteerd is.',
	'ATTACH_ORPHAN_URL'					=> 'Berichtloze bijlagen',
	'ATTACH_POST_ID'					=> 'Bericht-ID',
	'ATTACH_QUOTA'						=> 'Maximale opslagruimte voor bijlagen',
	'ATTACH_QUOTA_EXPLAIN'				=> 'De maximale opslagruimte die beschikbaar is voor bijlagen voor het hele forum, waarbij 0 ongelimiteerd is.',
	'ATTACH_TO_POST'					=> 'Bijlage toevoegen aan het bericht',

	'CAT_FLASH_FILES'			=> 'Flash-bestanden',
	'CAT_IMAGES'				=> 'Afbeeldingen',
	'CAT_QUICKTIME_FILES'		=> 'QuickTime-mediabestanden',
	'CAT_RM_FILES'				=> 'RealMedia-mediabestanden',
	'CAT_WM_FILES'				=> 'Windows Media-mediabestanden',
	'CHECK_CONTENT'				=> 'Controleer bijlagenbestanden',
	'CHECK_CONTENT_EXPLAIN'		=> 'Sommige browsers kunnen worden beetgenomen, zodat ze aannemen dat er een verkeerde mimetype is voor de geüploade bestanden. Deze optie verzekert u dat zulke bestanden die dit veroorzaken worden geweigerd.',
	'CREATE_GROUP'				=> 'Nieuwe groep aanmaken',
	'CREATE_THUMBNAIL'			=> 'Miniatuur aanmaken',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Voor elke mogelijke situaties een miniatuurafbeelding aanmaken.',

	'DEFINE_ALLOWED_IPS'			=> 'Toegestaande IP-adressen/hostnamen opgeven',
	'DEFINE_DISALLOWED_IPS'			=> 'Niet-toegestaande IP-adressen/hostnamen opgeven',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'U kunt meerdere IP-adressen of hostnamen in één keer verbannen door elk adres op een aparte regel in te voeren. Om een reeks van IP-adressen toe te voegen, onderscheidt u ze met het begin en het einde met een liggend streepje (-), een asterix “*” kunt u gebruiken als jokerteken.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'U kunt meerdere IP-adressen verwijderen (of uitsluiten) doormiddel van één keer de juiste combinatie van de muis en het toetsenbord te gebruiken van uw computer en browser. Uitgesloten IP-adressen hebben een blauwe achtergrond.',
	'DISPLAY_INLINED'				=> 'Afbeeldingen in berichten weergeven',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Als het is ingesteld op nee, dan zal de afbeeldingsbijlagen worden weergegeven als een link.',
	'DISPLAY_ORDER'					=> 'Bijlagen sorteervolgorde weergeven',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Bijlagen sorteren op plaatsingstijd',

	'EDIT_EXTENSION_GROUP'			=> 'Extensiegroep wijzigen',
	'EXCLUDE_ENTERED_IP'			=> 'Schakel dit in om het ingevoerde IP-adres of de ingevoerde hostnaam uit te sluiten.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'IP-adres uitsluiten van toegestaande IP-adressen/hostnamen',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'IP-adres uitsluiten van niet-toegestaande IP-adressen/hostnamen',
	'EXTENSIONS_UPDATED'			=> 'Extensies zijn succesvol bijgewerkt.',
	'EXTENSION_EXIST'				=> 'De extensie %s bestaat al.',
	'EXTENSION_GROUP'				=> 'Extensiegroep',
	'EXTENSION_GROUPS'				=> 'Extensiegroepen',
	'EXTENSION_GROUP_DELETED'		=> 'Extensiegroep succesvol verwijderd.',
	'EXTENSION_GROUP_EXIST'			=> 'De extensiegroep %s bestaat al.',
	
	'EXT_GROUP_ARCHIVES'			=> 'Archieven',
	'EXT_GROUP_DOCUMENTS'			=> 'Documenten',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadbare bestanden',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash bestanden',
	'EXT_GROUP_IMAGES'				=> 'Afbeeldingen',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Standaard tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',	

	'GO_TO_EXTENSIONS'		=> 'Naar het extensiebeheer gaan',
	'GROUP_NAME'			=> 'Groepsnaam',
	
	'IMAGE_LINK_SIZE'			=> 'Afmetingen afbeeldingslink',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Afbeeldingsbijlagen weergeven als tekst in een bericht als de afbeelding groter is dan dit. Om dit uit te schakelen, stelt u de waardes in op 0px bij 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick-pad',
	'IMAGICK_PATH_EXPLAIN'		=> 'Het volledige pad naar het imagemagick-conversiehulpmiddel, bijvoorbeeld: <samp>/usr/bin/</samp>.',	

	'MAX_ATTACHMENTS'				=> 'Maximaal aantal bijlagen per bericht',
	'MAX_ATTACHMENTS_PM'			=> 'Maximaal aantal bijlagen per privébericht',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximale bestandsgrootte',
	'MAX_IMAGE_SIZE'				=> 'Maximale afmetingen van een afbeelding',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximale grootte van een afbeeldingbijlagen. Om de afmetingscontrole te kunnen uitschakelen, dient u beide waardes in te stellen op 0px bij 0px.',
	'MAX_THUMB_WIDTH'				=> 'Maximale miniatuurbreedte in pixels',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Een gegenereerde miniatuur zal niet de breedte overschrijven die hier is ingesteld.',
	'MIN_THUMB_FILESIZE'			=> 'Minimale bestandsgrootte van een miniatuur',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Geen minatuur aanmaken voor afbeeldingen die kleiner zijn dan dit.',
	'MODE_INLINE'					=> 'Inline', // inline? in het bericht plaatsten? of anders gealinieerd...
	'MODE_PHYSICAL'					=> 'Fysiek',

	'NOT_ALLOWED_IN_PM'			=> 'Alleen toegestaan in berichten',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Niet toegestaan',
	'NOT_ASSIGNED'				=> 'Niet toegewezen',
	'NO_EXT_GROUP'				=> 'Geen',
	'NO_EXT_GROUP_NAME'			=> 'Er is geen groepsnaam ingevoerd',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Er is geen extensiegroep opgegeven.',
	'NO_FILE_CAT'				=> 'Geen',
	'NO_IMAGE'					=> 'Geen afbeelding',
	'NO_THUMBNAIL_SUPPORT'		=> 'Ondersteuning voor miniatuur is uitgeschakeld. Om het goed te laten functioneren moet er een GD-extensie beschikbaar zijn, of imagemagick moet geïnstalleerd zijn. Beide waren niet gevonden.',
	'NO_UPLOAD_DIR'				=> 'De upload-directory die u heeft opgegeven bestaat niet.',
	'NO_WRITE_UPLOAD'			=> 'De upload-directory die u heeft opgegeven kan niet worden beschreven. Pas de permissies aan, zodat de webserver naar die directory kan schrijven.',

	'ONLY_ALLOWED_IN_PM'	=> 'Alleen toegestaan in privéberichten',
	'ORDER_ALLOW_DENY'		=> 'Toestaan',
	'ORDER_DENY_ALLOW'		=> 'Weigeren',

	'REMOVE_ALLOWED_IPS'		=> '<em>Toegestaande</em> IP-adressen/hostnamen verwijderen of uitsluiten',
	'REMOVE_DISALLOWED_IPS'		=> '<em>Geweigerde</em> IP-adressen/hostnamen verwijderen of uitsluiten',

	'SEARCH_IMAGICK'				=> 'Zoeken naar Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Toegestaande/weigeringslijst',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Verander het standaard gedrag wanneer beveiligde downloads zijn ingeschakeld, van de toegestaande/weigeringslijst naar dat van een <strong>witte lijst</strong> (toestaan) of een <strong>zwarte lijst</strong> (weigeren).',
	'SECURE_DOWNLOADS'				=> 'Beveiligde downloads inschakelen',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Als deze optie is ingeschakeld, zit er op downloads een limiet, die gebonden zijn aan IP-adressen/hostnamen die u opgeeft.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Beveiligde downloads zijn niet ingeschakeld. Deze instelling zal alleen effect hebben als beveiligde downloas zijn ingeschakeld.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'De IP-lijst is succesvol bijgewerkt.',
	'SECURE_EMPTY_REFERRER'			=> 'Lege verwijzingen toestaan',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Beveiligde downloads zijn gebaseerd op een verwijzing. Wilt u de downloads voor diegene die de verwijzing weglaat toestaan?',
	'SETTINGS_CAT_IMAGES'			=> 'Afbeeldingcategorie-instellingen',
	'SPECIAL_CATEGORY'				=> 'Speciale categorie',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Speciale categorieën verschillen tussen de manier waarop ze worden gepresenteerd in een bericht.',
	'SUCCESSFULLY_UPLOADED'			=> 'Succesvol geüpload.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extensiegroep is succesvol toegevoegd.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extensiegroep is succesvol gewijzigd.',

	'UPLOADING_FILES'				=> 'Bezig met het uploaden van de bestanden',
	'UPLOADING_FILE_TO'				=> 'Bezig met het uploaden van het bestand “%1$s” naar bericht nummer %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'U heeft geen permissies om bestanden te uploaden naar het forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload-directory',
	'UPLOAD_DIR_EXPLAIN'			=> 'Upload-directory voor bijlagen. Vergeet niet, als u deze directory verandert, wanneer er zich al bestaande geüploade bijlagen bevinden, moet u ze handmatig kopiëren naar de nieuwe locatie.',
	'UPLOAD_ICON'					=> 'Upload-pictogram',
	'UPLOAD_NOT_DIR'				=> 'De upload-locatie die u heeft opgegeven blijkt geen directory te zijn.',
));

?>