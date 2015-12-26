<?php
/** 
*
* acp_ban [Croatian]
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

// Banning
$lang = array_merge($lang, array(
'1_HOUR'=> '1 sat',
'30_MINS'=> '30 minuta',
'6_HOURS'=> '6 sati',

'ACP_BAN_EXPLAIN'=> 'Ovdje možeš upravljati isključivanjem korisnika/ca i to preko korisničkog imena, IP odnosno e-mail adrese.<br />Time ćeš onemogućiti pristupanje korisniku/ci bilo kojem dijelu foruma.<br />Ako želiš, možeš dati kratak [maksimalno 3000 znakova] razlog isključenja [što će biti evidentirano u administratorskim logovima].<br />Možeš određivati dužinu isključenja, npr.  ukoliko želiš isključiti korisnika/cu, ne na npr. 3 mjeseca, već npr. do određenog datuma, izabrat ćeš <span style="text-decoration: underline;">Do -&gt;</span> te unijeti datum u <kbd>GGGG-MM-DD</kbd> formatu.',

'BAN_EXCLUDE'=> 'Izuzmi od isključenja',
'BAN_LENGTH'=> 'Trajanje isključenja',
'BAN_REASON'=> 'Razlog isključenja',
'BAN_GIVE_REASON'=> 'Razlog isključenja koji će biti dan isključenom/j',
'BAN_UPDATE_SUCCESSFUL'=> 'Lista isključenih je ažurirana.',
'BANNED_UNTIL_DATE'=> 'do %s', // Primjer: "Do Pon 13.Lip.2009, 14:44"
'BANNED_UNTIL_DURATION'=> '%1$s (do %2$s)', // Primjer: "7 dana (do Uto 14.Lip.2009, 14:44)"

'EMAIL_BAN'=> 'Isključenje jedne ili više e-mail adresa',
'EMAIL_BAN_EXCLUDE_EXPLAIN'=> 'Omogući ovu opciju ukoliko želiš izuzeti unesenu/e e-mail adresu/e od svih trenutnih isključenja.',
'EMAIL_BAN_EXPLAIN'=> 'Ukoliko želiš unijeti više e-mail adresa, unesi svaku u novi redak.<br />Možeš koristiti * kao zamjenski znak, npr. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, itd.',
'EMAIL_NO_BANNED'=> 'Nema isključenih e-mail adresa.',
'EMAIL_UNBAN'=> 'Od-isključi odnosno od-izuzmi e-mail adrese',
'EMAIL_UNBAN_EXPLAIN'=> 'Možeš od-isključiti odnosno od-izuzeti više e-mail adresa  odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice&preglednika.<br />Izuzete e-mail adrese bit će označene.',

'IP_BAN'=> 'Isključenje jedne ili više IP adresa',
'IP_BAN_EXCLUDE_EXPLAIN'=> 'Omogući ovu opciju ukoliko želiš izuzeti unesenu/e IP adresu/e od svih trenutnih isključenja.',
'IP_BAN_EXPLAIN'=> 'Ukoliko želiš unijeti više IP adresa, unesi svaku u novi redak.<br />Za određivanje raspona IP adresa, početak i kraj odvoji rastavnicom (-). Možeš koristiti * kao zamjenski znak.',
'IP_HOSTNAME'=> 'IP adrese/imena host(ov)a',
'IP_NO_BANNED'=> 'Nema isključenih IP adresa.',
'IP_UNBAN'=> 'Od-isključi odnosno od-izuzmi IP adrese',
'IP_UNBAN_EXPLAIN'=> 'Možeš od-isključiti odnosno od-izuzeti više IP adresa  odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice&preglednika.<br />Izuzete IP adrese bit će označene.',

'LENGTH_BAN_INVALID'=> 'Datum mora biti u formatu: <kbd>GGGG-MM-DD</kbd>.',

'PERMANENT'=> 'Stalno',

'UNTIL'=> 'Do',
'USER_BAN'=> 'Isključenje jednog ili više korisničkih imena',
'USER_BAN_EXCLUDE_EXPLAIN'=> 'Omogući ovu opciju ukoliko želiš izuzeti uneseno/e korisničko/a ime/na od svih trenutnih isključenja.',
'USER_BAN_EXPLAIN'=> 'Ukoliko želiš unijeti više korisničkih imena, unesi svako u novi redak.<br />Za automatsko dodavanje korisničkih imena možeš koristiti <span style="text-decoration: underline;">Pronađi korisničko ime</span> funkciju.',
'USER_NO_BANNED'=> 'Nema isključenih korisničkih imena.',
'USER_UNBAN'=> 'Od-isključi odnosno od-izuzmi korisnička imena',
'USER_UNBAN_EXPLAIN'=> 'Možeš od-isključiti odnosno od-izuzeti više korisničkih imena odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice&preglednika.<br />Izuzeta korisnička imena bit će označena.',
));
?>