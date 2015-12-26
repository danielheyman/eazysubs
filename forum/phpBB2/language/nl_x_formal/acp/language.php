<?php
/**
*
* acp_language [Dutch]
*
* @package language
* @version $Id: language.php 204 2009-10-11 17:04:22Z rotsblok $
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
	'ACP_FILES'						=> 'Beheerderspaneel taalbestanden',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Hier kunt u taalpakketten installeren/verwijderen. Het standaard taalpakket is gemakeerd met een jokerteken (*).',

	'EMAIL_FILES'			=> 'E-mail-templates',

	'FILE_CONTENTS'				=> 'Bestandsinhoud',
	'FILE_FROM_STORAGE'			=> 'Bestand vanuit de opslag-map',

	'HELP_FILES'				=> 'Helpbestanden',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Geïnstalleerde taalpakketten',
	'INVALID_LANGUAGE_PACK'		=> 'Het geselecteerde taalpakket blijkt niet geldig te zijn. Controleer het taalpakket en upload het opnieuw wanneer het nodig is.',
	'INVALID_UPLOAD_METHOD'		=> 'De geselecteerde uploadmethode is niet geldig, kies een andere methode.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Taaldetails zijn succesvol bijgewerkt.',
	'LANGUAGE_ENTRIES'					=> 'Taalregels',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Hier kunt u bestaande taalregels wijzigen of de nog niet vertaalde regels alsnog vertalen.<br /><strong>Opmerking:</strong> Wanneer u een taalbestand wijzigt, de wijzigingen zullen worden opgeslagen in een aparte map, zodat u ze later kunt downloaden. De wijzigingen zullen voor niemand zichtbaar zijn totdat u het nieuwe bestand op de plaats van het bestaande taalbestand op uw webruimte heeft neerzet.',
	'LANGUAGE_FILES'					=> 'Taalbestanden',
	'LANGUAGE_KEY'						=> 'Taalvariabele',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Dit taalpakket is al geïnstalleerd.',
	'LANGUAGE_PACK_DELETED'				=> 'Het taalpakket <strong>%s</strong> is succesvol verwijderd. Alle gebruikers die deze taal gebruiken worden overgezet naar de standaard forumtaal.',
	'LANGUAGE_PACK_DETAILS'				=> 'Details van het taalpakket',
	'LANGUAGE_PACK_INSTALLED'			=> 'Het taalpakket <strong>%s</strong> is succesvol geïnstalleerd.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokale naam',
	'LANGUAGE_PACK_NAME'				=> 'Naam',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Het geselecteerde taalpakket bestaat niet.',
	'LANGUAGE_PACK_USED_BY'				=> 'Gebruikt door (inclusief robots)',
	'LANGUAGE_VARIABLE'					=> 'Waarde van de variabele',
	'LANG_AUTHOR'						=> 'Auteur van het taalpakket',
	'LANG_ENGLISH_NAME'					=> 'Engelse naam',
	'LANG_ISO_CODE'						=> 'ISO-code',
	'LANG_LOCAL_NAME'					=> 'Lokale naam',

	'MISSING_LANGUAGE_FILE'		=> 'Taalbestand: <strong style="color: red;">%s</strong> ontbreekt',
	'MISSING_LANG_VARIABLES'	=> 'Ontbrekende taalvariabelen',
	'MODS_FILES'				=> 'MODs taalbestanden',

	'NO_FILE_SELECTED'				=> 'U heeft geen taalbestand opgegeven.',
	'NO_LANG_ID'					=> 'U heeft geen taalpakket opgegeven.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'U kunt niet het standaard taalpakket verwijderen.<br />Als u dit taalpakket wilt verwijderen, moet u eerst de standaard forumtaal wijzigen.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Geen niet-geïnstalleerde taalpakketten',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Van opslag-map verwijderen',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Downloadformaat selecteren',
	'SUBMIT_AND_DOWNLOAD'		=> 'Bestand downloaden en versturen',
	'SUBMIT_AND_UPLOAD'			=> 'Bestand uploaden en versturen',

	'THOSE_MISSING_LANG_FILES'			=> 'De volgende taalbestanden ontbreken in de %s taalmap',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'De volgende taalvariabelen ontbreken in het <strong>%s</strong> taalpakket',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Niet-geïnstalleerde taalpakketten',

	'UNABLE_TO_WRITE_FILE'		=> 'Het bestand kan niet worden geschreven naar %s.',
	'UPLOAD_COMPLETED'			=> 'De upload is succesvol voltooid.',
	'UPLOAD_FAILED'				=> 'De upload is mislukt om onbekende redenen. U zult het bestand handmatig moeten vervangen.',
	'UPLOAD_METHOD'				=> 'Uploadmethode',
	'UPLOAD_SETTINGS'			=> 'Uploadinstellingen',

	'WRONG_LANGUAGE_FILE'		=> 'Geselecteerde taalbestand is niet geldig.',
));

?>