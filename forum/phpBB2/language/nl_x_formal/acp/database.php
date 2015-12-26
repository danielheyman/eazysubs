<?php
/**
*
* acp_database [Dutch]
*
* @package language
* @version $Id: database.php 203 2009-10-09 23:27:48Z rotsblok $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Hier kunt u een back-up maken van al uw phpBB gerelateerde gegevens. U mag het geresulteerde archief in uw <samp>store/</samp>-map opslaan of het direct downloaden. Afhankelijk van uw server-configuratie kunt u het bestand comprimeren in verschilende formaten.',
	'ACP_RESTORE_EXPLAIN'	=> 'Dit zal een volledig herstel uitvoeren op al uw phpBB-tabellen van een opgeslagen bestand. Als uw server het ondersteund kunt u gzip of bzip ingepakte tekstbestanden gebruiken en het zal automatisch uitgepakt worden. <strong>WAARSCHUWING</strong> dit zal alle bestaande gegevens overschrijven. Het herstel kan enige tijd in beslag nemen, verlaat ook niet deze pagina totdat het compleet is. Back-ups zijn opgeslagen in de <samp>store/</samp>-map en zouden gegeneerd zijn door de back-up functionaliteit van phpBB. Herstellen van back-ups die niet zijn gemaakt door het ingebouwde systeem zullen waarschijnlijk niet werken.',

	'BACKUP_DELETE'		=> 'Het back-up bestand is succesvol verwijderd.',
	'BACKUP_INVALID'	=> 'Het geselecteerde bestand om te back-uppen is ongeldig.',
	'BACKUP_OPTIONS'	=> 'Back-up opties',
	'BACKUP_SUCCESS'	=> 'Het back-up bestand is succesvol aangemaakt.',
	'BACKUP_TYPE'		=> 'Back-up type',

	'DATABASE'					=> 'Database-hulpmiddelen',
	'DATA_ONLY'					=> 'Alleen gegevens',
	'DELETE_BACKUP'				=> 'Back-up verwijderen',
	'DELETE_SELECTED_BACKUP'	=> 'Weet u zeker dat u de geselecteerde back-up wilt verwijderen?',
	'DESELECT_ALL'				=> 'Selectie verwijderen',
	'DOWNLOAD_BACKUP'			=> 'Back-up downloaden',

	'FILE_TYPE'			=> 'Bestandstype',
	'FILE_WRITE_FAIL'	=> 'Het was niet mogelijk om een bestand te schrijven naar de opslag-map.',
	'FULL_BACKUP'		=> 'Volledig',

	'RESTORE_FAILURE'		=> 'Het back-up bestand is mogelijk beschadigd.',
	'RESTORE_OPTIONS'		=> 'Herstelopties',
	'RESTORE_SUCCESS'		=> 'De database is succesvol hersteld.<br /><br />Uw forum zal nu in de staat zijn van wanneer de back-up was genomen.',

	'SELECT_ALL'			=> 'Alles selecteren',
	'SELECT_FILE'			=> 'Een bestand selecteren',
	'START_BACKUP'			=> 'Back-up starten',
	'START_RESTORE'			=> 'Herstel starten',
	'STORE_AND_DOWNLOAD'	=> 'Opslaan en downloaden',
	'STORE_LOCAL'			=> 'Bestand lokaal opslaan',
	'STRUCTURE_ONLY'		=> 'Alleen structuur',

	'TABLE_SELECT'		=> 'Tabel selecteren',
	'TABLE_SELECT_ERROR'=> 'U moet minstens één tabel selecteren.',
));

?>