<?php
/** 
*
* acp_users [Croatian]
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
'ADMIN_SIG_PREVIEW'=> 'Prikaz potpisa',
'AT_LEAST_ONE_FOUNDER'=> 'Ne možeš promijeniti ovog/u korisnika/cu iz osnivača/ice u običnog/u korisnika/cu.<br />Na forumu mora postajati najmanje jedno korisničko ime s osnivačkim statusom.<br />Ukoliko želiš promijeniti status (korisnika/ce) iz osnivača/ice u neki drugi, prvo moraš promovirati (nekog/u) drugog/u korisnika/cu u osnivača/icu.',

'BAN_ALREADY_ENTERED'=> 'Isključenje je već izvršeno po ovom kriteriju poradi čega lista isključenja nije ažurirana.',
'BAN_SUCCESSFUL'=> 'Isključenje je izvršeno.',

'CANNOT_BAN_FOUNDER'=> 'Nemaš dopuštenje za isključivanje korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_BAN_YOURSELF'=> 'Nemaš dopuštenje za isključivanje korisničkog računa samog/e sebe.',
'CANNOT_DEACTIVATE_BOT'=> 'Nemaš dopuštenje za deaktiviranje računa robota.<br />Umjesto toga, možeš deaktivirati samog/e robota/e sa/na stranici robota.',
'CANNOT_DEACTIVATE_FOUNDER'=> 'Nemaš dopuštenje za deaktiviranje korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_DEACTIVATE_YOURSELF'=> 'Nemaš dopuštenje za deaktiviranje korisničkog računa samog/e sebe.',
'CANNOT_FORCE_REACT_BOT'=> 'Nemaš dopuštenje za forsiranje deaktivacije računa robota.<br />Umjesto toga, možeš reaktivirati samog/e robota/e sa/na stranici robota.',
'CANNOT_FORCE_REACT_FOUNDER'=> 'Nemaš dopuštenje za forsiranje deaktivacije korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_FORCE_REACT_YOURSELF'=> 'Nemaš dopuštenje za forsiranje deaktivacije korisničkog računa samog/e sebe.',
'CANNOT_REMOVE_ANONYMOUS'=> 'Ne možeš izbrisati korisničke račune gostiju.',
'CANNOT_REMOVE_YOURSELF'=> 'Nemaš dopuštenje za izbrisivanje korisničkog računa samog/e sebe.',
'CANNOT_SET_FOUNDER_IGNORED' => 'Ne možeš promovirati ignorirane korisnik/ce u osnivače.',
'CANNOT_SET_FOUNDER_BOT'=> 'Ne možeš promovirati ignorirane korisnik/ce u osnivače.',
'CANNOT_SET_FOUNDER_INACTIVE'=> 'Kako bi mogao/la promovirati korisnika/cu u osnivača/icu, prvo moraš aktivirati njegov/njezin korisnički račun [samo aktivirani/e korisnici/e (njihovi korisnički računi) mogu biti promovirani].',
'CONFIRM_EMAIL_EXPLAIN'=> 'Potvrdi e-mail adresu samo ako si ju [iznad] promijenio/la.',

'DELETE_POSTS'=> 'Izbriši postove',
'DELETE_USER'=> 'Izbriši korisnički račun',
'DELETE_USER_EXPLAIN'=> 'Ova operacija ne može biti poništena što će reći da “nema povratka na prijašnje stanje” ukoliko izbrišeš (neki/nečiji) korisnički račun.',

'FORCE_REACTIVATION_SUCCESS'=> 'Reaktivacija je (is)forsirana.',
'FOUNDER'=> 'Osnivač/ica',
'FOUNDER_EXPLAIN'=> 'Osnivač/ice imaju sve administratorske ovlasti, ne mogu biti isključeni/e te njihov korisnički račun ne može biti mijenjan od strane ne-osnivača/ica.',

'GROUP_APPROVE'=> 'Odobri korisnika/cu',
'GROUP_DEFAULT'=> 'Postavi grupu zadanom za korisnika/cu',
'GROUP_DELETE'=> 'Isključi korisnika/cu iz grupe',
'GROUP_DEMOTE'=> 'Smijeni s položaja vođe grupe',
'GROUP_PROMOTE'=> 'Postavi za vođu grupe',

'IP_WHOIS_FOR'=> 'IP whois za %s',

'LAST_ACTIVE'=> 'Zadnji put aktivan/na',

'MOVE_POSTS_EXPLAIN'=> 'Izaberi forum u koji želiš premjestiti sve postove korisnika/ce.',

'NO_SPECIAL_RANK'=> 'Nije dodijeljen poseban status',
'NO_WARNINGS'=> 'Nema upozorenja.',
'NOT_MANAGE_FOUNDER'=> 'Pokušao/la si promijeniti korisnički račun osnivača/ice.<br />Samo osnivači/ce mogu mijenjati korisničke račune (ostalih) osnivača/ica.',

'QUICK_TOOLS'=> 'Brz(o)Bir',

'REGISTERED'=> 'Registriran/a',
'REGISTERED_IP'=> 'Registriran/a s IP adresom',
'RETAIN_POSTS'=> 'Zadrži postove',

'SELECT_FORM'=> 'Izaberi formu',
'SELECT_USER'=> 'Izaberi korisnika/cu',

'USER_ADMIN'=> 'Upravljanje korisnicima/ama',
'USER_ADMIN_ACTIVATE'=> 'Aktiviraj korisnički račun',
'USER_ADMIN_ACTIVATED'=> 'Korisnički račun je aktiviran.',
'USER_ADMIN_AVATAR_REMOVED'=> 'Avatar je uklonjen iz korisničkog računa.',
'USER_ADMIN_BAN_EMAIL'=> 'Isključi po e-mail adresi',
'USER_ADMIN_BAN_EMAIL_REASON'=> 'E-mail adresa je isključena putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_IP'=> 'Isključi po IP adresi',
'USER_ADMIN_BAN_IP_REASON'=> 'IP adresa je isključena putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_NAME_REASON'=> 'Korisničko ime je isključeno putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_USER'=> 'Isključi po korisničkom imenu',
'USER_ADMIN_DEACTIVATE'=> 'Deaktiviraj korisnički račun',
'USER_ADMIN_DEACTIVED'=> 'Korisnički račun je deaktiviran.',
'USER_ADMIN_DEL_ATTACH'=> 'Izbriši sve privitke',
'USER_ADMIN_DEL_AVATAR'=> 'Izbriši avatar',
'USER_ADMIN_DEL_OUTBOX'=> 'Isprazni odlazni sandučić privatnih poruka',
'USER_ADMIN_DEL_POSTS'=> 'Izbriši sve postove',
'USER_ADMIN_DEL_SIG'=> 'Izbriši potpis',
'USER_ADMIN_EXPLAIN'=> 'Ovdje možeš mijenjati korisničke informacije te određene posebne postavke.',
'USER_ADMIN_FORCE'=> 'Prinudi (na) reaktivaciju',
'USER_ADMIN_LEAVE_NR'=> 'Ukloni iz Novo registriranih korisnika/ca',
'USER_ADMIN_MOVE_POSTS'=> 'Premjesti sve postove',
'USER_ADMIN_SIG_REMOVED'=> 'Potpis je uklonjen iz korisničkog računa.',
'USER_ATTACHMENTS_REMOVED'=> 'Izbrisani su svi privitci koje je postao/la (ovaj) korisnik/ca.',
'USER_AVATAR_NOT_ALLOWED'=> 'Avatar ne može biti prikazan, jer su avatari onemogućeni.',
'USER_AVATAR_UPDATED'=> 'Ažurirani su detalji avatara korisnika/ce.',
'USER_AVATAR_TYPE_NOT_ALLOWED'=> 'Trenutni avatar ne može biti prikazan, jer je ovaj tip avatara onemogućen.',
'USER_CUSTOM_PROFILE_FIELDS'=> 'Prilagođena korisnička polja',
'USER_DELETED'=> 'Korisnički račun je izbrisan.',
'USER_GROUP_ADD'=> 'Dodaj korisnika/cu grupi',
'USER_GROUP_NORMAL'=> 'Korisnik/ca je član/ica sljedećih korisnički definiranih grupa',
'USER_GROUP_PENDING'=> 'Korisnik/ca je “na čekanju” u sljedećim korisničkim grupama',
'USER_GROUP_SPECIAL'=> 'Korisnik/ca je član/ica sljedećih pred-definiranih',
'USER_LIFTED_NR'=> 'Uspješno uklonjen status novo registriranog/e korisnika/ce.',
'USER_NO_ATTACHMENTS' => 'Ne dodanih privitaka za prikaz.',
'USER_OUTBOX_EMPTIED'=> 'Uspješno ispražnjen korisnički odlazni sandučić za privatne poruke.',
'USER_OUTBOX_EMPTY'=> 'Korisnički sandučić odlaznih privatnih poruka je već bio prazan.',
'USER_OVERVIEW_UPDATED'=> 'Korisnički detalji (su) ažurirani.',
'USER_POSTS_DELETED'=> 'Izbrisani su svi postovi (ovog/e) korisnika/ce.',
'USER_POSTS_MOVED'=> 'Postovi korisnika/ce premješteni su u odredišni forum.',
'USER_PREFS_UPDATED'=> 'Korisničke postavke (su) ažurirane.',
'USER_PROFILE'=> 'Korisnički profil',
'USER_PROFILE_UPDATED'=> 'Korisnički profil je ažuriran.',
'USER_RANK'=> 'Status korisnika/ce ',
'USER_RANK_UPDATED'=> 'Status korisnika/ce je ažuriran.',
'USER_SIG_UPDATED'=> 'Potpis korisnika/ce je ažuriran.',
'USER_WARNING_LOG_DELETED'=> 'Nema dostupnih informacija. Najvjerojatnije je zapis izbrisan.',
'USER_TOOLS'=> 'Osnovne radnje',
));
?>