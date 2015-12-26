<?php
/** 
*
* acp_modules [Croatian]
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
'ACP_MODULE_MANAGEMENT_EXPLAIN'=> 'Ovdje možeš upravljati svim vrstama modula.<br />AF ima trorazinsku  izborničku strukturu [Kategorija -> Kategorija -> Modul] čime ostalo ima dvorazinsku izborničku strukturu [Kategorija -> Modul] koja mora biti zadržana.<br />Ukoliko onemogućiš odnosno izbrišeš module odgovorne za upravljanje modulima, nastat će problemi.',
'ADD_MODULE'=> 'Dodaj modul',
'ADD_MODULE_CONFIRM'=> 'Jesi li siguran/na da želiš dodati izabran modul izabranim modom?',
'ADD_MODULE_TITLE'=> 'Dodaj modul',

'CANNOT_REMOVE_MODULE'=> 'Modul nije moguće izbrisati jer ima podmodule.<br />Kako bi mogao/la izbrisati modul, prvo moraš izbrisati ili premjestiti sve (njegove) podmodule.',
'CATEGORY'=> 'Kategorija',
'CHOOSE_MODE'=> 'Izaberi mod modula',
'CHOOSE_MODE_EXPLAIN'=> 'Izbor moda modula.',
'CHOOSE_MODULE'=> 'Izaberi modul',
'CHOOSE_MODULE_EXPLAIN'=> 'Izbor datoteke nazvane (ovim) modulom.',
'CREATE_MODULE'=> 'Kreiraj novi modul',

'DEACTIVATED_MODULE'=> 'Deaktiviraj modul',
'DELETE_MODULE'=> 'Izbriši modul',
'DELETE_MODULE_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati modul?',

'EDIT_MODULE'=> 'Uredi modul',
'EDIT_MODULE_EXPLAIN'=> 'Ovdje možeš unijeti specifične postavke modula.',

'HIDDEN_MODULE'=> 'Skriven modul',

'MODULE'=> 'Modul',
'MODULE_ADDED'=> 'Modul je dodan.',
'MODULE_DELETED'=> 'Modul je izbrisan.',
'MODULE_DISPLAYED'=> 'Prikazivanje modula',
'MODULE_DISPLAYED_EXPLAIN'=> 'Ukoliko ne želiš da ovaj modul bude prikazan, ali ga želiš koristiti, postavi (ovo) na “Ne”.',
'MODULE_EDITED'=> 'Modul je uređen.',
'MODULE_ENABLED'=> 'Omogući modul',
'MODULE_LANGNAME'=> 'Jezično ime modula',
'MODULE_LANGNAME_EXPLAIN'=> 'Unesi prikazano ime modula.<br />Koristi jezičnu konstantu ako je modul povezan s jezičnom datotekom.',
'MODULE_TYPE'=> 'Tip modula',

'NO_CATEGORY_TO_MODULE'=> 'Nije bilo moguće pretvoriti kategoriju u modul.<br />Ukoliko želiš izvesti ovu radnju, moraš izbrisati/premjestiti sve podmodule modula.',
'NO_MODULE'=> 'Nije pronađen niti jedan modul.',
'NO_MODULE_ID'=> 'Modul nije unesen.',
'NO_MODULE_LANGNAME'=> 'Nije uneseno jezično ime modula.',
'NO_PARENT'=> 'Bez krovnog modula',

'PARENT'=> 'Krovni modul',
'PARENT_NO_EXIST'=> 'Krovni modul ne postoji.',

'SELECT_MODULE'=> 'Izaberi modul',
));
?>