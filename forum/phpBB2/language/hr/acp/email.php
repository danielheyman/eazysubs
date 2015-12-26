<?php
/** 
*
* acp_email [Croatian]
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

// Email settings
$lang = array_merge($lang, array(
'ACP_MASS_EMAIL_EXPLAIN'=> 'Odavde možeš poslati e-mail (svim) korisnicima/ama foruma odnosno, <strong>ukoliko je omogućeno</strong>, članovima/icama korisničkih grupa.<br />E-mail će biti poslan s e-mail adrese administratora/ice foruma, (a) primatelji/ce će biti navedeni/e u BCC [Blind Carbon Copy - Na znanje] zaglavlju.<br />Zadano je postavljeno da u jednom e-mailu može biti navedeno maksimalno 50 primatelja/ica, ukoliko ih je više, bit će poslano više e-mailova. Ukoliko šalješ poruku velikom broju primatelja/ica, trebat će (ti) malo strpljenja, nemoj prekinuti slanje “na pola puta”. Uobičajeno je da slanje skupnog e-maila potraje neko vrijeme. Bit ćeš  obaviješten/a kada e-mail bude poslan.',
'ALL_USERS'=> 'Svi/e korisnici/e',

'COMPOSE'=> 'Pisanje/sastavljanje/slanje poruke/e-maila',

'EMAIL_SEND_ERROR'=> 'Prilikom slanja e-maila došlo je do jedne/više grešaka.<br />Provjeri %slogove grešaka%s za detaljne informacije.',
'EMAIL_SENT'=> 'Poruka je poslana.',
'EMAIL_SENT_QUEUE'=> 'Poruka je stavljena “na čekanje” i čeka slanje.',

'LOG_SESSION'=> 'Logiraj sesije e-maila u kritične logove.',

'SEND_IMMEDIATELY'=> 'Pošalji odmah',
'SEND_TO_GROUP'=> 'Pošalji grupi',
'SEND_TO_USERS'=> 'Pošalji korisnicima/ama',
'SEND_TO_USERS_EXPLAIN'=> 'Unošenje korisničkog/ih imena prepisat će izbor grupe iznad.<br />Unesi svako korisničko ime u novi redak.',

'MAIL_HIGH_PRIORITY'=> 'Visok',
'MAIL_LOW_PRIORITY'=> 'Nizak',
'MAIL_NORMAL_PRIORITY'=> 'Običan',
'MAIL_PRIORITY'=> 'Prioritet slanja',
'MASS_MESSAGE'=> 'Poruka',
'MASS_MESSAGE_EXPLAIN'=> 'Koristi običan [plain] tekst jer će sva eventualna formatiranja biti uklonjena prije slanja.',

'NO_EMAIL_MESSAGE'=> 'Moraš unijeti poruku.',
'NO_EMAIL_SUBJECT'=> 'Moraš unijeti naslov [predmet] poruke.',
));
?>