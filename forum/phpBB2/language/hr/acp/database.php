<?php
/** 
*
* acp_database [Croatian]
*
* @package language
* @version $Id: $
* @copyright phpBB (c) 2000-2008 phpBB Group 
* @author Ančica Sečan 2003-2008
* @author hecos 2010
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
'ACP_BACKUP_EXPLAIN'=> 'Ovdje možeš backupirati [napraviti kopiju] sve phpBB podatke.<br />Datoteku možeš pohraniti lokalno [<samp>store/</samp>] ili ju direktno preuzeti.<br />Ukoliko server podržava tu opciju, možeš koristiti gzip odnosno bilo koju drugu ponuđenu kompresiju kako bi smanjio/la  veličinu datoteke prije preuzimanja.',
'ACP_RESTORE_EXPLAIN'=> 'Ovdje možeš izvršiti potpun povrat svih phpBB tablica iz [ranije] pohranjene datoteke.<br />Ukoliko server podržava tu opciju, možeš uploadirati gzip ili bzip2 kompresiranu tekst datoteku koja će automatski biti dekompresirana.<br /><strong>UPOZORENJE:</strong> ovime ćeš prepisati postojeće podatke.<br />Proces može [po]trajati poduže, stoga, ostani na ovoj stranici dok ne bude zgotovljen.<br />Zaštitne kopije [backupi] pohranjene su u <samp>store/</samp> mapi i pretpostavlja se da su generirane phpBB backup funkcijom.<br />Vraćanje zaštitnih kopija koje nisu kreirane ugrađenim sistemom kreiranja zaštitnih kopija može rezultirati njihovim funkcioniranjem, ali i ne mora.',

'BACKUP_DELETE'=> 'Backup datoteka je izbrisana.',
'BACKUP_INVALID'=> 'Datoteka izabrana za backup je neispravna.',
'BACKUP_OPTIONS'=> 'Backup postavke',
'BACKUP_SUCCESS'=> 'Backup datoteka je kreirana.',
'BACKUP_TYPE'=> 'Vrsta backupa',

'DATABASE'=> 'Alati za bazu',
'DATA_ONLY'=> 'Samo podatci',
'DELETE_BACKUP'=> 'Izbriši backup',
'DELETE_SELECTED_BACKUP'=> 'Jesi li siguran/na da želiš izbrisati backup?',
'DESELECT_ALL'=> 'Odoznači sve',
'DOWNLOAD_BACKUP'=> 'Preuzmi backup',

'FILE_TYPE'=> 'Vrsta datoteke',
'FILE_WRITE_FAIL'=> 'Nije moguće zapisati datoteku u mapu za pohranu.',
'FULL_BACKUP'=> 'Potpun',

'RESTORE_FAILURE'=> 'Backup datoteka može biti neispravna.',
'RESTORE_OPTIONS'=> 'Restore postavke',
'RESTORE_SUCCESS'=> 'Baza je uspješno povraćena.<br />Forum bi sada trebao biti u stanju u kakvom je bio kada je napravljen backup.',

'SELECT_ALL'=> 'Označi sve',
'SELECT_FILE'=> 'Označi datoteku',
'START_BACKUP'=> 'Započni backup',
'START_RESTORE'=> 'Započni restore',
'STORE_AND_DOWNLOAD'=> 'Pohrani i preuzmi',
'STORE_LOCAL'=> 'Pohrani datoteku lokalno',
'STRUCTURE_ONLY'=> 'Samo struktura',

'TABLE_SELECT'=> 'Izbor tablica',
'TABLE_SELECT_ERROR'=> 'Moraš izabrati najmanje jednu tablicu.',
));
?>