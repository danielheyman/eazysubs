<?php
/** 
*
* acp_language [Croatian]
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

$lang = array_merge($lang, array(
'ACP_FILES'=> 'Jezične datoteke',
'ACP_LANGUAGE_PACKS_EXPLAIN'=> 'Ovdje možeš instalirati/izbrisati jezične pakete. Zadani jezični paket je označen zvjezdicom (*).',

'EMAIL_FILES'=> 'E-mail predlošci',

'FILE_CONTENTS'=> 'Sadržaj datoteke',
'FILE_FROM_STORAGE'=> 'Datoteka iz pohranišne mape',

'HELP_FILES'=> 'Uputne datoteke',

'INSTALLED_LANGUAGE_PACKS'=> 'Instaliran(i) jezični paket(i)',
'INVALID_LANGUAGE_PACK'=> 'Izabran jezični paket je neispravan.<br />Provjeri što nije u redu s njime te ga, ukoliko je potrebno, ponovo uploadiraj.',
'INVALID_UPLOAD_METHOD'=> 'Izabrana metoda uploadiranja je neispravna, izaberi drugu metodu.',

'LANGUAGE_DETAILS_UPDATED'=> 'Detalji (su) ažurirani.',
'LANGUAGE_ENTRIES'=> 'Jezični unosi',
'LANGUAGE_ENTRIES_EXPLAIN'=> 'Ovdje možeš izmijeniti postojeće jezične unose odnosno prevesti one koji nisu prevedeni.<br /><strong>Imaj na umu:</strong> kad izmijeniš jezični paket, promjene će biti pohranjene u posebnu mapu za preuzimanje. Promjene neće biti vidljive dok ne zamijeniš originalnu datoteku s novom [moraš ju uploadirati].',
'LANGUAGE_FILES'=> 'Jezične datoteke',
'LANGUAGE_KEY'=> 'Jezični ključ',
'LANGUAGE_PACK_ALREADY_INSTALLED'=> 'Jezični paket je već instaliran.',
'LANGUAGE_PACK_DELETED'=> 'Jezični paket <strong>%s</strong> je izbrisan.<br />Svim korisnicima/ama, koji/e su izbrisan jezik imali/e kao zadani, kao zadani jezik postavljen je zadani jezik foruma.',
'LANGUAGE_PACK_DETAILS'=> 'Detalji jezičnog paketa',
'LANGUAGE_PACK_INSTALLED'=> 'Jezični paket <strong>%s</strong> je instaliran.',
'LANGUAGE_PACK_ISO'=> 'ISO',
'LANGUAGE_PACK_LOCALNAME'=> 'Lokalno ime',
'LANGUAGE_PACK_NAME'=> 'Ime',
'LANGUAGE_PACK_NOT_EXIST'=> 'Izabran jezični paket ne postoji.',
'LANGUAGE_PACK_USED_BY'=> 'Koriste [uključujući robote]',
'LANGUAGE_VARIABLE'=> 'Jezične varijable',
'LANG_AUTHOR'=> 'Autor/ica jezičnog paketa',
'LANG_ENGLISH_NAME'=> 'Englesko ime',
'LANG_ISO_CODE'=> 'ISO kod',
'LANG_LOCAL_NAME'=> 'Lokalno ime',

'MISSING_LANGUAGE_FILE'=> 'Nedostajuća jezična datoteka: <strong style="color:red">%s</strong>',
'MISSING_LANG_VARIABLES'=> 'Nedostajuća/e jezična/e varijabla/e',
'MODS_FILES'=> 'Jezične datoteke MOD-ova',

'NO_FILE_SELECTED'=> 'Nisi specificirao/la jezičnu datoteku.',
'NO_LANG_ID'=> 'Nisi specificirao/la jezični paket.',
'NO_REMOVE_DEFAULT_LANG'=> 'Ne možeš izbrisati zadani jezični paket.<br />Ukoliko želiš izbrisati ovaj jezični paket, postavi neki drugi jezik kao zadani jezik foruma.',
'NO_UNINSTALLED_LANGUAGE_PACKS'=> 'Nema neinstaliranih jezičnih paketa.',

'REMOVE_FROM_STORAGE_FOLDER'=> 'Izbriši iz pohranišne mape',

'SELECT_DOWNLOAD_FORMAT'=> 'Izaberi format preuzimanja',
'SUBMIT_AND_DOWNLOAD'=> 'Pošalji i preuzmi datoteku',
'SUBMIT_AND_UPLOAD'=> 'Pošalji i uploadiraj datoteku',

'THOSE_MISSING_LANG_FILES'=> 'Sljedeće jezične datoteke nedostaju u <strong>%s</strong> jezičnoj mapi.',
'THOSE_MISSING_LANG_VARIABLES'=> 'Sljedeće jezične varijable nedostaju u <strong>%s</strong> jezičnom paketu.',

'UNINSTALLED_LANGUAGE_PACKS'=> 'Neinstaliran(i) jezični paket(i)',

'UNABLE_TO_WRITE_FILE'=> 'Datoteka nije mogla biti za(u)pisana u %s.',
'UPLOAD_COMPLETED'=> 'Uploadiranje je završeno.',
'UPLOAD_FAILED'=> 'Uploadiranje nije uspjelo iz nepoznatog razloga.<br />Probaj zamijeniti datoteku ručno.',
'UPLOAD_METHOD'=> 'Metoda uploadiranja',
'UPLOAD_SETTINGS'=> 'Postavke uploadiranja',

'WRONG_LANGUAGE_FILE'=> 'Izabran jezik je neispravan.',
));
?>